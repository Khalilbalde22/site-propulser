<?php

use App\Services\ServiceController;

Route::resource('services', ServiceController::class);
Route::get('detailsWeb', [ServiceController::class, 'detailsWeb'])->name('services.detailsWeb');
Route::get('detailsDesign', [ServiceController::class, 'detailsDesign'])->name('services.detailsDesign');
Route::get('detailsMarketing', [ServiceController::class, 'detailsMarketing'])->name('services.detailsMarketing');
Route::get('detailsSeo', [ServiceController::class, 'detailsSeo'])->name('services.detailsSeo');