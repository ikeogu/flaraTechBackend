<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(count($request->input('roles_middleware', []))){
            $church = \App\Models\Church::get_church($request->route('church_slug'));
            $user = auth()->user();
            if(!$user->memberships()->where('church_id', $church->id)->whereIn('role', $request->input('roles_middleware'))->count()){
                return response()->json(['status' => 'failed', 'message' => 'You do not have appropriate rights to access this resource'], 403);
            }
        }
        return $next($request);
    }
}
