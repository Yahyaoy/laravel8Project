<?php

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

Route::get('/',function (){
   return view('welcome');
});


//Route::get('conversations','App\Http\Controllers\ConversationsController@index');
//Route::get('conversations/{conversation}','App\Http\Controllers\ConversationsController@show')->middleware('can:view,conversation');
//Route::post('best-replies/{reply}','App\Http\Controllers\ConversationBestReplyController@store');
//
//\Illuminate\Support\Facades\Auth::routes();





//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('payments/create' , 'App\Http\Controllers\PaymentsController@create')->middleware('auth');
//
//Route::post('payments' ,'App\Http\Controllers\PaymentsController@store')->middleware('auth');
//Route::get('notifications','App\Http\Controllers\UserNotificationsController@show')->middleware('auth');
//\Illuminate\Support\Facades\Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
