<?php

use App\Http\Controllers\NewController;
use App\Http\Controllers\SendMail;
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

Route::get('send-mail', [SendMail::class, 'send_mail']);
Route::post('send-mail', [SendMail::class, 'register']);
Route::get('email/address', [NewController::class, 'index'])->name('email');
Route::get('testGit', [SendMail::class, 'testGit']);
Route::get('/git-info', [SendMail::class, 'indexNew']);
