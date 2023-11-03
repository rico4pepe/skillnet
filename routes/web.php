<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FallbackController;
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
// //Get
// Route::get('/student',[SendController::class, 'index'])->name('index');
// Route::get('student/{id?}', [SendController::class, 'show']);
// //  Route::get('student/{id?}', [SendController::class, 'show'])->
// //  whereNumber('id');

// //  Route::get('student/{id}/{name}', [SendController::class, 'show'])->
// //  whereNumber('id') ->
// //  whereAlpha('name');

// //Post
// Route::get('/student/create', [SendController::class, 'create']);
// Route::post('/student', [SendController::class, 'store']);

// //PUT OR PATCH
// Route::get('/student/edit/{id}', [SendController::class, 'edit']);
// Route::put('/student/{id}', [SendController::class, 'update']);

// //Delete
// Route::get('/student/delete/{id}', [SendController::class, 'destroy']);

Route::prefix('/auth')->group(function(){

    Route::get('/signin', [UserController::class, 'loginuser']);
    Route::get('/signup', [UserController::class, 'register']);
});
Route::get('/', [UserController::class, 'index']);


//Route::resource('index', SendController::clas  "Olanrewaju", "profession" => "Developer"]);
//
Route::fallback(FallbackController::class);
