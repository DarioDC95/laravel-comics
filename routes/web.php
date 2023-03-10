<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Use_;

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

Route::get('/', function() {
    $nav = config('db.menu');
    $comics = config('db.comics');
    $icons = config('db.icons');
    return view('comics', compact('nav', 'comics', 'icons'));
})->name('comics_page');

Route::get('/singleComic/{index}', function($index) {
    $nav = config('db.menu');
    $comics = config('db.comics');
    $icons = config('db.icons');

    $singleComic = $comics[$index];

    return view('singleComic', compact('nav', 'icons', 'singleComic'));
})->name('single_comic');