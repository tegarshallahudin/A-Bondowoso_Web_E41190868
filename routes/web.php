<?php

use Illuminate\Support\Facades\Route;

// Route::get("/home", function () {
//      return view("user.home");
//  });
// Route::get('user', 'ManagementUserController@inpdex');
Route::resource('user', 'ManagementUserController');