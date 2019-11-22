<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('admin')->user();

//     //dd($users);

//     return view('backend.home');
// })->name('home');


Route::group(['middleware' => ['admin']], function() {

	Route::namespace('backend')->group(function () {

		Route::get('home', 'HomeController@index')->name('home');

		// Backend Permissions
	    Route::any('backend-permissions-datatable', 'BackendPermissionController@Datatable')->name('backend-permissions.datatable');
	    Route::post('backend-permissions-bukremove', 'BackendPermissionController@BulkRemove')->name('backend-permissions.bulkremove');
	    Route::resource('backend-permissions', 'BackendPermissionController');

	    // Frontend Permissions
	    Route::any('frontend-permissions-datatable', 'FrontendPermissionController@Datatable')->name('frontend-permissions.datatable');
	    Route::post('frontend-permissions-bukremove', 'FrontendPermissionController@BulkRemove')->name('frontend-permissions.bulkremove');
	    Route::resource('frontend-permissions', 'FrontendPermissionController');

	    //Admin
	    Route::any('admins-datatable', 'AdminController@Datatable')->name('admins.datatable');
	    Route::post('admins-bukremove', 'AdminController@BulkRemove')->name('admins.bulkremove');
	    Route::resource('admins', 'AdminController');

	    //Backend Roles
	    Route::resource('backend-roles', 'BackendRoleController');

	    //Frontend Roles
	    Route::resource('frontend-roles', 'FrontendRoleController');

	    //User
	    Route::any('users-datatable', 'UserController@Datatable')->name('users.datatable');
	    Route::post('users-bukremove', 'UserController@BulkRemove')->name('users.bulkremove');
	    Route::get('users-status/{id}', 'UserController@Status')->name('users.status');
	    Route::resource('users', 'UserController');


	 //    Route::get('donwload-file/{name}/{type}', 'HomeController@downloadFile')->name('donwload.file');
	 

	});
	
	

});
