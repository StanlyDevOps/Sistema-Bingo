<?php

use App\Http\Controllers\AuthUser;
use GuzzleHttp\Middleware;
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
    return view('login');
});

// Route::get('/bingo', function () {
//     return view('bingo');
// });

Route::view('/login', 'login')->name('login');
Route::view('/bingo', 'bingo')->name('bingo');
Route::post('/registrar', [AuthUser::class, 'registrar'])->name('registrar');
Route::post('/login', [AuthUser::class, 'login'])->name('login');


