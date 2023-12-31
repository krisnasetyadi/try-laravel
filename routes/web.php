<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Goods;
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
    return view('welcome');
});

Route::get('/get-data', [Goods::class, 'getData']);
Route::post('/store-data', [Goods::class, 'storeData']);