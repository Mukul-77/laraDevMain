<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TestMiddleware;
use App\Http\Controllers\UserControllerNew;

Route::post('/addUser', [UserController::class, 'addUser'])->name('user.add');
/*

//Route::post('/getformData', [UserController::class, 'getFormData'])->name('user.addData');

Route::view('/home', 'home')->middleware('MiddlewareMultiGroup');
Route::view('/about', 'about')->name('about');

Route::get('/about/{name}', function($name){
    return view('about');
})->name('about');


Route::prefix('student')->group(function(){
    Route::view('user-form', 'userForm');
    Route::view('userForm', 'user-form');
});

Route::controller(UserController::class)->group(function(){
    Route::post('getformData', 'getFormData')->name('user.addData');

});


Route::middleware('MiddlewareMultiGroup')->group(function(){
    Route::view('/user-form', 'userForm');
    Route::view('/userForm', 'user-form');
    Route::view('/','welcome');
});

Route::view('/testing','testFile')->middleware(TestMiddleware::class);

*/

//----- After UserControllerNew---

Route::get('/users', [UserControllerNew::class, 'users']);