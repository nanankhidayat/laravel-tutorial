<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/user', function () {
//     return 'Hi User';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Hi ' . $name;
// }); -- route with parameter

// Route::get('/user/{name}', function ($name = null) {
//     return 'Hi ' . $name;
// }); -- route without blank paramarer is gone be empty

// Route::get('/user/{name}', function ($name = null) {
//     return 'Hi ' . $name;
// })->where('name', '[a-zA-Z]+'); -- route with permison alpabeth only

// Route::get('/product/{id}', function ($id) {
//     return 'Product id is ' . $id;
// })->where('id', '[0-9]+'); -- route with permison number only

// Route::get('/user/{name}', function ($name = null) {
//     return 'Hi ' . $name;
// }); --Route with rulles constraints in routeServiceProvider

// Route::get('/product/{id}', function ($id) {
//     return 'Product id is ' . $id;
// });  --Route with rulles constraints in routeServiceProvider

// Route::match(['get', 'post'], '/students', function (Request $req) {
//     return 'Requested method is ' . $req->method();
// });  --Route with multi request

// Route::any('/posts', function (Request $req) {
//     return 'Requested method is ' . $req->method();
// }); -- Route with all request
