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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//web modules

Route::get('/','UserController@index');

Route::get('/about','UserController@about');

Route::get('/features','UserController@features');

Route::get('/services','UserController@service');

Route::get('/contact','UserController@contact');


//user modules

Route::get('UserRegister','UserController@register');
Route::post('SaveRegister','UserController@user_register');

Route::get('UserLogin','UserController@login');
Route::post('AuthLogin','UserController@user_login');

Route::get('dashboard','UserController@dashboard');
Route::get('profile','UserController@profile');

Route::get('UserLogout','UserController@logout');

//document modules

Route::get('step2','UploadDocumentController@step2');
Route::get('document','UploadDocumentController@index');
Route::get('updocument','UploadDocumentController@upload_document');

//admin modules

Route::get('admin','AdminController@index');
Route::post('AdminLogin','AdminController@admin_login');
Route::get('admin_dashboard','AdminController@dashboard');

Route::get('adminlogout','AdminController@logout');