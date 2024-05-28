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
use Modules\Auth\Livewire\Login;
use Modules\Auth\Livewire\Privacyu2;
use Modules\Auth\Livewire\Register;

Volt::route('register', Register::class)
    ->name('auth::livewire.register')
    ->prefix('auth');


Volt::route('login', Login::class)
                    ->name('auth::livewire.login')
                    ->prefix('auth');

\Livewire\Volt\Volt::route('privacy', \Modules\Auth\Livewire\Privacy::class)
                    ->name('auth::livewire.privacy')
                    ->prefix('auth');
