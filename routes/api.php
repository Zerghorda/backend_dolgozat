<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReceptsController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('recept/{id}',[ReceptsController::class,'show']);
Route::get('recepts',[ReceptsController::class,'showall']);
Route::post('recept',[ReceptsController::class,'store']);
Route::patch('recept/{id}',[ReceptsController::class,'update']);
Route::delete('recept/{id}',[ReceptsController::class,'destroy']);

Route::get('category/{id}',[CategoryController::class,'show']);
Route::get('categorys',[CategoryController::class,'showall']);
Route::post('category',[CategoryController::class,'store']);
Route::patch('category/{id}',[CategoryController::class,'update']);
Route::delete('category/{id}',[CategoryController::class,'destroy']);