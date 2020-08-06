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

Route::get('/home', 'HomeController@index')->name('home');


/*Admin Route Start here*/

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','Admin']],function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');


});
/*Admin Route End here*/

/*Manger Route Start here*/

Route::group(['as'=>'manager.','prefix'=>'manager','namespace'=>'Manager','middleware'=>['auth','Manager']],function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');


});
/*Manger Route End here*/




/*Agent Route Start here*/

Route::group(['as'=>'agent.','prefix'=>'agent','namespace'=>'Agent','middleware'=>['auth','Agent']],function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');


});
/*Agent Route End here*/





/*Customer Route Start here*/

Route::group(['as'=>'customer.','prefix'=>'customer','namespace'=>'Customer','middleware'=>['auth','Customer']],function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');


});
/*Customer Route End here*/




/*Customer Route Start here*/

Route::group(['as'=>'donar.','prefix'=>'donar','namespace'=>'Donar','middleware'=>['auth','Donar']],function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');


});
/*Customer Route End here*/




Route::get('check-dashboard',function(){

    return view('backend.index');
});
