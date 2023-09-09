<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\eventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 Route::get('/', function () {
    return view('mainlayout');
});
*/

Route::get('/', [eventController::class, 'index']);
Route::get('/list', [eventController::class, 'show']);
Route::get('/events/create', [eventController::class, 'create'])->middleware('auth');
Route::post('/events', [eventController::class, 'store']);
Route::get('/dashboard', [eventController::class, 'dashboard'])->middleware('auth');
Route::delete('/events/{id}', [eventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [eventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [eventController::class, 'update'])->middleware('auth');