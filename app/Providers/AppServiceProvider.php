<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Validation\ValidationException;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Make Auth::check() available in all views automatically
        Blade::if('auth', function () {
            return Auth::check();
        });

        // Make Guest check available in all views
        Blade::if('guest', function () {
            return !Auth::check();
        });

        // Add safe user access helper directive
        Blade::directive('username', function () {
            return "<?php echo Auth::check() ? Auth::user()->name : 'Guest'; ?>";
        });
        
        // Register error handlers for common exceptions
        $this->registerErrorHandlers();
    }
    
    private function registerErrorHandlers()
    {
        // Handle 404 errors
        $this->app->bind(NotFoundHttpException::class, function () {
            return response()->view('errors.404', [], 404);
        });
        
        // Handle model not found
        $this->app->bind(ModelNotFoundException::class, function () {
            return response()->view('errors.404', [], 404);
        });
    }
}