<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('order');
});
Route::get('log', function () {
    return view('login');
});

// Route::get('dash', function () {
//     return view('dashboard');
// });


Route::post('save',[OrderController::class,'save']);
Route::post('logins',[OrderController::class,'login']);
Route::get('dash',[OrderController::class,'dashboard']);


// Route::get('sendbasicemail',[MailController::class,'basic_email']);
// Route::get('sendhtmlemail',[MailController::class,'html_email']);
// Route::get('sendattachmentemail',[MailController::class,'attachment_email']);
// Route::get('sendmail',[MailController::class,'emails']);

// Route::get('/email', [[MailController::class,'create']]);
// Route::post('/email', 'MailController@sendEmail')->name('send.email');


