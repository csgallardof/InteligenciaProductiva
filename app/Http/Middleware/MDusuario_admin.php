<?php

namespace App\Http\Middleware;

use Closure;

class MDusuario_admin
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
        
        $usuario_actual =   $this->auth->user()->admin()
        //return $next($request);
    }
}
