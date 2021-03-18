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

// index
Route::get('/', function () {
    return view('welcome');
});


// For forms you can use the post method by get
/* Route::get('product',function(){
    return 'Products page';
}); */


/* Can be used with match method get, post, update or delete */
/* Route::match(['get', 'post'], 'product', function () {
    return 'Products page';
}); */

/* Any contains get, post, delete and update */
Route::any('product', function () {
    return 'Products page';
});


/* Route Parameters */

/* 
    id? -> optional parameter
    $id="Juan" -> default parameter
*/

Route::get('/user/{id?}',function($id="Juan"){
    return 'The user is ' . $id;
});


Route::get('/user/{id}/profile/{name}', function ($id, $name) {
    return "The user " . $id . " is " . $name;
});


/* Regular expression to only accept numbers and in case of entering letter gives error 404 */
Route::get('/ticket/{id?}', function ($id=1) {
    return "The ticket number is " . $id;
})->where('id', '[0-9]+');