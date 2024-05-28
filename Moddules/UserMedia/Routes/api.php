<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/usermedia', function (Request $request) {
    return $request->user();
});