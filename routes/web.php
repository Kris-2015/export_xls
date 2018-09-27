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

Route::get('/', 'ExcelController@showPage');
Route::get('export_file', 'ExcelController@export');
Route::get('export_file_queue', 'ExcelController@exportWithQueue')->name('export_file_queue');
Route::get('export_file_multiple_sheets', 'ExcelController@download')->name('export_file_multiple_sheets');