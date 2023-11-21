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
Route::get('/', function (){
    return view('login');
});   
route::group(['middleware' => ['web']], function(){
    
    Route::post('/registrar', [AuthUser::class, 'registrar']);
    Route::post('/login', [AuthUser::class, 'login']);
});

Route::get('/bingo', function () {
    return view('bingo');
});
