<?php

use App\Http\Controllers\CicleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.principal');
});

Route::resource('cicle', CicleController::class);
Route::resource('modul', ModulController::class);


// Route::get('/curs', function (){
//     return view('layouts.curs');
// });