<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Modules\Auth\Livewire\Counter;
use Modules\Auth\Livewire\Login;
use Modules\Auth\Livewire\Register;

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
    // auto-routes: auth:module
   Volt::route('logi2n', Login::class)->name('auth::livewire.login');
   Volt::route('register', Register::class)->name('auth::livewire.register');
});
