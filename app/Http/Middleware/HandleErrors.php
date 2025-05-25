<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HandleErrors
{
    public function handle($request, Closure $next)
    {
        try {
            return $next($request);
        } catch (\Exception $e) {
            Log::error('Application error: ' . $e->getMessage(), [
                'exception' => $e,
                'url' => $request->fullUrl(),
                'user' => Auth::check() ? Auth::id() : 'guest',
            ]);
            
            if ($request->expectsJson()) {
                return response()->json([
                    'error' => 'Server error occurred',
                    'message' => config('app.debug') ? $e->getMessage() : 'Something went wrong'
                ], 500);
            }
            
            return response()->view('errors.general', [
                'message' => config('app.debug') ? $e->getMessage() : 'Something went wrong'
            ], 500);
        }
    }
}