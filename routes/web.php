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

    $menulinks = config('menulinks');

    $comics = config('comics');

    $socialicons = config('socialicons');

    // dd($menulinks);
    // dd($comics);

    return view('home', compact('menulinks', 'comics', 'socialicons'));
});
