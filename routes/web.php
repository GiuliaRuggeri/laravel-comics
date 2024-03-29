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

Route::get('/', function () {
    $comic = config("data");
    return view('home', $comic );
})->name("home");

Route::get('/characters', function(){
    return view('characters');
})->name("characters");

Route::get('/comics', function(){
    return view("comics");
})->name("fumetti");
