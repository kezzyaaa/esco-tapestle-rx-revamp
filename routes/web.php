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

Auth::routes(['register' => false,
  'reset' => false,
  'verify' => false,
]);

Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/dashboard/configurations', 'ConfigurationsController@edit')->name('configurations')->middleware('auth');
Route::patch('/dashboard/configurations/{config}','ConfigurationsController@update')->middleware('auth');

Route::get('/dashboard/news', 'NewsController@showList')->name('news')->middleware('auth');
Route::get('/dashboard/news/create', 'NewsController@create')->middleware('auth');
Route::post('/dashboard/news', 'NewsController@store')->middleware('auth');
Route::get('/dashboard/news/{news}/edit', 'NewsController@edit')->middleware('auth');
Route::patch('/dashboard/news/{news}','NewsController@update')->middleware('auth');
Route::get('/dashboard/news/changeStatus','NewsController@changeStatus')->middleware('auth');
Route::delete('/dashboard/news/{news}','NewsController@destroy')->middleware('auth');

Route::get('/dashboard/product-model', 'ProductController@showList')->name('product model')->middleware('auth');
Route::get('/dashboard/product-model/create', 'ProductController@create')->middleware('auth');
Route::get('/dashboard/product-model/changeStatus','ProductController@changeStatus')->middleware('auth');
Route::delete('/dashboard/product-model/{product}','ProductController@destroy')->middleware('auth');
Route::get('/dashboard/product-model/{product}/edit', 'ProductController@edit')->middleware('auth');
Route::patch('/dashboard/product-model/{product}','ProductController@update')->middleware('auth');
Route::post('/dashboard/product-model', 'ProductController@store')->middleware('auth');

Route::get('/dashboard/resources', 'ProductBrochureController@showList')->name('resources list')->middleware('auth');
Route::get('/dashboard/resources/changeStatus','ProductBrochureController@changeStatus')->middleware('auth');
Route::delete('/dashboard/resources/{brochure_id}','ProductBrochureController@destroy')->middleware('auth');
Route::get('/dashboard/resources/create', 'ProductBrochureController@create')->middleware('auth');
Route::post('/dashboard/resources', 'ProductBrochureController@store')->middleware('auth');
Route::get('/dashboard/resources/{brochure}/edit', 'ProductBrochureController@edit')->middleware('auth');
Route::patch('/dashboard/resources/{brochure}','ProductBrochureController@update')->middleware('auth');


Route::get('/dashboard/images', 'ImageController@showList')->name('images list')->middleware('auth');
Route::get('/dashboard/images/create', 'ImageController@create')->middleware('auth');
Route::post('/dashboard/images', 'ImageController@store')->middleware('auth');
Route::delete('/dashboard/images/{image_id}','ImageController@destroy')->middleware('auth');



Route::get('/dashboard/mail-subscriber', 'NewsletterSubcriberController@showList')->name('newsLetterSubscriber')->middleware('auth');

Route::get('/dashboard/leads', 'ContactFormController@showList')->name('leads')->middleware('auth');

Route::resource('/', 'indexController');
Route::get('/{page}','PageController@show');
Route::get('/{page}/rfq/{prod}','PageController@show');
Route::get('/news/{news}','NewsController@show');
Route::get('/solutions/{solution}','SolutionController@show');
Route::get('/products/{slug}/{product}','ProductController@show');
Route::get('/news-category/{news}','NewsCategoryController@show');
Route::get('/{pageCat}/{page}','PageController@show2param');
Route::get('/{pageCat}/{page}/{pageSlug}','PageController@show3param');
Route::get('/product-category/{slug}/{productCatId}','ProductApplicationCategoryController@show');
Route::post('/contact-us','ContactFormController@store');
Route::post('/contact-us-copy','ContactFormControllerCopy@store');