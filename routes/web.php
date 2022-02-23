<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index')->name('home');
Route::get('/home', 'MainController@index')->name('home');
Route::get('/index', 'MainController@index')->name('home');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/member', 'MainController@schedule')->name('schedule');
Route::get('/contact', 'MainController@contact')->name('contact');
Route::post('/contactus', 'MainController@contactus')->name('contactus');
Route::get('/grant', 'MainController@grant')->name('grant');
Route::get('/grantsuccess', 'MainController@tasksuccess')->name('tasksuccess');


//User Area
Route::get('/user/dashboard', 'UserDashboardController@index')->name('user.dashboard');
Route::get('/user/settings', 'UserDashboardController@settings')->name('user.settings');
Route::post('/user/settingsupdate', 'UserDashboardController@settingsupdate')->name('user.settingsupdate');
Route::get('/user/profile', 'UserDashboardController@profile')->name('user.profile');
Route::get('/user/schedule', 'UserDashboardController@schedule')->name('user.schedule');
Route::get('/user/attendance', 'UserDashboardController@attendance')->name('user.attendance');
Route::get('/user/success', 'UserDashboardController@success')->name('user.success');


Route::get('resetpassword', ['as' => 'auth.passwords.resetpassword', 'uses' => 'UserDashboardController@resetpassword']);

Route::post('/attendance/store', 'AttendanceController@store')->name('attendance.store'); 
Route::post('/task/store', 'TaskController@store')->name('task.store'); 
Route::post('/lecturer/store', 'LecturerController@store')->name('lecturer.store'); 
Route::post('/autocomplete/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch'); 
Route::group(['prefix'=>'admin'], function() {

// Login Routes...
Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);

 Route::post('login', ['uses' => 'AdminAuth\LoginController@login']);

 Route::post('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@logout']);


// Password Reset Routes...
Route::get('password/reset', ['as' => 'admin.password.request', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);


Route::post('password/email', ['as' => 'admin.password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);


Route::get('password/reset/{token}', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);


Route::post('password/reset', ['uses' => 'AdminAuth\ResetPasswordController@reset']);



//Dashboard
Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'AdminDashboardController@index']);
Route::get('resetpassword', ['as' => 'admin.resetpassword', 'uses' => 'AdminDashboardController@resetpassword']);
Route::post('passwordreset', ['as' => 'admin.passwordreset', 'uses' => 'AdminDashboardController@passwordreset']);

Route::get('users', ['as' => 'admin.users', 'uses' => 'AdminDashboardController@users']);
Route::get('taskview', ['as' => 'admin.taskview', 'uses' => 'AdminDashboardController@taskview']);
Route::get('lrecord', ['as' => 'admin.lrecord', 'uses' => 'AdminDashboardController@lrecord']);
Route::get('srecord', ['as' => 'admin.srecord', 'uses' => 'AdminDashboardController@srecord']);
Route::get('attendance', ['as' => 'admin.attendance', 'uses' => 'AdminDashboardController@attendance']);
Route::get('task', ['as' => 'admin.task', 'uses' => 'AdminDashboardController@task']);
Route::get('testtask', ['as' => 'admin.testtask', 'uses' => 'AdminDashboardController@testtask']);
Route::get('task', ['as' => 'admin.task', 'uses' => 'AutocompleteController@index']);
Route::get('testtask/{id}', ['as' => 'admin.testtask', 'uses' => 'AdminDashboardController@testtask']);
Route::get('testtaskb/{id}', ['as' => 'admin.testtaskb', 'uses' => 'AdminDashboardController@testtaskb']);
Route::get('newlecturer', ['as' => 'admin.newlecturer', 'uses' => 'AdminDashboardController@newlecturer']);
Route::get('lecturer', ['as' => 'admin.lecturer', 'uses' => 'AdminDashboardController@lecturer']);
Route::get('success', ['as' => 'admin.success', 'uses' => 'AdminDashboardController@success']);
Route::get('nlsuccess', ['as' => 'admin.nlsuccess', 'uses' => 'LecturerController@nlsuccess']);

//Route::post('grants', [GrantsController::class, 'grants.store']);
//Route::post('grant', 'GrantsController@store')->name('grants.store');
//Route::get('/user/success', 'UserDashboardController@success')->name('user.success');

 //Route::resource('store', [AuthController::class, 'store']);



});


//Admin