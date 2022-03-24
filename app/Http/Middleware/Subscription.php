<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Subscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $church = \App\Models\Church::get_church($request->route('church_slug'));
        if ($church->subscription->status !== 'active'){
         return response()->json([
             'status' => 'failed',
             'message' => 'You do not have an active subscription',
         ], 403);
        }
        return $next($request);
    }
}
