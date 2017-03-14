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
    return view('welcome');
});
// GET route
Route::get('login', function() {
    return View::make('login');
});
//POST route
Route::post('login', 'AccountController@login');
//Register
Route::get('register', function(){
    return view('register');
});

Route::post('register','AccountController@create');

Route::get('/pages/cp_otform',function() {
    return view('pages/cp_otform');
});

Route::post('pages/cp_otform','otformController@create');
Route::get('pages/cp_tenant','TenantController@show');
Route::get('pages/{tenantId}/tupdate', ['as'=>'pages/tupdate','uses'=>'TenantController@tedit']);
Route::post('pages/{tenantId}/tupdate','TenantController@postEdit');
Route::get('pages/{tenantId}/tdelete', ['as' => 'pages/tdelete', 'uses' => 'TenantController@tdelete']);
Route::get('tc',function(){
   return view('tc');
});
Route::get('family',function(){
    return view('family');
});
Route::post('family','FamilyController@create');