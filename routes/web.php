<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info',[InfoController::class,'index']);
Route::get('/info/tambah',[InfoController::class,'tambah']);
Route::post('/info/masukan',[InfoController::class,'masukan']);
Route::delete('/info/{idinfo}',[InfoController::class,'delete']);
Route::get('/info/{idinfo}/edit',[InfoController::class,'edit']);
Route::put('/info/{idinfo}',[InfoController::class,'update']);


Route::get('/kampus',[KampusController::class,'index']);
Route::get('/kampus/tambah',[KampusController::class,'tambah']);
Route::post('/kampus/masukan',[KampusController::class,'masukan']);
Route::delete('/kampus/{idkampus}',[KampusController::class,'delete']);
Route::get('/kampus/{idkampus}/edit',[KampusController::class,'edit']);
Route::put('/kampus/{idkampus}',[KampusController::class,'update']);


Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/kategori/tambah',[KategoriController::class,'tambah']);
Route::post('/kategori/masukan',[KategoriController::class,'masukan']);
Route::delete('/kategori/{idkategori}',[KategoriController::class,'delete']);
Route::get('/kategori/{idkategori}/edit',[KategoriController::class,'edit']);
Route::put('/kategori/{idkategori}',[KategoriController::class,'update']);

Route::get('/auth',[AuthController::class, 'index']); 
Route::post('auth/login',[AuthController::class, 'login']); 
Route::post('logout',[AuthController::class, 'logout']); 