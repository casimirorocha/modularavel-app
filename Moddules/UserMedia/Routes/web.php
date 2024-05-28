<?php

use Modules\UserMedia\Http\Controllers\UserMediaController;

Route::middleware('auth')->prefix('app/usermedia')->group(function() {
    Route::get('/', [UserMediaController::class, 'index'])->name('app.usermedia.index');
    Route::get('create', [UserMediaController::class, 'create'])->name('app.usermedia.create');
    Route::post('create', [UserMediaController::class, 'store'])->name('app.usermedia.store');
    Route::get('edit/{id}', [UserMediaController::class, 'edit'])->name('app.usermedia.edit');
    Route::patch('edit/{id}', [UserMediaController::class, 'update'])->name('app.usermedia.update');
    Route::delete('delete/{id}', [UserMediaController::class, 'destroy'])->name('app.usermedia.delete');
});
