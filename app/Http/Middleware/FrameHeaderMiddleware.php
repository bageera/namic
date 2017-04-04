<?php

namespace App\Http\Middleware;

use Closure;

class FrameHeaderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('X-Frame-Options', 'ALLOW FROM https://youtu.be/');
        $response->headers->set('X-Frame-Options', 'ALLOW FROM https://youtube.com/');
        $response->headers->set('X-Frame-Options', 'ALLOW-ALL');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN', false);
        //dd($response);
        return $response;
    }
}
