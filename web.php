<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imobiliariaController;

Route::get('/',[imobiliariaController::class,'index']);
Route::post('/inserir',[imobiliariaController::class,'inserir']);
Route::get('/delete/{codigo}',[imobiliariaController::class,'delete']);
Route::get('/edit/{codigo}',[imobiliariaController::class,'openEdit']);
Route::post('/edit/{codigo}',[imobiliariaController::class,'updateEdit']);
Route::get('/search',[imobiliariaController::class,'search']);
