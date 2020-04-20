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
    return view('hom');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/prices', function () {
    return view('prices');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/payment', function () {
    return view('admin.views.payment');
});


Route::get('/userdashboard', function () {
    return view('admin.views.userdashboard');
});
Route::get('/paper', function () {
    return view('admin.views.paper');
});
Route::get('/apply', function () {
    return view('admin.views.apply');
});
Route::get('/makeappointment', function () {
    return view('admin.views.makeappointment');
});




Route::get('/timebook','eventController@showtime');



Route::get('/dashboard', function () {
    return view('admin.views.dashboard');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/user', function () {
    return view('admin.views.user');
});

Route::get('/a', function () {
    return view('admin.views.a');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/save','applycontroller@store');
Route::post('/adduser','applycontroller@store');
Route::get('/user','getcontroller@getdata');
Route::get('/deleteuser/{id}','getcontroller@deluser');
Route::get('/edituser/{id}','getcontroller@eduser');
Route::get('/editrep/{id}','getreportcontroller@edapp');
Route::post('/editreport','getreportcontroller@editrep');
Route::get('/viewuser/{id}','getcontroller@vwuser');
Route::post('/eduser','getcontroller@edituser');
Route::get('/enquiry','getenquirycontroller@getenquiry');
Route::get('/delenq/{id}','getenquirycontroller@deluser');
Route::get('/deleteapp/{id}','bookcontroller@delapp');
Route::post('/enquir','enquirycontroller@storeenquiry');
Route::post('/addreport','reportcontroller@store');

Route::get('/search','getreportcontroller@search');
Route::get('/searchuser','getcontroller@search');
Route::get('/searchtime','eventcontroller@search');
Route::get('searchapp','bookcontroller@search');
Route::post('/book','bookcontroller@store');
Route::get('/appointments','bookcontroller@getbook');
Route::get('/report','getreportcontroller@getdata');
Route::get('/viewreport/{id}','getreportcontroller@viewdata');
Route::get('/time','eventcontroller@getevent');
Route::get('/addevent','eventcontroller@display');
Route::post('/storeevent','eventcontroller@store');
Route::resource('/events','eventcontroller');
Route::get('/displaydata','eventcontroller@show');
Route::get('/delevent/{id}','eventcontroller@del');
Route::get('/delrep/{id}','getreportcontroller@del');
Route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.views.dashboard');
    });

});
