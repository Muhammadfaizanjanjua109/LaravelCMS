<?php

namespace App\Http\Middleware;
use App\Models\role as role;
use Closure;
use Illuminate\Http\Request;

class admin
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
        $role = $request->user();
        if ($role->role_id ==1) {
            return $next($request);

        } else {
            return view('welcome');
        }


    }
}
