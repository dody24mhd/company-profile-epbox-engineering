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
