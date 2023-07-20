<?php

use Illuminate\Support\Facades\Route;




Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login', function (){
        return view('admin.auth.login');
    });
    Route::get('dashboard', function (){
        return view('admin.include.dashboard');
    });
});

Route::get('test', function (){
    return view('layouts.admin_app');
});


?>