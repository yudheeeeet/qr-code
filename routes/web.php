<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\QrCodeGeneratorController;

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

Route::view('URI', 'viewName');

Route::get('/qr-code', [QrCodeGeneratorController::class, 'qr']);
Route::get('/test', [BlogController::class,'blog'])->name('blog');
Route::get('/create', [BlogController::class, 'create']);
Route::post('/store', [BlogController::class, 'store']);
Route::get('/edit/{id}', [BlogController::class, 'edit']);
Route::post('/update/{id}', [BlogController::class, 'update']);
Route::delete('test/{id}', [BlogController::class, 'destroy']);
