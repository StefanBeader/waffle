<?php

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

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->get('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', 'HomeController@index');
Route::post('/sendMessage', 'MessagesController@store');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/food', 'FoodController@index');
    Route::get('/food/create', 'FoodController@create');
    Route::post('/food', 'FoodController@store');

    Route::get('/ingredients', 'IngredientsController@index');
    Route::get('/ingredients/create', 'IngredientsController@create');
    Route::post('/ingredients', 'IngredientsController@store');

    Route::get('/messages', 'MessagesController@index');
    Route::get('/information', 'InformationController@index');
});
