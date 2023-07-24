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
      $comics = config('comics.comics');     
    return view('home', compact('comics'));
});

Route::get('/comics', function () {
  $comics = config('comics.comics');     
return view('comics.index', compact('comics'));
});



Route::get('/comics/{comic}', function($id){
  $comics = config('comics.comics'); 
  $comic = $comics[$id];
  return view('comics.details', compact('comic'));
})->name('comics.details');



