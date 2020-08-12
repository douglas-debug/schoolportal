<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
    //Route::view('/home', 'home')->middleware('auth');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::view('/home', 'home')->middleware('auth');
});
*/


/* web for all pages controller*/
Route::get('/','pagesController@home');
Route::get('/signin','pagesController@signin');
Route::get('/signup','pagesController@signup');
Route::get('/signup2','pagesController@signup2');
Route::get('/icon','pagesController@icon');
Route::get('/job_index','pagesController@job_index');
Route::get('/show/{id}','pagesController@show');

/*web for job applied count  */
Route::get('/show/applied/{id}','AppliedController@applied');

/*web for job bookmark count  */
Route::get('/show/bookmark/{id}','BookmarkController@bookmark');

/*web to show job applied by user id */
Route::get('/appliedjob/{id}','AppliedController@show');

/*web to show job bookmark by user id */
Route::get('/bookmark/{id}','BookmarkController@show');

/** web for bookmark job */
Route::get('/bookmark',function(){
    return view('employee.bookmark');
}); 

/** web for applied job */
Route::get('/appliedjob',function(){
     return view('employee.appliedjob');
    });
Auth::routes();


/**web for group for employerdashboard */
Route::group(['middleware'=>['auth']],function(){
    Route::get('/employerdashboard',function(){
        return view('employer.employerdashboard');
    }); 

});

/**web for admin  */
Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });
    Route::get('/role_register','Admin\DashboardController@registered');
    Route::get('/role_edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role_register_update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
    Route::get('/status/{id}','Admin\DashboardController@status')->name('status');
    Route::get('/dashboard', 'Admin\CountController@count')->name('count');
});
       /**web for employee */
   Route::resource('employee','EmployeeController');

    /**web for employer */
    Route::resource('employer','EmployerController');


    Route::get('/home', 'HomeController@index')->name('home');

    /**web for group for employeedashboard */
    Route::get('/employeedashboard', function () {
        return view('employee.employeedashboard');
    });

    Route::get('/viewprofile','EmployerController@viewprofile');
    Route::get('/deleteaccount','EmployeeController@deleteaccount');

    /**web for job */
    Route::resource('job', 'JobsController');
   