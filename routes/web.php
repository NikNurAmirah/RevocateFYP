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
Route::get('/show-project/{project}/view','ProjectController@showProject');

// artefact route
Route::match(['get','post'],'/add-artefact','ArtefactController@addArtefact');
// Route::match(['get','post'],'/edit-project/{id}','ProjectController@editProject');
// Route::match(['get','post'],'/delete-project/{id}','ProjectController@deleteProject');
Route::get('/uploadartefact','UploadArtefactController@index');
Route::post('/uploadartefact','UploadArtefactController@store');
Route::get('/view-interview','ArtefactController@viewArtefacts');
Route::get('/req-table','ArtefactController@reqTable');


// Survey artefact
Route::match(['get','post'],'/survey/create-survey','SurveyController@createSurvey');
Route::match(['get','post'],'/survey/edit-survey-details/{id}','SurveyController@editSurvey');
Route::match(['get','post'],'/survey/delete-survey-details/{id}','SurveyController@deleteSurvey');
Route::get('/survey/view-surveys','SurveyController@viewSurveys');
Route::match(['get','post'],'/survey/survey1','Survey1Controller@insertSurvey1');
Route::match(['get','post'],'/survey/survey2','Survey2Controller@insertSurvey2');
Route::match(['get','post'],'/survey/survey3','Survey3Controller@insertSurvey3');
Route::get('/survey/view-survey1','SurveyController@template1');
Route::get('/survey/view-survey2','SurveyController@template2');
Route::get('/survey/view-survey3','SurveyController@template3');
Route::get('/survey/responses-survey1','Survey1Controller@viewResponses1');
Route::get('/survey/responses-survey2','Survey2Controller@viewResponses2');
Route::get('/survey/responses-survey3','Survey3Controller@viewResponses3');
Route::get('/survey/thank-you','Survey1Controller@thankyou_1');
Route::get('/survey/thank-you','Survey2Controller@thankyou_2');
Route::get('/survey/thank-you','Survey3Controller@thankyou_3');
Route::get('/home-survey', 'SurveyController@home');

// Requirement artefact
Route::get('/req-table','ReqController@viewReq1');
Route::post('/req-table','ReqController@viewReq1');
Route::get('/req2-table','ReqController@viewReq2');
Route::get('/req3-table','ReqController@viewReq3');
Route::match(['get','post'],'/survey/responses-survey1','ReqController@addReq1');
Route::match(['get','post'],'/survey/responses-survey2','ReqController@addReq2');
Route::match(['get','post'],'/survey/responses-survey3','ReqController@addReq3');
Route::match(['get','post'],'/edit-req1/{id}','ReqController@editReq1');
Route::match(['get','post'],'/edit-req2/{id}','ReqController@editReq2');
Route::match(['get','post'],'/edit-req3/{id}','ReqController@editReq3');
Route::match(['get','post'],'/delete-req1/{id}','ReqController@deleteReq1');
Route::match(['get','post'],'/delete-req2/{id}','ReqController@deleteReq2');
Route::match(['get','post'],'/delete-req3/{id}','ReqController@deleteReq3');
