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
  return view('dashboard')->with('title', 'Site | Dashboard');
});

Route::get('/j', function() {
  return view('other_view');
});

Route::get('/user', 'Auth\LoginController@algo');
Route::get('/login', function() {
  return view('login')->with('title', 'Site | Login');
});

/**
 * Process Controller
 */
Route::post('/process/{type}', 'Process\ProcessController@toProcess');

/* Test Controller
Route::get('/test', 'MiController@miFun');
*/
