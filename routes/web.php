<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterKategoriController;
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

Route::get('/kategori', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/movies/{id}', [HomeController::class, 'show']);
Route::get('/kategori/{param}', [HomeController::class, 'kategori']);

Route::get('/master-kategori', [MasterKategoriController::class, 'index']);
Route::get('/master-kategori/create', [MasterKategoriController::class, 'create']);
Route::post('/master-kategori/store', [MasterKategoriController::class, 'store']);
Route::get('/master-kategori/{id}/edit', [MasterKategoriController::class, 'edit']);
Route::put('/master-kategori/{id}/update', [MasterKategoriController::class, 'update']);
Route::get('/master-kategori/{id}/destroy', [MasterKategoriController::class, 'destroy']);
// Route::get('/master-kategori', MasterKategoriController::class);
