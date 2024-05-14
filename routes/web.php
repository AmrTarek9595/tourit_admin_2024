<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [App\Http\Controllers\HomeController::class,'return_login_view']);
Route::post('/logininto', [App\Http\Controllers\HomeController::class,'logininto']);


Route::get('/home', [App\Http\Controllers\HomeController::class,'home']);


Route::get('/addNewAdminModerator', [App\Http\Controllers\HomeController::class,'addNewAdminModerator']);
Route::get('/addnewuser', [App\Http\Controllers\HomeController::class,'addnewuser']);

Route::get('/removeUsersView', [App\Http\Controllers\HomeController::class,'removeUsersView']);
Route::get('/deleteuser', [App\Http\Controllers\HomeController::class,'deleteuser']);


Route::get('/returnDataForAdminsModerators', [App\Http\Controllers\HomeController::class,'return_data_for_admins_moderators']);


Route::post('/logout', [App\Http\Controllers\HomeController::class,'logout']);







Route::get('/return_home_input_data', [App\Http\Controllers\home_controller::class,'return_home_input_data']);
Route::post('/addindexdata', [App\Http\Controllers\home_controller::class,'addindexdata']);
Route::post('/uploadfeedback', [App\Http\Controllers\home_controller::class,'uploadfeedback']);

Route::get('/return_destination_view', [App\Http\Controllers\home_controller::class,'return_destination_view']);
Route::post('/addprogram', [App\Http\Controllers\home_controller::class,'addprogram']);
Route::post('/editshowtrip', [App\Http\Controllers\home_controller::class,'editshowtrip']);
Route::post('/deletetrip', [App\Http\Controllers\home_controller::class,'deletetrip']);
Route::get('/return_add_destination_view', [App\Http\Controllers\home_controller::class,'return_add_destination_view']);
Route::post('/uploadimagespertrip', [App\Http\Controllers\home_controller::class,'uploadimagespertrip']);

Route::post('/uploadimagefortrip', [App\Http\Controllers\home_controller::class,'uploadimagefortrip']);

