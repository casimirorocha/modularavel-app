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


\Livewire\Volt\Volt::route('register', \Modules\Auth\Livewire\Register::class)
    ->name('auth::livewire.register')
    ->prefix('auth');


\Livewire\Volt\Volt::route('login', \Modules\Auth\Livewire\Login::class)
                    ->name('auth::livewire.login')
                    ->prefix('auth');

