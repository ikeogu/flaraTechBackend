<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Church
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
        $church_slug = $request->route('church_slug');
        $church = \App\Models\Church::where('slug', $church_slug)->first();

        if(!$church){
            return response()->json(['status' => 'failed', 'message' => 'Church not found'], 403);
        }

        $user = auth()->user();
        if(!$user->belongs_to_church($church)){
            return response()->json(['status' => 'failed', 'message' => 'You are not a member of this church'], 403);
        }
        return $next($request);
    }
}
