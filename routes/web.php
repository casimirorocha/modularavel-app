<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Spatie\RouteDiscovery\Discovery\Discover;

Discover::controllers()->in(module_path('Auth', '/app/Http/Controllers'));
