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

// project route
Route::match(['get','post'],'/add-project','ProjectController@addProject');
Route::match(['get','post'],'/edit-project/{id}','ProjectController@editProject');
Route::match(['get','post'],'/delete-project/{id}','ProjectController@deleteProject');
Route::get('/view-projects','ProjectController@ViewProjects');
Route::get('/show-project','ProjectController@showProject');

// artefact route
Route::match(['get','post'],'/add-artefact','ArtefactController@addArtefact');
// Route::match(['get','post'],'/edit-project/{id}','ProjectController@editProject');
// Route::match(['get','post'],'/delete-project/{id}','ProjectController@deleteProject');
Route::get('/view-artefacts','ArtefactController@viewArtefacts');

Route::get('/req-table','ArtefactController@reqTable');
Route::get('/home-survey', 'SurveyController@home');

// Survey artefact
Route::match(['get','post'],'/survey/create-survey','SurveyController@createSurvey');
Route::match(['get','post'],'/survey/survey-template1','SurveyController@template1');
Route::get('/survey/survey-template2','SurveyController@template2');
Route::get('/survey/survey-template3','SurveyController@template3');
Route::get('/survey/show-templates','SurveyController@show_template');

