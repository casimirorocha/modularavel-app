<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\app\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Guest users route
Route::middleware('guest')->group(function()
{
    Route::get('auth', [AuthController::class, 'index']);
});

// Authenticated users route
Route::middleware('auth')->group(function ()
{

    // Routes only for users with verified email
    Route::middleware('verified')->group(function() {

    });

    // Routes that require authenticated user password confirmation
    Route::middleware('password.confirm')->group(function() {

    });

    // Admin users route
    Route::prefix('admin/auth-module')->middleware('admin.only')->group(function() {

    });
});
