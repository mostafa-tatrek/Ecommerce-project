<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;


route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/redirect',[HomeController::class,'redirect']);
route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/catagory_delete/{id}',[AdminController::class,'catagory_delete']);
route::get('/view_proact',[AdminController::class,'/view_proact']);
route::post('/add_prodact',[AdminController::class,'/add_prodact']);
route::get('/show_prodact',[AdminController::class,'/show_prodact']);
route::get('/update_prodact/{id}',[AdminController::class,'/update_prodact']);
route::get('/delete_prodact/{id}',[AdminController::class,'/delete_prodact']);
route::post ('/upate_prodact_confirm/{id}',[AdminController::class,'/upate_prodact_confirm']);





