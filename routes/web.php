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

// Route::get('/phonebook', function () {
//     return view('phonebook');
// });

//getting variables and returning
// Route::get('/phonebook', function () {

//     $name = request('name');

//     return view('phonebook', [
//     	'name' => $name

//     ]);
// });

//getting wildcards
// Route::get('/phonebook/{post}', function ($post) {

//     $array = [
//     	'test1' => 'Hello test 1!',
//     	'test2' => 'test2 Hello'
//     ];

//     if(!array_key_exists($post, $array)){
//     	abort(404, 'Sorry page not found.');
//     }

//     return view('phonebook', [
//     	'post' => $array[$post] ?? 'Nothing here yet.'
//     ]);

// });

//routing to controllers
// Route::get('/phonebook/{post}', 'postController@show');

// Route::get('/phonebook/{post}', 'RecordsController@show');

Route::get('/Portfolio', 'PortfolioController@index');

Route::get('/Phonebook', 'PhonebookController@index');

Route::get('/Phonebook/add', 'PhonebookController@create');

// Route::get('Phonebook', 'PhonebookController@index');