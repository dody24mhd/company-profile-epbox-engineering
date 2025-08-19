<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and if they are an admin or super admin
        if (!auth()->check() || !((auth()->user()->is_admin ?? false) || (auth()->user()->is_super_admin ?? false))) {
            return redirect('/'); // Redirect to the home page if not an admin
        }

        return $next($request);
    }
}
