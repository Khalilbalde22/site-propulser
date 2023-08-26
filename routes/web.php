<?php

use Illuminate\Support\Facades\Route;

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


route::group([], function(){
    require __DIR__.'/../app/Accueil/Routes.php';
    require __DIR__.'/../app/Apropos/Routes.php';
    require __DIR__.'/../app/Services/Routes.php';
    require __DIR__.'/../app/Projets/Routes.php';
    require __DIR__.'/../app/Contact/Routes.php';
});
