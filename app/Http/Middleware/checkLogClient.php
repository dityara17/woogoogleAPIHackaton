<?php

namespace App\Http\Middleware;

use Closure;

class checkLogClient
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
        if($user['role'] != 2 ){
            return redirect('app/admin');
        }
        return $next($request);
    }
}
