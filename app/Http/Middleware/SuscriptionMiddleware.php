<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuscriptionMiddleware
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
        $user = Auth::user()->load(['suscription']);
        $userSuscription = $user->suscription;

        $course = $request->route('course')->load(['suscriptions']);
        $courseSuscriptions = collect($course->suscriptions)->map->id->toArray();

        if(in_array($userSuscription->id,$courseSuscriptions)) {
            return $next($request);
        } else {
            flash('You have to upgrade your plan to watch this course')->error();
            return redirect()->to('/plans');
        }
    }
}
