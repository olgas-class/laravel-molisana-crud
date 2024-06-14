<?php

use App\Http\Controllers\Admin\PastaController;
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

Route::get('/', function () {
    return view('home');
});

// 
// Route::get('/pastas', [PastaController::class, 'index'])->name('pastas.index');
// Route::get('/pastas/{pasta}', [PastaController::class, 'show'])->name('pastas.show');


Route::resource('pastas', PastaController::class);