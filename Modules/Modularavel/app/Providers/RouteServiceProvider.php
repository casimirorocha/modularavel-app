<?php

namespace Modules\Modularavel\app\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
	/**
	 * The module namespace to assume when generating URLs to actions.
	 */
	protected string $moduleNamespace = 'Modules\Modularavel\app\Http\Controllers';

	/**
	 * The module namespace to assume when generating URLs to actions.
	 */
	protected string $moduleNamespaceForLivewire = 'Modules\Modularavel\Livewire';

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
	 * Define the "api" routes for the application.
	 *
	 * These routes are typically stateless.
	 */
	protected function mapApiRoutes(): void
	{
		Route::prefix('api')
			->middleware('api')
			->namespace($this->moduleNamespace)
			->group(module_path('Modularavel', '/routes/api.php'));
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
			->group(module_path('Modularavel', '/routes/web.php'));
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
			->group(module_path('Modularavel', '/routes/livewire.php'));
	}
}
