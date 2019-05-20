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

Route::get('/expenses/create', 'ExpenseController@showCreateForm')->name('expenses.create');
Route::post('/expenses/create', 'ExpenseController@create');
Route::get('/expenses/', 'ExpenseController@index')->name('expenses.index');

Route::get('/incomes/create', 'IncomeController@showCreateForm')->name('incomes.create');
Route::post('/incomes/create', 'IncomeController@create');
Route::get('/incomes/', 'IncomeController@index')->name('incomes.index');
