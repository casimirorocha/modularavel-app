<?php

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


use Livewire\Volt\Volt;
use Modules\Auth\Livewire\Register;

Route::prefix('auth')->group(function () {
	Route::view('login', 'auth::livewire.pages.auth.login')->name('auth::livewire.login');
	Volt::route('register', Register::class)->name('auth::livewire.register');
});
