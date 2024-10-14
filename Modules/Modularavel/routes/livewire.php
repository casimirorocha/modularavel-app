<?php

use Illuminate\Support\Facades\Route;
use Modules\Modularavel\Livewire\Counter;

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

Route::prefix('modularavel')->group(function () {
	Route::get('livewire', Counter::class)->name('modularavel::livewire.counter');
});
