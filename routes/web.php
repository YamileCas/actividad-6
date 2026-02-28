<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/universes', function () {
    return view('universes.index');
})->name('universes.index');

Route::get('/superheroes', function () {
    return view('superheroes.index');
})->name('superheroes.index');
Route::get('/superheroes', function () {
    return view('superheroes.index');
})->name('superheroes.index');