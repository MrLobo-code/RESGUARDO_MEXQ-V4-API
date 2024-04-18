<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Utils\Token;
use Exception;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $token = $request->header('x-access-token');
            $validateToken = Token::validateToken($token);

            if (!$validateToken) {
                throw new Exception("Token inválido");
            }

            return $next($request);
        } catch (Exception $exception) {
            $message = $exception->getMessage();
            return response()->json(compact('message'));
        }
    }
}
