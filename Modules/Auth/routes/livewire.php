<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Livewire\Counter;
use Modules\Auth\Livewire\Login;

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

Route::prefix('auth')->group(function() {
    Route::get('login', Login::class)->name('auth::livewire.login');
    Route::get('register', \Modules\Auth\Livewire\Register::class)->name('auth::livewire.register');
    Route::get('livewire', Counter::class)->name('auth::livewire.counter');
});
