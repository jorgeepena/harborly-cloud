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

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/', [
        'uses' => 'FrontController@index',
        'as' => 'index',
    ]);

    // Back-End Views
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:admin_access']], function(){
        //Dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard'); //

        Route::resource('users', UserController::class);;
    });
});
