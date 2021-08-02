<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('places', [PlaceController::class, 'index']);
Route::get('places/create', [PlaceController::class, 'create']);
Route::post('places/store', [PlaceController::class, 'store']);
Route::get('places/{id}', [PlaceController::class, 'show']);
Route::get('places/edit/{id}', [PlaceController::class, 'edit']);
Route::post('places/update/{id}', [PlaceController::class, 'update']);
Route::get('places/delete/{id}', [PlaceController::class, 'destroy']);
