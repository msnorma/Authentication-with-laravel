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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* Routes for Admins and Customer Logins and Registration*/
Route::get('/login/admin', 'Auth/LoginController@showAdminLoginForm');
Route::get('/login/customer', 'Auth/LoginController@showCustomerLoginForm');
Route::get('/register/admin', 'Auth/RegisterController@showAdminRegisterForm');
Route::get('/register/customer', 'Auth/RegisterController@showCustomerRegisterForm');

/* Routes for Admins and Customers once they have supplied their details */
Route::get('/login/admin', 'Auth/LoginController@adminLogin');
Route::get('/login/customer', 'Auth/LoginController@customerLogin');

/* Routes to create new records for Admin and Customer */
Route::get('/register/admin', 'Auth/RegisterController@createAdmin');
Route::get('/register/customer', 'Auth/RegisterController@createCustomer');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/customer', 'customer');



