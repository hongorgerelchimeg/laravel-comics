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
Route::get('/Characters', function () {
  return view('Characters');
})->name('Characters');

Route::get('/', function () {
    $comics = config('comics');
    return view('home');
})->name('Comics');

Route::get('/Comics/{id}', function ($id) {
  $comics = collect(config('comics'));
  $selectedComic = $comics->firstWhere('id', $id);
  if ($selectedComic === null ) abort(404);

  return view('template/comic_page', [
    'comic' => $selectedComic
  ]);
})->name('comic');

Route::get('/Movies', function () {
  return view('Movies');
})->name('Movies');

Route::get('/TV', function () {
  return view('TV');
})->name('TV');

Route::get('/Games', function () {
  return view('Games');
})->name('Games');

Route::get('/Collectibles', function () {
  return view('Collectibles');
})->name('Collectibles');

Route::get('/Videos', function () {
  return view('Videos');
})->name('Videos');

Route::get('/Fans', function () {
  return view('Fans');
})->name('Fans');

Route::get('/News', function () {
  return view('News');
})->name('News');


Route::get('/Shop', function () {
  return view('Shop');
})->name('Shop');
