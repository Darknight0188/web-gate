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
//Admin
Route::domain('admin.' . env('APP_URL'))->group(function() {
    Route::get('/{any}', function () {
        return view('admin');
    })->where('any', '.*')->name('admin');
});

//Client
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*')->name('app');
