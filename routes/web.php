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

Route::get('/','frontController@index');

Route::get('article/{slug}', 'frontController@article');

Route::get('category/{slug}', 'frontController@category');

Route::get('page/{slug}', 'frontController@page');
Route::get('content-us', 'frontController@contentUs');
Route::post('sendmessage', 'curdController@insertData');

// admin
Route::get('laranews-admin', 'adminController@index');

/* category */

Route::get('viewcategory', 'adminController@viewCategory');
Route::post('addcategory', 'curdController@insertData');
Route::get('editcategory/{id}', 'adminController@editCategory');
Route::post('updatecategory/{id}', 'curdController@updateData');
Route::post('multipledelete', 'adminController@multipleDelete');

/* settings */
Route::get('settings', 'adminController@settings');
Route::post('addsettings', 'curdController@insertData');
Route::post('updatesettings/{id}', 'curdController@updateData');

/* posts */
Route::get('add-post', 'adminController@addPost');
Route::post('addpost', 'curdController@insertData');
/* Route::get('all-posts', 'curdController@allPosts'); */
Route::get('all-posts', 'adminController@allPosts');
Route::get('editpost/{id}', 'adminController@editPost');
Route::post('updatepost/{id}', 'curdController@updateData');
Route::get('search-content', 'frontController@searchContent');

/* pages */
Route::get('add-page', 'adminController@addPage');
Route::post('addpage', 'curdController@insertData');
Route::get('all-pages', 'adminController@allPages');
Route::get('editpage/{id}', 'adminController@editPage');
Route::post('updatepage/{id}', 'curdController@updateData');

// Messages
Route::get('messages', 'adminController@messages');

// Advertisement
Route::get('add-adv', 'adminController@addAdv');
Route::post('addadv', 'curdController@insertData');
Route::get('all-advs', 'adminController@allAdv');
Route::get('editadv/{id}', 'adminController@editAdv');
Route::post('updateadv/{id}', 'curdController@updateData');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index');

Route::get('logout', 'HomeController@logout');
