<?php 
use App\Accueil\AccueilController ;

Route::get('/', [AccueilController::class, 'index'])->name('accueil.index');