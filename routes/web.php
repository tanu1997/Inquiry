<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

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
    return view('welcome');
});

//Customer Inquiry
Route::get('/user', [InquiryController::class, 'index']);
Route::post('/create',[InquiryController::class,'create'])->name('validate.form');

//Question Inquiry

Route::get('/myquestion',[InquiryController::class,'showQuestion']);
Route::post('/createquestion',[InquiryController::class,'createQuestion'])->name('question.create');
