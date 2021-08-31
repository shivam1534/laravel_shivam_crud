<?php

use App\Http\Controllers\FetchUser;
use Illuminate\Support\Facades\Route;

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
    return redirect('/alluser');
});



// Route::get('/newRegistration', [Register::class,'index']);

Route::get('/fetchuser',[FetchUser::class,'aboutus']);
Route::get('/services',[FetchUser::class,'services']);
Route::get('/home',[FetchUser::class,'home']);
Route::get('/alluser',[FetchUser::class,'getAllUser']);
Route::get('/adduser',[FetchUser::class,'addUser']);
Route::post('/added',[FetchUser::class,'added']);
Route::post('/delete/{id}', [FetchUser::class,'delete']);
Route::post('/edit',[FetchUser::class,'edit']);
Route::post('/post_edit',[FetchUser::class,'post_edit']);
