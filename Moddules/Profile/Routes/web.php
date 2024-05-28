<?php

use Modules\Profile\Http\Controllers\ProfileController;

Route::middleware('auth')->prefix('app/profile')->group(function() {
    Route::get('/', [ProfileController::class, 'index'])->name('app.profile.index');
    Route::get('create', [ProfileController::class, 'create'])->name('app.profile.create');
    Route::post('create', [ProfileController::class, 'store'])->name('app.profile.store');
    Route::get('edit/{id}', [ProfileController::class, 'edit'])->name('app.profile.edit');
    Route::patch('edit/{id}', [ProfileController::class, 'update'])->name('app.profile.update');
    Route::delete('delete/{id}', [ProfileController::class, 'destroy'])->name('app.profile.delete');
});
