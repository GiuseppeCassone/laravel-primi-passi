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

    $greeting = "Hello World!";

    $players = ["Sabaku", "Yotobi", "Cydonia", "IlMasseo"];


    return view('home', compact("greeting", "players"));
});


Route::get('/secondPage', function () {

    $videogames = ["Dark Souls", "Elden Ring", "Baldur's Gate", "Resident Evil"];

    return view('secondPage', compact('videogames'));
})->name('second');
