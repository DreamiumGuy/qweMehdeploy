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
    return view('welcome');
});

// /*Login Routes.. */

// Route::get('/login', 'Auth\LoginController@login')->name('dologin');
// Route::post('/login', 'Auth\LoginController@login')->name('dologin');

// /* Customers Registration Routes...*/
// Route::get('/register', 'UserControl\Auth\RegisterController@showRegistrationForm');

// Route::post('/register', 'UserControl\Auth\RegisterController@register');

// /* Customers Forgot Password Routes...*/
// Route::get('/password/reset', 'UserControl\Auth\ForgotPasswordController@showLinkRequestForm');

// Route::post('/password/email', 'UserControl\Auth\ForgotPasswordController@sendResetLinkEmail');

// Route::post('/password/reset', 'UserControl\Auth\ResetPasswordController@reset');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
        ->name('login.provider');

Route::get('{driver}/theresponse', 'Auth\LoginController@handleProviderCallback')
->name('login.callback');
