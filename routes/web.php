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

/**
 * Unauthenticated Routes
 */
Route::get('/', 'MainController@index')->name('index');
Route::get('/list_exercise', 'MainController@list_exercise')->name('list_exercise');
Route::get('/list_recipe', 'MainController@list_recipe')->name('list_recipe');
Route::get('/list_type', 'MainController@list_type')->name('list_type');
Route::get('/list_body', 'MainController@list_body')->name('list_body');

Route::get('/insert_exercise', 'MainController@form_exercise')->name('insert_exercise');
Route::post('/insert_exercise', 'MainController@insert_exercise')->name('insert_exercise');

Route::get('/insert_recipe', 'MainController@form_recipe')->name('insert_recipe');
Route::post('/insert_recipe', 'MainController@insert_recipe')->name('insert_recipe');

Route::get('/insert_type', 'MainController@form_type')->name('insert_type');
Route::post('/insert_type', 'MainController@insert_type')->name('insert_type');

Route::get('/insert_body', 'MainController@form_body')->name('insert_body');
Route::post('/insert_body', 'MainController@insert_body')->name('insert_body');
/**
 *  Auth & Registration
 */
Auth::routes();

/**
 * Authenticated only Routes
 */
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/list', 'RecipeController@list')->name('list');

/**
 * Backoffice Routes
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Backoffice', 'middleware' => ['auth', 'role:admin|manager']],
    function()
    {
        Route::get('/', 'DashboardController@index')->name('admin');

        Route::resource('user', 'UserController');
    }
);