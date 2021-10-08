<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

// Rutas para los usuarios logueados
Route::group(['middleware' => ['auth']], function () {
Route::get('home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'auth'], function () {


        // Rutas para los usuarios sin rol
        Route::group(['prefix' => 'profile'], function () {

            Route::get('/', 'ProfileController@profile')->name('profile');
            Route::patch('profile-update', 'ProfileController@update')->name('profile.update');

            Route::get('change-password', 'ProfileController@changePassword');
            Route::post('change-password', 'ProfileController@store')->name('change.password');

        });

        // Rutas para los usuarios con rol de administrador
        Route::group(['middleware' => ['role:1']], function () {

        });

    });
});

// http paginas de error
Route::get('403', 'HttpController@http403')->name('403');
