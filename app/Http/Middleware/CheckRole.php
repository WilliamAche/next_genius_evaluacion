<?php

namespace App\Http\Middleware;

// Other
use Closure;

class CheckRole
{
    /**
     * Verifica el rol del usuario
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->user()->admin == 1) {
            // abort(403, "No tienes autorización para ingresar.");
            return redirect()->route('403');
        }
    return $next($request);
    }
}