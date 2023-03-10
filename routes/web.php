<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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


Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/update',function(){
    return view('update'); 
})->name('update');


Route::get('/cars/search', [CarController::class, 'search'])->name('searchbyname');
Route::post('/cars/update', [CarController::class, 'updatecars'])->name('updatecars');

Route::resource('cars',CarController::class)->only([
    'index', 'create','store'
]);

