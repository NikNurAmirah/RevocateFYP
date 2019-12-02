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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// folder route
Route::match(['get','post'],'/add-folder','FolderController@addFolder');
Route::match(['get','post'],'/edit-folder/{id}','FolderController@editFolder');
Route::match(['get','post'],'/delete-folder/{id}','FolderController@deleteFolder');
Route::get('/view-folders','FolderController@ViewFolders');

// file route
Route::match(['get','post'],'/add-file','FileController@addFile');
// Route::match(['get','post'],'/edit-folder/{id}','FolderController@editFolder');
// Route::match(['get','post'],'/delete-folder/{id}','FolderController@deleteFolder');
Route::get('/view-files','FileController@viewFiles');
Route::get('/survey-template','FileController@surveyTemplate');
Route::get('/req-table','FileController@reqTable');
