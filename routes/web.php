<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Superhero;

Route::get('/', function () {
    return view('welcome');
});

// UNIVERSe

Route::get('/universes', function () {
    $universes = Universe::with('superheroes')->get();
    return view('universes', compact('universes'));
})->name('universes.index');

Route::get('/universes/create', function () {
    return view('universes_create');
})->name('universes.create');

Route::get('/universes/edit', function () {
    $universe = Universe::first();
    return view('universes_edit', compact('universe'));
})->name('universes.edit');



Route::get('/superheroes', function () {
    $superheroes = Superhero::with('universe')->get();
    return view('superheroes', compact('superheroes'));
})->name('superheroes.index');

Route::get('/superheroes/create', function () {
    $universes = Universe::all();
    return view('superheroes_create', compact('universes'));
})->name('superheroes.create');

Route::get('/superheroes/edit', function () {
    $superhero = Superhero::first();
    $universes = Universe::all();
    return view('superheroes_edit', compact('superhero', 'universes'));
})->name('superheroes.edit');