<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Modules\Blog\Livewire\Artigos;
use Modules\Blog\Livewire\Counter;

/*
|--------------------------------------------------------------------------
| Livewire - Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// auto-routes: auth:module
Route::prefix('blog')->group(function() {
    Route::get('livewire', Counter::class)->name('blog::livewire.counter');
});

Volt::route('artigos', Artigos::class)
                    ->name('blog::livewire.artigos')
                    ->prefix('blog');

\Livewire\Volt\Volt::route('teste', \Modules\Blog\Livewire\Teste::class)
                    ->name('blog::livewire.teste')
                    ->prefix('blog');

\Livewire\Volt\Volt::route('teste', \Modules\Blog\Livewire\Teste::class)
                    ->name('blog::livewire.teste')
                    ->prefix('blog');

\Livewire\Volt\Volt::route('teste', \Modules\Blog\Livewire\Teste::class)
                    ->name('blog::livewire.teste')
                    ->prefix('blog');
