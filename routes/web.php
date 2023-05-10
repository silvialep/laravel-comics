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


$menulinks = config('menulinks');

$comics = config('comics');

$socialicons = config('socialicons');

$footerlinks = config('footerlinks');

Route::get('/', function () use ($menulinks, $comics, $socialicons, $footerlinks){

    // dd($menulinks);
    // dd($comics);

    return view('home', compact('menulinks', 'comics', 'socialicons', 'footerlinks'));
});


Route::get('/comic', function () use ($menulinks, $comics, $socialicons, $footerlinks){

    return view('single-comic', compact('menulinks', 'comics', 'socialicons', 'footerlinks'));
})->name('single-comic');