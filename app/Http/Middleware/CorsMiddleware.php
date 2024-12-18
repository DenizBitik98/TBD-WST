<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Выполняем следующий middleware
        $response = $next($request);

        // Добавляем CORS-заголовки к ответу
        $response->headers->set('Access-Control-Allow-Origin', '*'); // Устанавливаем доступ для всех доменов
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With, Authorization');
        
        // Для preflight-запросов OPTIONS
        if ($request->isMethod('OPTIONS')) {
            return response()->json('OK', 200);
        }

        return $response;
    }
}

