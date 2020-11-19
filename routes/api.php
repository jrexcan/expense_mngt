<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ExpenseCategoryController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'UserController@login');
    Route::post('signup', 'UserController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {

        //expense route
        Route::get('expenses', 'ExpenseController@index');
        Route::get('expenses/{id}', 'ExpenseController@show');
        Route::post('expenses', 'ExpenseController@store');
        Route::post('expenses/{id}', 'ExpenseController@update');
        Route::delete('expenses/{id}', 'ExpenseController@destroy');

        //expense category route
        Route::get('expense_categories', 'ExpenseCategoryController@index');
        Route::get('expense_categories/{id}', 'ExpenseCategoryController@show');
        Route::post('expense_categories', 'ExpenseCategoryController@store');
        Route::post('expense_categories/{id}', 'ExpenseCategoryController@update');
        Route::delete('expense_categories/{id}', 'ExpenseCategoryController@destroy');

        //Role route
        Route::get('roles', 'RoleController@index');
        Route::get('role/{id}', 'RoleController@show');
        Route::post('roles', 'RoleController@store');
        Route::post('roles/{id}', 'RoleController@update');
        Route::delete('roles/{id}', 'RoleController@destroy');

        //user route
        Route::get('users', 'UserController@index');
        Route::post('users', 'UserController@store');
        Route::post('users/{id}', 'UserController@update');
        Route::delete('users/{id}', 'UserController@destroy');
        Route::get('user/{id}', 'UserController@show');
        Route::get('logout', 'UserController@logout');
        Route::get('user', 'UserController@user');
    });
});
