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
Route::get('/', '\App\Http\Controllers\FrontendController@index')->name('index');
Route::get('/getdata', '\App\Http\Controllers\ProfileController@getdata')->name('getdata');
Route::get('/getshort', '\App\Http\Controllers\AjaxController@getshort')->name('getshort');
Route::get('/titles','App\Http\Controllers\AjaxController@title')->name('title');
Route::get('/gettitles','App\Http\Controllers\AjaxController@gettitle')->name('gettitle');;

Auth::routes();
Route::group(['middleware' => ['auth', 'disablepreventback']], function () {
    Route::get('/admin', '\App\Http\Controllers\AdminController@index');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::resource('/experts','App\Http\Controllers\ExpertiseareaController');
    // Route::get('/hello','App\Http\Controllers\ExpertiseController@index');
    // Route::post('/expertises/getExpertises/','\App\Http\Controllers\ExpertiseController@getExpertises')->name('expertises.getExpertises');
    Route::resource('/shorts','App\Http\Controllers\ShortController');
    Route::resource('/profile','App\Http\Controllers\ProfileController');
    Route::post('updatepassword', 'App\Http\Controllers\ProfileController@updatePassword')->name("updatepassword");
    Route::get('/destroy', '\App\Http\Controllers\ExpertiseareaController@destroy');
    Route::get('/delete', '\App\Http\Controllers\ShortController@destroy');
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

