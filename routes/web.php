<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Usercon;

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
Route::get('/index',function(){
    return view('index');
});
Route::get('/login',[Logincontroller::class,'login'])->middleware('checklogin');
Route::post('/loginnow',[Logincontroller::class,'loginnow']);
Route::get('/logout',function(){
    session()->forget('email');
    return redirect('/');
});
// Route::middleware(['group'])->group(function () {
    Route::resource('/doc',DoctorController::class);
    Route::resource('/patient',PatientController::class);
// });

Route::get('/',[Usercon::class,'user']);
Route::get('/about',[Usercon::class,'about']);
Route::get('/services',[Usercon::class,'services']);
Route::get('/pprofile',[Usercon::class,'pprofile']);
Route::get('/dprofile',[Usercon::class,'dprofile']);