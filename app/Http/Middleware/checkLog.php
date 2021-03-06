<?php

namespace App\Http\Middleware;

use Closure;

class checkLog
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
        $user = Session('user');
        if (!$user || !isset($user) ){
            return redirect('app/login');
        } else if($user['role'] != 1 ){
            return redirect('/');
        }
        return $next($request);
    }
}
