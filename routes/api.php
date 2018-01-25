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

Route::resource('book', 'BookController');
Route::resource('book_repository', 'BookRepositoryController');
Route::resource('bookstore', 'BookstoreController');
Route::resource('library', 'LibraryController');
Route::resource('kiosk', 'KioskController');
Route::resource('customer', 'CustomerController');
Route::resource('employee', 'EmployeeController');
Route::resource('book_availability', 'BookAvailabilityController');
Route::resource('book_transaction', 'BookTransactionController');

Route::get('book_repository/{id}/books', 'BookRepositoryController@listBooksByRepository');
Route::get('employee/{id}/transactions', 'EmployeeController@getTransactions');


