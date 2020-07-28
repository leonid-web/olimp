<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfOperator
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
        $user = $request->user();
        if (!auth()->check() || !$user->isOperator()) {

            return redirect('login');
        }
        return $next($request);

    }
}
