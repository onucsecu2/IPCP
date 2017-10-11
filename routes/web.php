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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


Route::get('/contest-ranks', 'WelcomeController@rank');
Route::get('/coaches', 'WelcomeController@coach');
Auth::routes();



Route::get('/current-contest', 'CurrentContestController@currentContest');
Route::get('/current-contest/problems', 'CurrentContestController@showProblems');
Route::get('/current-contest/standings', 'CurrentContestController@standings');
Route::get('/current-contest/status', 'CurrentContestController@status');
Route::get('/current-contest/my-submission', 'CurrentContestController@mySubmission');
Route::any('/current-contest/clarification', 'CurrentContestController@clarification');

//by heto
Route::get('/settings/', 'settingController@settings');
Route::get('/Settings/Switch to Judge', 'settingController@switchToJudge');
Route::get('/Settings/Create-Team', 'settingController@createTeam');
Route::get('/settings/submit-problem', 'settingController@submitProblem');
Route::post('/settings/saveProblem', 'settingController@storeProblem');
Route::get('/team_registration','settingController@contestregister');
Route::post('/registered','settingController@registered');
;


