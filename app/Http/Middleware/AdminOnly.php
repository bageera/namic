<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use App\User;
use Closure;


class AdminOnly
{
    protected $auth;
    /**
     * Create a new filter instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = 'superAdmin')
    {


        if ($this->auth->check() && $this->auth->user()->is($role)) {
            return $next($request);
        }

        return redirect()->guest('login');
    }
}
