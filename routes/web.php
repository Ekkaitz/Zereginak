<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZereginakController;

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
    return view('layouts/main');
});

Route::get('/zeregina', [ZereginakController::class, "index"]);
Route::post('/zeregina', [ZereginakController::class, "gorde"]);


Route::delete('/zeregina/{id}', function () {
    //zeregin berriak gehitzeko ruta
    return view('welcome');
});

