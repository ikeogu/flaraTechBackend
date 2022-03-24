<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param $roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $church_slug = $request->route('church_slug');
        $church = \App\Models\Church::where('slug', $church_slug)->first();

        if (!$church) {
            return response()->json(['status' => 'failed', 'message' => 'Church not found'], 403);
        }
        $request->merge(['roles_middleware' => $request->input('roles_middleware', []) + $roles]);

        return $next($request);
    }
}
