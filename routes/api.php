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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('productCategories','ProductController@getProdCat');
Route::get('findProduct','ProductController@search');
Route::get('productContainmentControls','ContainmentControlsController@getContainmentControls');
Route::resource('subscribers','NewsletterSubcriberController');

Route::get('find', 'SearchController@find');
