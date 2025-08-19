<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tags' => 'nullable|string',
            'categories' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
            'date_publish' => 'nullable|date',
        ]);

        if ($request->hasFile('img')) {
            $validated['img'] = $this->resizeAndStore($request->file('img'), 'blogs', 1200);
        }

        Blog::create($validated);
        return redirect()->route('admin.blogs.index');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tags' => 'nullable|string',
            'categories' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
            'date_publish' => 'nullable|date',
        ]);

        if ($request->hasFile('img')) {
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
        }

        $blog->update($validated);
        return redirect()->route('admin.blogs.index');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index');
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
                $src = imagecreatefromjpeg($sourcePath); $ext = 'jpg'; break;
            case 'image/png':
                $src = imagecreatefrompng($sourcePath); $ext = 'png'; break;
            case 'image/gif':
                $src = imagecreatefromgif($sourcePath); $ext = 'gif'; break;
            case 'image/webp':
                if (function_exists('imagecreatefromwebp')) { $src = imagecreatefromwebp($sourcePath); $ext = 'webp'; break; }
                $src = imagecreatefromjpeg($sourcePath); $ext = 'jpg'; break;
            default:
                $path = $file->store($directory, 'public');
                return Storage::disk('public')->url($path);
        }
        $origW = imagesx($src); $origH = imagesy($src);
        $newW = $origW; $newH = $origH;
        if ($origW > $maxWidth) { $newW = $maxWidth; $newH = (int) floor($origH * ($maxWidth / $origW)); }
        $dst = imagecreatetruecolor($newW, $newH);
        if (in_array($ext, ['png', 'webp'])) { imagealphablending($dst,false); imagesavealpha($dst,true); $transparent=imagecolorallocatealpha($dst,0,0,0,127); imagefilledrectangle($dst,0,0,$newW,$newH,$transparent);}        
        imagecopyresampled($dst,$src,0,0,0,0,$newW,$newH,$origW,$origH);
        ob_start();
        switch ($ext) { case 'jpg': imagejpeg($dst,null,85); break; case 'png': imagepng($dst,null,6); break; case 'gif': imagegif($dst); break; case 'webp': if(function_exists('imagewebp')){ imagewebp($dst,null,85);} else { imagejpeg($dst,null,85); $ext='jpg'; } break; }
        $binary = ob_get_clean();

        // build thumbnail (max width 320)
        $thumbW = min(320, $newW);
        $thumbH = (int) floor($newH * ($thumbW / $newW));
        $thumb = imagecreatetruecolor($thumbW, $thumbH);
        if (in_array($ext, ['png', 'webp'])) { imagealphablending($thumb,false); imagesavealpha($thumb,true); $transparent=imagecolorallocatealpha($thumb,0,0,0,127); imagefilledrectangle($thumb,0,0,$thumbW,$thumbH,$transparent);}        
        imagecopyresampled($thumb,$dst,0,0,0,0,$thumbW,$thumbH,$newW,$newH);
        ob_start();
        switch ($ext) { case 'jpg': imagejpeg($thumb,null,85); break; case 'png': imagepng($thumb,null,6); break; case 'gif': imagegif($thumb); break; case 'webp': if(function_exists('imagewebp')){ imagewebp($thumb,null,85);} else { imagejpeg($thumb,null,85); } break; }
        $thumbBinary = ob_get_clean();

        imagedestroy($src); imagedestroy($dst); imagedestroy($thumb);
        $filename = Str::uuid().'.'.$ext; $relativePath = trim($directory,'/').'/'.$filename;
        Storage::disk('public')->put($relativePath, $binary);
        // save thumb
        $thumbPath = trim($directory,'/').'/thumbs/'.$filename;
        Storage::disk('public')->put($thumbPath, $thumbBinary);
        return Storage::disk('public')->url($relativePath);
    }
}
