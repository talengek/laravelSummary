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

Route::get('/', function () {
    return view('home');
})->name('summary_home');

Route::get('/create', function () {
    return view('summary_create');
});



Route::post('/create/summary', 'summaryController@createSummary')->name('create-summary');
Route::get('/my', 'summaryController@allSummary')->name('my-summery');
Route::get('/summary/{id}/update', 'summaryController@updateSummary')->name('summary-update');
Route::post('/summary/{id}/update', 'summaryController@updateSummarySubmit')->name('summary-update-submit');


//Route::get('/update', 'summaryController@summaryUpdate')->name('summary-update');
