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

/* Portfolio Routes*/
Route::view('/', 'pages.index');
Route::view('/services', 'pages.services');
Route::view('/about', 'pages.about');
Route::view('/careers', 'pages.careers');
Route::view('/contact', 'pages.contact');
/* End of Portfolio Routes*/

Route::resource('/admin001', 'AdminController');
Route::get('/admin01/logout', 'LoginController@destroy');

/* Route to generate and download pdf posts */
Route::get('/htmltopdf/{id}', [
	'as' => 'htmltopdf',
	'uses' => 'InsightController@htmltopdf'
]);
/* End of Route to generate pdf */

Route::get('/insight/tag/{tag}', 'InsightController@showTags');
Route::resource('/insight', 'InsightController');

/* Admin Tag */
Route::get('/admin01/tags', 'AdminController@insightTags')->name('insight-tags');
Route::delete('/admin01/{tag}', 'AdminController@deleteTag')->name('tag-delete');
/* Admin Tag */

// Auth Login and Registration Routes...
Route::get('/logadmin$2y$10$sW61KFMxEOSz1odGkcalXulIe8MKWq5RuTFndMeYoQeotbR3A', 'Auth\LoginController@showLoginForm');
Route::post('login/', 'LoginController@login')->name('login.custom');
Route::get('/regadmin$2y$10$sW61KFMxEOSz1odGkcalXulIe8MKWq5RuTFndMeYoQeotbR3A', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register')->name('register');;
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
// End of Registration Routes

Route::post('/tags-create', [
	'as' => 'tag-create',
	'uses' => 'AdminController@tagsCreate'
]);
