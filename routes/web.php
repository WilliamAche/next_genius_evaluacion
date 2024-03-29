<?php

// Illuminate
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

// Rutas para los usuarios logueados
Route::group(['middleware' => ['auth']], function () {

    Route::get('home', 'HomeController@index')->name('home');

    // Rutas para los usuarios con rol normal
    Route::group(['prefix' => 'profile'], function () {

        Route::get('/', 'ProfileController@profile')->name('profile');
        Route::patch('profile-update', 'ProfileController@update')->name('profile.update');
        Route::get('change-password', 'ProfileController@changePassword');
        Route::post('change-password', 'ProfileController@store')->name('change.password');

    });

      // ruta paa la tienda
      Route::prefix('shop')->group(function(){

        Route::get('/','ShopController@index')->name('shop.list');
        Route::post('store/{id}','ShopController@order')->name('course.order');
        Route::get('details/{id}','ShopController@details')->name('course.details');
        Route::get('bill','ShopController@bill')->name('course.bill');

        Route::get('list','CourseController@listUser')->name('course.list.user');
        Route::get('show/{id}','CourseController@showUser')->name('course.show');

    });

    // Rutas para los usuarios con rol de administrador
    Route::group(['middleware' => ['role:1']], function () {

        Route::group(['prefix' => 'users'], function () {

            Route::get('list', 'UsersController@index')->name('users.list');

            Route::get('order','ShopController@orderList')->name('course.orders');
            Route::patch('order/{status}/{id}','ShopController@orderUpdate')->name('course.orders.update');

        });
        
        // ruta paa los cursos
        Route::prefix('course')->group(function(){
            
            Route::get('create','CourseController@create')->name('course.create');
            Route::post('store','CourseController@store')->name('course.store');
            Route::get('edit/{id}','CourseController@editAdmin')->name('course.edit');
            Route::patch('update/{id}','CourseController@updateAdmin')->name('course.update');
            Route::get('list','CourseController@listAdmin')->name('course.list');
            Route::delete('delete/{id}','CourseController@destroy')->name('course.destroy');

            
        });

    });

});

// http paginas de error
Route::get('403', 'HttpController@http403')->name('403');
