<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class Admin
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
        // check session
        if (!session()->has('dataLoginAdmin')) {
            return redirect('/login');
        } else {
            $idAdmin = session()->get('dataLoginAdmin')['id'];
            $admin = \App\Models\user::where('id', $idAdmin)->first();
            if (!$admin) {
                return redirect('/login');
            }
            return $next($request);
        }
    }
}
