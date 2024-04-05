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

    $greeting = "PLAYERS";

    $players = [
        ["name" => "Sabaku", "image" => "Sabaku.jpeg", "eta" => "36 anni", "job" => "Youtuber"],
        ["name" => "Yotobi", "image" => "Yotobi.png", "eta" => "36 anni", "job" => "Youtuber"],
        ["name" => "Cydonia", "image" => "Cydonia.jpeg", "eta" => "36 anni", "job" => "Youtuber"],
        ["name" => "MikeShowSha", "image" => "Mikeshowsha.png", "eta" => "36 anni", "job" => "Youtuber"],
    ];


    return view('home', compact("greeting", "players"));
});


Route::get('/secondPage', function () {

    $videogames = ["Dark Souls", "Elden Ring", "Baldur's Gate", "Resident Evil"];

    return view('secondPage', compact('videogames'));
})->name('second');

Route::get('/thirdPage', function () {

    $videogames = ["Dark Souls", "Elden Ring", "Baldur's Gate", "Resident Evil"];

    return view('thirdPage', compact('videogames'));
})->name('third');
