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
/*Route::get('/', function () {
    return view('Welcome');
});
*/


Route::get('/contest-ranks', 'WelcomeController@rank');
Route::get('/coaches', 'WelcomeController@coach');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
//Route::get('/users/logout', 'Auth\LoginController@logout')->name('users.logout');


Route::get('/current-contest', 'CurrentContestController@currentContest');
@@ -26,16 +31,38 @@ Route::get('/current-contest/problems', 'CurrentContestController@showProblems')
Route::get('/current-contest/standings', 'CurrentContestController@standings');
Route::get('/current-contest/status', 'CurrentContestController@status');
Route::get('/current-contest/my-submission', 'CurrentContestController@mySubmission');
Route::any('/current-contest/clarification', 'CurrentContestController@clarification');
Route::post('current-contest/submitted', 'CurrentContestController@submittedSolution');

//by heto
Route::get('/settings/', 'settingController@settings');
Route::get('/Settings/Switch to Judge', 'settingController@switchToJudge');
Route::get('/Settings/Create-Team', 'settingController@createTeam');
Route::get('/settings/submit-problem', 'settingController@submitProblem');
Route::post('/settings/saveProblem', 'settingController@storeProblem');
Route::get('/team_registration','settingController@contestregister');
Route::post('/registered','settingController@registered');
;
Route::post('settings/saveProblem', 'settingController@storeProblem');


Route::group(['middleware' => 'admin_guest'], function() {
    Route::post('/admin/login', 'AdminsAuth\LoginController@login')->name('admin.login.submit');
    Route::get('/admin/login', 'AdminsAuth\LoginController@showLoginForm')->name('admin.login');
});
Route::group(['middleware' => 'admin_auth'], function(){
    
    Route::get('/admin-home', 'AdminController@index')->name('admin.home');
    Route::post('/admin/logout', 'AdminsAuth\LoginController@logout')->name('admin.logout');
    Route::get('/admin-home/create-contest', 'AdminController@createContest')->name('admin.create.contest');
 
    Route::post('/admin-home/create-contest/save', 'AdminController@saveContest');
});
Route::group(['middleware' => 'coach_auth'], function(){
    Route::post('/coach/logout', 'CoachesAuth\LoginController@logout')->name('coach.logout');
    Route::get('/coach', 'CoachController@index')->name('coach.home');
    
});

Route::group(['middleware' => 'coach_guest'], function() {
    Route::get('/coach/register', 'CoachesAuth\RegisterController@showRegistrationForm')->name('coach.register');
    Route::post('coach/register', 'CoachesAuth\RegisterController@register');
    
    Route::post('/coach/login', 'CoachesAuth\LoginController@login')->name('coach.login.submit');
    Route::get('/coach/login', 'CoachesAuth\LoginController@showLoginForm')->name('coach.login');
});
