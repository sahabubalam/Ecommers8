<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AllStatusUpdateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;




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
    return view('frontend.layouts.master');
});

//admin part
Route::group(['prefix'=>'auth','middleware'=>'admin'],function(){
    
    Route::get('/', function () {
        return view('index');
    });
Route::get('/users',[UserController::class,'index']);  
Route::get('/users/edit/{id}',[UserController::class,'edit']);  
Route::post('/user/update/{id}',[UserController::class,'update']); 
Route::get('/users/{id}',[UserController::class,'delete']);    

Route::resource('/category',CategoryController::class);
Route::resource('/subcategory',SubcategoryController::class);
Route::resource('/product',ProductController::class);



Route::get('/category/status/{status}/{id}',[AllStatusUpdateController::class,'status']);

});