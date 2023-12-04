<?php

namespace Modules\Auth\app\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Auth\app\Http\Controllers';

    /**
    * The module namespace to assume when generating URLs to actions.
    */
    protected string $moduleNamespaceForLivewire = 'Modules\Auth\Livewire';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapLivewireRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Auth', '/routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Auth', '/routes/api.php'));
    }

    /**
     * Define the livewire component's rout for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapLivewireRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->moduleNamespaceForLivewire)
            ->group(module_path('Auth', '/routes/livewire.php'));
    }
}
