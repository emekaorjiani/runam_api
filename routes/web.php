<?php

//Route::redirect('/', '/login');
Route::get('/', function (){
    return view('welcome');
});
Route::get('about', 'PagesController@about')->name('about');
Route::get('terms', 'PagesController@terms')->name('terms');
Route::get('privacy', 'PagesController@privacy')->name('privacy');

//Route::get('/home', function () {
//    if (session('status')) {
//        return redirect()->route('admin.home')->with('status', session('status'));
//    }
//
//    return redirect()->route('admin.home');
//});

//Auth::routes();

//Pages


//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//    Route::get('/', 'HomeController@index')->name('home');
//    // Permissions
//    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
//    Route::resource('permissions', 'PermissionsController');
//
//    // Roles
//    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
//    Route::resource('roles', 'RolesController');
//
//    // Users
//    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
//    Route::post('users/parse-csv-import', 'UsersController@parseCsvImport')->name('users.parseCsvImport');
//    Route::post('users/process-csv-import', 'UsersController@processCsvImport')->name('users.processCsvImport');
//    Route::resource('users', 'UsersController');
//
//    // User Alerts
//    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
//    Route::get('user-alerts/read', 'UserAlertsController@read');
//    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);
//
//    // Audit Logs
//    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);
//
//    // Searches
//    Route::delete('searches/destroy', 'SearchesController@massDestroy')->name('searches.massDestroy');
//    Route::resource('searches', 'SearchesController');
//
//    // News Sources
//    Route::delete('news-sources/destroy', 'NewsSourcesController@massDestroy')->name('news-sources.massDestroy');
//    Route::post('news-sources/parse-csv-import', 'NewsSourcesController@parseCsvImport')->name('news-sources.parseCsvImport');
//    Route::post('news-sources/process-csv-import', 'NewsSourcesController@processCsvImport')->name('news-sources.processCsvImport');
//    Route::resource('news-sources', 'NewsSourcesController');
//
//    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
//
//
//});
//Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
//    // Change password
//    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
//        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
//        Route::post('password', 'ChangePasswordController@update')->name('password.update');
//        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
//        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
//    }
//});
