<?php

namespace App\Http\Middleware;

use Closure;

class loginCheck
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
        $session = $request->session();
        if (!$session->has('id')){
            return redirect('/');
        }
        return $next($request);
    }
}
