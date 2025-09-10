<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->orderBy('created_at', 'desc')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string', // Keep for backward compatibility
            'content' => 'nullable|string', // New field
            'excerpt' => 'nullable|string',
            'tags' => 'nullable|string',
            'categories' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'author' => 'nullable|string|max:255',
            'status' => 'nullable|in:draft,published,archived',
            'is_featured' => 'nullable|boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|text',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
            'image_url' => 'nullable|string',
            'date_publish' => 'nullable|date',
            'published_at' => 'nullable|date',
        ]);

        // Handle image upload
        if ($request->hasFile('img')) {
            $validated['img'] = $this->resizeAndStore($request->file('img'), 'blogs', 1200);
            $validated['image_url'] = $validated['img']; // Set both for compatibility
        }

        // Set defaults
        $validated['status'] = $validated['status'] ?? 'draft';
        $validated['is_featured'] = $validated['is_featured'] ?? false;
        $validated['published_at'] = $validated['published_at'] ?? $validated['date_publish'] ?? now();

        // Generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        Blog::create($validated);
        return redirect()->route('admin.blogs.index')->with('success','Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }

    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'excerpt' => 'nullable|string',
            'tags' => 'nullable|string',
            'categories' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'author' => 'nullable|string|max:255',
            'status' => 'nullable|in:draft,published,archived',
            'is_featured' => 'nullable|boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|text',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
            'image_url' => 'nullable|string',
            'date_publish' => 'nullable|date',
            'published_at' => 'nullable|date',
        ]);

        // Handle image upload
        if ($request->hasFile('img')) {
            // Delete old image
            if ($blog->img) {
                $old = str_replace('/storage/', '', $blog->img);
                if (Storage::disk('public')->exists($old)) {
                    Storage::disk('public')->delete($old);
                }
                // delete old thumbnail if exists
                $oldThumb = str_replace('blogs/', 'blogs/thumbs/', $old);
                if (Storage::disk('public')->exists($oldThumb)) {
                    Storage::disk('public')->delete($oldThumb);
                }
            }
            
            $validated['img'] = $this->resizeAndStore($request->file('img'), 'blogs', 1200);
            $validated['image_url'] = $validated['img']; // Set both for compatibility
        }

        // Set defaults
        $validated['status'] = $validated['status'] ?? 'draft';
        $validated['is_featured'] = $validated['is_featured'] ?? false;
        $validated['published_at'] = $validated['published_at'] ?? $validated['date_publish'] ?? $blog->published_at;

        // Generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $blog->update($validated);
        return redirect()->route('admin.blogs.index')->with('success','Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        // Delete associated image
        if ($blog->img) {
            $old = str_replace('/storage/', '', $blog->img);
            if (Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
        }
        
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success','Blog deleted.');
    }
    
    /**
     * Resize uploaded image to max width and store to public disk.
     */
    private function resizeAndStore(\Illuminate\Http\UploadedFile $file, string $directory, int $maxWidth = 1200): string
    {
        $mime = $file->getMimeType();
        $sourcePath = $file->getPathname();
        if (!extension_loaded('gd')) {
            $path = $file->store($directory, 'public');
            return Storage::disk('public')->url($path);
        }
        switch ($mime) {
            case 'image/jpeg':
            case 'image/jpg':
                $source = imagecreatefromjpeg($sourcePath);
                break;
            case 'image/png':
                $source = imagecreatefrompng($sourcePath);
                break;
            case 'image/webp':
                $source = imagecreatefromwebp($sourcePath);
                break;
            case 'image/gif':
                $source = imagecreatefromgif($sourcePath);
                break;
            default:
                $path = $file->store($directory, 'public');
                return Storage::disk('public')->url($path);
        }
        
        $sourceWidth = imagesx($source);
        $sourceHeight = imagesy($source);
        
        if ($sourceWidth <= $maxWidth) {
            $path = $file->store($directory, 'public');
            return Storage::disk('public')->url($path);
        }
        
        $ratio = $maxWidth / $sourceWidth;
        $newWidth = $maxWidth;
        $newHeight = $sourceHeight * $ratio;
        
        $resized = imagecreatetruecolor($newWidth, $newHeight);
        
        // Preserve transparency for PNG and GIF
        if ($mime === 'image/png' || $mime === 'image/gif') {
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            $transparent = imagecolorallocatealpha($resized, 255, 255, 255, 127);
            imagefilledrectangle($resized, 0, 0, $newWidth, $newHeight, $transparent);
        }
        
        imagecopyresampled($resized, $source, 0, 0, 0, 0, $newWidth, $newHeight, $sourceWidth, $sourceHeight);
        
        $filename = uniqid() . '_' . time() . '.' . pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $path = $directory . '/' . $filename;
        
        switch ($mime) {
            case 'image/jpeg':
            case 'image/jpg':
                imagejpeg($resized, storage_path('app/public/' . $path), 90);
                break;
            case 'image/png':
                imagepng($resized, storage_path('app/public/' . $path), 9);
                break;
            case 'image/webp':
                imagewebp($resized, storage_path('app/public/' . $path), 90);
                break;
            case 'image/gif':
                imagegif($resized, storage_path('app/public/' . $path));
                break;
        }
        
        imagedestroy($source);
        imagedestroy($resized);
        
        return Storage::disk('public')->url($path);
    }
}
