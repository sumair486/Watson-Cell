<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\BenefeciariesController;
use App\Http\Controllers\Admin\ActivityController;


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

 Route::group(['middleware'=>['auth','admin'],'namespace' => 'Admin'],function () {

Route::get('/admin', function () {
    return view('admin.layout.master');

});

Route::resource('users', 'UserController');
Route::get('users/delete/{user}','UserController@destroy')->name('users.destroy');

Route::resource('organizations', 'OrganizationController');
Route::get('organizations/delete/{organization}','OrganizationController@destroy')->name('organizations.destroy');
Route::get('orgpdf/downloadPDF','OrganizationController@downloadPDF')->name('orgpdf');


Route::resource('activitys', 'ActivityController');
Route::get('activitys/delete/{activity}','ActivityController@destroy')->name('activitys.destroy');
Route::get('pdf/downloadPDF','ActivityController@downloadPDF')->name('pdf');

Route::resource('odfs', 'ODFStatusController');
Route::get('odfs/delete/{odf}','ODFStatusController@destroy')->name('odfs.destroy');
Route::get('odfpdf/downloadPDF','ODFStatusController@downloadPDF')->name('odfpdf');

Route::resource('schools', 'SchooldataController');
Route::get('schools/delete/{school}','SchooldataController@destroy')->name('schools.destroy');
Route::get('schpdf/downloadPDF','SchooldataController@downloadPDF')->name('schpdf');



Route::resource('benefeciariess', 'BenefeciariesController');
Route::get('benefeciariess/delete/{benefeciarie}','BenefeciariesController@destroy')->name('benefeciariess.destroy');
Route::get('benefpdf/downloadPDF','BenefeciariesController@downloadPDF')->name('benefpdf');

 });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
