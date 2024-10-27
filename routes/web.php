<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderMaterialController;

Route::get('/form1',[OrderController::class,'create']);
Route::post('/form1',[OrderController::class,'store']);
Route::get('/form2',[MaterialController::class,'create']);
Route::post('/form2',[MaterialController::class, 'store']);
Route::get('/form3',[OrderMaterialController::class,'create']);
Route::post('/form3',[OrderMaterialController::class,'store']);


