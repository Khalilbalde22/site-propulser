<?php

use App\Contact\ContactsController;

Route::get('/contact', [ContactsController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactsController::class, 'submit'])->name('contact.submit');