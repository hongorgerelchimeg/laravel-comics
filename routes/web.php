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
Route::get('/characters', function () {
  return view('Characters');
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('home');
})->name('comics');

Route::get('/comics/{id}', function ($id) {
  $comics = collect(config('comics'));
  $selectedComic = $comics->firstWhere('id', $id);
  if ($selectedComic === null ) abort(404);

  return view('template/comic_page', [
    'comic' => $selectedComic
  ]);
})->name('comic');

Route::get('/movies', function () {
  return view('Movies');
})->name('movies');

Route::get('/tv', function () {
  return view('TV');
})->name('tv');

Route::get('/games', function () {
  return view('Games');
})->name('games');

Route::get('/collectibles', function () {
  return view('Collectibles');
})->name('collectibles');

Route::get('/videos', function () {
  return view('Videos');
})->name('videos');

Route::get('/fans', function () {
  return view('Fans');
})->name('fans');

Route::get('/news', function () {
  return view('News');
})->name('news');


Route::get('/shop', function () {
  return view('Shop');
})->name('shop');
