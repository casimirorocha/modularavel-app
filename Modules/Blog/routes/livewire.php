<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Modules\Blog\Livewire\Artigos;
use Modules\Blog\Livewire\Counter;
use Modules\Blog\Livewire\Posts;

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

Route::prefix('blog')->group(function() {
    Route::get('livewire', Counter::class)->name('blog::livewire.counter');
});

Volt::route('artigos', Artigos::class)
                    ->name('blog::livewire.artigos')
                    ->prefix('blog');

Volt::route('posts', Posts::class)
                    ->name('blog::livewire.posts')
                    ->prefix('blog');
