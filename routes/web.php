<?php
// date_default_timezone_set('Asia/Kolkata');
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


Route::get('/cc', function() {
  Artisan::call('view:clear');
  Artisan::call('config:cache');
  Artisan::call('cache:clear');
  // return what you want
});

Route::get('/', function () {
    return view('welcome');
});


//first 
Auth::routes(['register' => false]);

//after
Auth::routes(['verify' => true]);


Route::group(['middleware' => ['auth', 'verified']], function() {
  Route::namespace('frontend')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    //User
    Route::any('users-datatable', 'UserController@Datatable')->name('users.datatable');
    Route::post('users-bukremove', 'UserController@BulkRemove')->name('users.bulkremove');
    Route::get('users-status/{id}', 'UserController@Status')->name('users.status');
    Route::resource('users', 'UserController');

    // Company
    Route::resource('companies','CompanyController');
    Route::any('companies-datatable', 'CompanyController@Datatable')->name('companies.datatable');
    Route::post('companies-bukremove', 'CompanyController@BulkRemove')->name('companies.bulkremove');
    Route::get('companies-status/{id}', 'CompanyController@Status')->name('companies.status');

    //Department
    Route::resource('departments','DepartmentController');
    Route::any('departments-datatable', 'DepartmentController@Datatable')->name('departments.datatable');
    Route::post('departments-bukremove', 'DepartmentController@BulkRemove')->name('departments.bulkremove');
    Route::get('departments-status/{id}', 'DepartmentController@Status')->name('departments.status');

    //Job title
    Route::resource('job-titles','JobTitleController');
    Route::any('job-titles-datatable', 'JobTitleController@Datatable')->name('job-titles.datatable');
    Route::post('job-titles-bukremove', 'JobTitleController@BulkRemove')->name('job-titles.bulkremove');
    Route::get('job-titles-status/{id}', 'JobTitleController@Status')->name('job-titles.status');

    //LeaveGroup
    Route::any('leave-groups-datatable', 'LeaveGroupController@Datatable')->name('leave-groups.datatable');
    Route::post('leave-groups-bukremove', 'LeaveGroupController@BulkRemove')->name('leave-groups.bulkremove');
    Route::get('leave-groups-status/{id}', 'LeaveGroupController@Status')->name('leave-groups.status');
    Route::resource('leave-groups', 'LeaveGroupController');

    //LeaveType
    Route::any('leave-types-datatable', 'LeaveTypeController@Datatable')->name('leave-types.datatable');
    Route::post('leave-types-bukremove', 'LeaveTypeController@BulkRemove')->name('leave-types.bulkremove');
    Route::get('leave-types-status/{id}', 'LeaveTypeController@Status')->name('leave-types.status');
    Route::resource('leave-types', 'LeaveTypeController');

  });
});

// --------------------------------------------Get Subcategory (Ajax)-----------------------------------------
Route::any('get-jobtitle', 'AjaxController@getJobtitle')->name('get.job_title');


Route::group(['prefix' => 'admin'], function () {
  Route::namespace('backend')->group(function () {
      Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
      Route::post('/login', 'AdminAuth\LoginController@login')->name('admin.login');
      Route::post('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');

      // Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
      // Route::post('/register', 'AdminAuth\RegisterController@register');

      // Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
      // Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
      // Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
      // Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
  });
});
