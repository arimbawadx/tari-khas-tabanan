<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Programmers
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
        if (!session()->has('dataLoginProgrammers')) {
            return redirect('/');
        }else{
            $idCS = session()->get('dataLoginProgrammers')['id'];
            $cs = \App\Models\Programmers::where('id', $idCS)->where('deleted', 0)->first();
            if (!$cs) {
                return redirect('/');
            }
            return $next($request);
        }
    }
}
