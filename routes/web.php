<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nailcontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\frontcontroller;
use App\Http\Controllers\servicecontroller;
use App\Http\Controllers\paymentcontroller;
use App\Http\Controllers\bookingcontroller;
use App\Http\Controllers\serviceaddcontroller;
use App\Http\Controllers\feedbackcontroller;

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
//Route::get('/',function(){
  // return view('index')
//});
Route::get('/', [feedbackcontroller::class,'index']);



Route::group(['middleware'=>['LoginCheck']],function()
{
    Route::get('/login', function () {return view('login');});
    //Route::get('/login', [nailcontroller::class,'create']);
    
     
    Route::get('/adminhome',[nailcontroller::class,'adminHomeView']);  
    Route::get('/customerhome',[nailcontroller::class,'customerHomeView']);  
    Route::get('/logout',[nailcontroller::class , 'lgout' ] ); 
});
  Route::post('/log',[nailcontroller::class,'check']);

Route::get('/register', [registercontroller::class,'create']);
Route::get('/serviceadd', [servicecontroller::class,'create']);
Route::get('/payment/{id}', [paymentcontroller::class,'ress']);
Route::get('/booking', [bookingcontroller::class,'create']);
Route::get('/services', [servicecontroller::class,'create']);
Route::get('/serviceadd', [serviceaddcontroller::class,'create']);
Route::get('/feedback', [feedbackcontroller::class,'create']);

Route::get('/readall', [bookingcontroller::class,'index']);
Route::get('/perdayreport', [bookingcontroller::class,'index1']);
Route::get('/servicesall', [serviceaddcontroller::class,'index']);
Route::get('/serviceviews', [serviceaddcontroller::class,'index1']);
Route::get('/feetcare/{id}', [serviceaddcontroller::class,'disp']);
Route::get('/todaybook', [bookingcontroller::class,'index2']);

Route::post('/loginread',[nailcontroller::class, 'store']);
Route::post('/registerread', [registercontroller::class,'store']);
Route::post('/serviceread', [servicecontroller::class,'store']);
Route::post('/bookingread', [servicecontroller::class,'store']);
Route::post('/serviceaddread',[serviceaddcontroller::class, 'store']);
Route::post('/feedbackread',[feedbackcontroller::class, 'store']);

Route::get('/booking/{id}/edit',[bookingcontroller::class,'edit']);
Route::get('/booking/{id}/edit1',[bookingcontroller::class,'edit1']);
Route::get('/booking/{id}/today',[bookingcontroller::class,'today']);

Route::post('/paymentsuccess',[bookingcontroller::class,'payment']);
Route::post('/payreport',[bookingcontroller::class,'sea']);
Route::get('/serviceadd/{id}/del',[serviceaddcontroller::class,'del']);

Route::get('/serviceadd/{id}/edit',[servicecontroller::class,'edit']);
Route::post('/serviceupdate/{id}/edit',[servicecontroller::class,'update']);