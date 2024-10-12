<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\VisitorController;
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

Route::get('/contacts', function () {
    return view('contacts');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/clinical_operation',[ServiceController::class,'clinical_operation']);
Route::get('/biostatistics',[ServiceController::class,'biostatistics']);
Route::get('/clinical_data',[ServiceController::class,'clinical_data']);
Route::get('/data_management',[ServiceController::class,'data_management']);
Route::get('/medical_writing',[ServiceController::class,'medical_writing']);
Route::get('/pharmacovigilance',[ServiceController::class,'pharmacovigilance']);
Route::get('/etmf',[ServiceController::class,'etmf']);

//Legal routes
route::get('/contacts',[IndexController::class,'contact']);
route::get('/gdpr',[IndexController::class,'gdpr']);
route::get('/privacy',[IndexController::class,'privacy']);
route::get('/cookies',[IndexController::class,'cookies']);

//Technology routes
route::get('/edc',[TechnologyController::class,'edc']);
Route::get('/etmf_tech',[TechnologyController::class,'etmf_tech']);
Route::get('/ctms',[TechnologyController::class,'ctms']);
Route::get('/irt',[TechnologyController::class,'irt']);

//Post Routes

route::get('/posts',[PostController::class,'index']);
route::get('/posts/{id}',[PostController::class,'singlePost']);
Route::get('/social-share', [PostController::class, 'share']);

route::post('/comments',[CommentController::class,'store']);

route::get('/protocol',[IndexController::class,'protocol']);
route::get('/csr',[IndexController::class,'csr']);

route::post('/visitor', [VisitorController::class, 'store']);

//route::get('/tags',[TagController::class,'index']);
