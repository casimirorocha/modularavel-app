<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/profile', function (Request $request) {
    return $request->user();
});