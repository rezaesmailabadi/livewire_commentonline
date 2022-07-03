<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckTime
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


        $now = Carbon::now();
        $start = Carbon::createFromTimeString('00:00');
        $end = Carbon::createFromTimeString('06:00');

        if ($now->between($start, $end)) {
            return redirect('/not-available-now');
        }

        return $next($request);
    }
}
