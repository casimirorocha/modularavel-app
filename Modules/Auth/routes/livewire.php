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
use Modules\Auth\Livewire\Pages\Auth\Login;

Volt::route('login', Login::class)
                    ->name('auth::livewire.login')
                    ->prefix('auth');
