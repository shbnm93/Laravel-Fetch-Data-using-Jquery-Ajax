<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; //add UserController
 
//Route::get('/', function () {
//    return view('welcome');
//});
 
Route::get('/', [UserController::class, 'index']);
 
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');