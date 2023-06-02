<?php

use App\Http\Controllers\EncuestaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/welcome', function () {
//     return view('welcome');
//     // return redirect('/encuestas');
// });

Route::get('/', [EncuestaController::class, 'index'])->name('home');
Route::get('/encuesta/{slug}', [EncuestaController::class, 'show']);

Route::get('/nueva', [EncuestaController::class, 'create']);
Route::post('/guardar', [EncuestaController::class, 'store']);