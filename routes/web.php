<?php

use Illuminate\Support\Facades\Route;

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
    return view('characters');
})->name('personaggi');

 Route::get('/comics', function () {

    $comics = config('comics-database');
    $data = ['volumi' => $comics];
     return view('comics', $data);
 })->name('fumetti');

//  rotta dei dettagli

 Route::get('/detail/{id}', function ($id) {
    $comics = config('comics-database');
    $data = ['volumi' => $comics[$id]];

    return view('dettaglio', $data);
})->name('dettaglio-comics');




Route::get('/movies', function () {
    return view('movies');
})->name('film');

 Route::get('/tv', function () {
     return view('tv');
 })->name('televisione');

 Route::get('/games', function () {
     return view('games');
 })->name('giochi');

 Route::get('/collectibles', function () {
     return view('collectibles');
 })->name('collezione');

 Route::get('/videos', function () {
     return view('videos');
 })->name('video');

 Route::get('/fans', function () {
     return view('fans');
 })->name('fan');

 Route::get('/news', function () {
     return view('news');
 })->name('notizie');

 Route::get('/shop', function () {
     return view('shop');
 })->name('negozio');
