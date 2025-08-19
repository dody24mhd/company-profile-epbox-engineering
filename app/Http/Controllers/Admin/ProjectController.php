<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
            'categories' => 'nullable|string',
        ]);

        if ($request->hasFile('img')) {
            $validated['img'] = $this->resizeAndStore($request->file('img'), 'projects', 1200);
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
            'categories' => 'nullable|string',
        ]);

        if ($request->hasFile('img')) {
            if ($project->img) {
                $old = str_replace('/storage/', '', $project->img);
                if (Storage::disk('public')->exists($old)) {
                    Storage::disk('public')->delete($old);
                }
            }
            $validated['img'] = $this->resizeAndStore($request->file('img'), 'projects', 1200);
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }

    /**
     * Resize uploaded image to max width and store to public disk.
     */
    private function resizeAndStore(\Illuminate\Http\UploadedFile $file, string $directory, int $maxWidth = 1200): string
    {
        $mime = $file->getMimeType();
        $sourcePath = $file->getPathname();

        // If GD extension is not available, store original file
        if (!extension_loaded('gd')) {
            $path = $file->store($directory, 'public');
            return Storage::disk('public')->url($path);
        }

        // Create image resource
        switch ($mime) {
            case 'image/jpeg':
            case 'image/jpg':
                $src = imagecreatefromjpeg($sourcePath);
                $ext = 'jpg';
                break;
            case 'image/png':
                $src = imagecreatefrompng($sourcePath);
                $ext = 'png';
                break;
            case 'image/gif':
                $src = imagecreatefromgif($sourcePath);
                $ext = 'gif';
                break;
            case 'image/webp':
                if (function_exists('imagecreatefromwebp')) {
                    $src = imagecreatefromwebp($sourcePath);
                    $ext = 'webp';
                    break;
                }
                $src = imagecreatefromjpeg($sourcePath);
                $ext = 'jpg';
                break;
            default:
                // Fallback: just store original
                $path = $file->store($directory, 'public');
                return Storage::disk('public')->url($path);
        }

        $origW = imagesx($src);
        $origH = imagesy($src);
        $newW = $origW;
        $newH = $origH;
        if ($origW > $maxWidth) {
            $newW = $maxWidth;
            $newH = (int) floor($origH * ($maxWidth / $origW));
        }

        $dst = imagecreatetruecolor($newW, $newH);
        if (in_array($ext, ['png', 'webp'])) {
            imagealphablending($dst, false);
            imagesavealpha($dst, true);
            $transparent = imagecolorallocatealpha($dst, 0, 0, 0, 127);
            imagefilledrectangle($dst, 0, 0, $newW, $newH, $transparent);
        }

        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newW, $newH, $origW, $origH);

        ob_start();
        switch ($ext) {
            case 'jpg':
                imagejpeg($dst, null, 85);
                break;
            case 'png':
                imagepng($dst, null, 6);
                break;
            case 'gif':
                imagegif($dst);
                break;
            case 'webp':
                if (function_exists('imagewebp')) {
                    imagewebp($dst, null, 85);
                } else {
                    imagejpeg($dst, null, 85);
                    $ext = 'jpg';
                }
                break;
        }
        $binary = ob_get_clean();

        // Create thumbnail (max width 320)
        $thumbW = min(320, $newW);
        $thumbH = (int) floor($newH * ($thumbW / $newW));
        $thumb = imagecreatetruecolor($thumbW, $thumbH);
        if (in_array($ext, ['png', 'webp'])) {
            imagealphablending($thumb, false);
            imagesavealpha($thumb, true);
            $transparent = imagecolorallocatealpha($thumb, 0, 0, 0, 127);
            imagefilledrectangle($thumb, 0, 0, $thumbW, $thumbH, $transparent);
        }
        imagecopyresampled($thumb, $dst, 0, 0, 0, 0, $thumbW, $thumbH, $newW, $newH);

        ob_start();
        switch ($ext) {
            case 'jpg':
                imagejpeg($thumb, null, 85);
                break;
            case 'png':
                imagepng($thumb, null, 6);
                break;
            case 'gif':
                imagegif($thumb);
                break;
            case 'webp':
                if (function_exists('imagewebp')) {
                    imagewebp($thumb, null, 85);
                } else {
                    imagejpeg($thumb, null, 85);
                }
                break;
        }
        $thumbBinary = ob_get_clean();

        imagedestroy($src);
        imagedestroy($dst);
        imagedestroy($thumb);

        $filename = Str::uuid() . '.' . $ext;
        $relativePath = trim($directory, '/') . '/' . $filename;
        Storage::disk('public')->put($relativePath, $binary);
        // Save thumbnail
        $thumbPath = trim($directory, '/') . '/thumbs/' . $filename;
        Storage::disk('public')->put($thumbPath, $thumbBinary);
        return Storage::disk('public')->url($relativePath);
    }
}
