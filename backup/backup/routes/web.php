<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/clinical_operation',[ServiceController::class,'clinical_operation']);
Route::get('/biostatistics',[ServiceController::class,'biostatistics']);
Route::get('/clinical_data',[ServiceController::class,'clinical_data']);
Route::get('/data_management',[ServiceController::class,'data_management']);
Route::get('/medical_writing',[ServiceController::class,'medical_writing']);
Route::get('/pharmacovigilance',[ServiceController::class,'pharmacovigilance']);
Route::get('/etmf',[ServiceController::class,'etmf']);

//Legal routes
route::get('/contact',[IndexController::class,'contact']);
route::get('/gdpr',[IndexController::class,'gdpr']);
route::get('/privacy',[IndexController::class,'privacy']);
route::get('/cookies',[IndexController::class,'cookies']);

//Technology routes
route::get('/edc',[TechnologyController::class,'edc']);
Route::get('/etmf_tech',[TechnologyController::class,'etmf_tech']);
Route::get('/ctms',[TechnologyController::class,'ctms']);



Route::get('/services/{id}',[ServiceController::class,'findById']);

