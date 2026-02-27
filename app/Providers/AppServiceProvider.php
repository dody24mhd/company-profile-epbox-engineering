<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\{Blog, Project, Testimonial, Contact, Audit};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register helper functions for optimized images with WebP support
        if (!function_exists('webp_image')) {
            /**
             * Get WebP image path if exists, otherwise return original
             * Usage: {!! webp_image('img/epbox/plc1.png', 'Alt text', 'class-name', 'lazy') !!}
             */
            function webp_image($originalPath, $alt = '', $class = '', $loading = 'lazy', $eager = false) {
                $pathParts = pathinfo($originalPath);
                $filename = $pathParts['filename'];
                $extension = $pathParts['extension'] ?? 'png';
                $directory = $pathParts['dirname'] ?? 'img/epbox';
                
                // Build paths
                $webpPath = str_replace('epbox/', 'epbox2/', $directory) . '/' . $filename . '.webp';
                $fallbackPath = $directory . '/' . $filename . '.' . $extension;
                
                $webpExists = file_exists(public_path($webpPath));
                $loadingAttr = $eager ? 'eager' : $loading;
                $fetchPriority = $eager ? ' fetchpriority="high"' : '';
                
                if ($webpExists) {
                    return '<picture>
                        <source srcset="' . asset($webpPath) . '" type="image/webp">
                        <img src="' . asset($fallbackPath) . '" alt="' . e($alt) . '" class="' . e($class) . '" loading="' . $loadingAttr . '"' . $fetchPriority . '>
                    </picture>';
                }
                return '<img src="' . asset($fallbackPath) . '" alt="' . e($alt) . '" class="' . e($class) . '" loading="' . $loadingAttr . '"' . $fetchPriority . '>';
            }
        }
        Gate::define('manage-admins', function ($user) {
            return (bool) ($user->is_super_admin ?? false);
        });

        foreach ([Blog::class, Project::class, Testimonial::class, Contact::class] as $model) {
            $model::created(function ($entity) {
                Audit::create([
                    'user_id' => optional(Auth::user())->id,
                    'action' => 'created',
                    'entity_type' => class_basename($entity),
                    'entity_id' => (string) $entity->getKey(),
                    'description' => 'Created ' . class_basename($entity),
                    'changes' => request() ? request()->except(['_token','password','password_confirmation']) : null,
                    'ip_address' => request()->ip() ?? null,
                    'user_agent' => request()->userAgent() ?? null,
                ]);
            });
            $model::updated(function ($entity) {
                Audit::create([
                    'user_id' => optional(Auth::user())->id,
                    'action' => 'updated',
                    'entity_type' => class_basename($entity),
                    'entity_id' => (string) $entity->getKey(),
                    'description' => 'Updated ' . class_basename($entity),
                    'changes' => $entity->getChanges(),
                    'ip_address' => request()->ip() ?? null,
                    'user_agent' => request()->userAgent() ?? null,
                ]);
            });
            $model::deleted(function ($entity) {
                Audit::create([
                    'user_id' => optional(Auth::user())->id,
                    'action' => 'deleted',
                    'entity_type' => class_basename($entity),
                    'entity_id' => (string) $entity->getKey(),
                    'description' => 'Deleted ' . class_basename($entity),
                    'changes' => null,
                    'ip_address' => request()->ip() ?? null,
                    'user_agent' => request()->userAgent() ?? null,
                ]);
            });
        }
    }
}
