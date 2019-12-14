<?php

use Illuminate\Http\Request;

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

//buyers
Route::resource('buyers','BuyerController',['only' => ['index, show']]);

//categories
Route::resource('categories','CategoryController',['except' => ['create, edit']]);

//products
Route::resource('products','ProductController',['only' => ['index, show']]);

//sellers
Route::resource('sellers','SellerController',['only' => ['index, show']]);

//transactions
Route::resource('transactions','TransactionController',['only' => ['index, show']]);

//users
Route::resource('users','UserController',['except' => ['create, edit']]);