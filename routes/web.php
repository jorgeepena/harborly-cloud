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

    // App Views
    Route::group(['middleware' => ['auth', 'can:user_access']], function(){
        //Dashboard
        Route::get('/your-account', 'AppController@index')->name('account.home'); //

        Route::get('/configurations', 'AppController@configurationIndex')->name('account.configuration.index'); //
        Route::get('/company', 'AppController@companyInfo')->name('account.configuration.company'); //
        
        Route::resource('projects', ProjectController::class);
        Route::resource('clients', ClientController::class);
        Route::resource('companies', CompanyController::class);
    });

    // Back-End Views
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:all_access']], function(){
        //Dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard'); //
        Route::resource('users', UserController::class);
    });    
});
