<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\User;

class UserExists
{
    const MESSAGE = 'El usuario con el id indicado no existe';

    public function handle($request, Closure $next)
    {
        $exist = User::where('id', '=', $request->route('user_id'))->exists();
        if(!$exist){
            throw new \Exception(self::MESSAGE);
        }
        return $next($request);
    }
}
