<?php

use Illuminate\Support\Facades\Route;

// Route::get("/home", function () {
//      return view("user.home");
//  });
// Route::get('user', 'ManagementUserController@inpdex');
Route::resource('user', 'ManagementUserController');

Route::group(['namespace' => 'Frontend'], function()
{
    Route::resource('home', 'HomeController');
});

Route::group(['namespace' => 'Backend'], function()
{
    Route::resource('dashboard', 'DashboardController');
});