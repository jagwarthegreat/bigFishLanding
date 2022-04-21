<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        "name" => "Judywen Guapin"
    ]);
});

Route::get('/profolio-detail', function () {
    return Inertia::render('Portfolio-detail', [
        "name" => "Judywen Guapin"
    ]);
});
