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

Route::get('/users', 'HomeController@showUsers');

Route::get('/usersalaries', 'SalaryController@usersalaries');
Route::patch('/salary','SalaryController@store');
Route::patch('/changesalary','SalaryController@change');
Route::patch('/givemessage','SalaryController@givesalary');
Route::get('/search_salary','SalaryController@search_salary');
Route::get('/showmessages','SalaryController@showmessages');
Route::get('/check_post','SalaryController@check_post');
Route::post('/sendpost','HomeController@sendpost');
Route::post('/issue/delete','HomeController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index');
