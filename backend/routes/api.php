<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\InvoiceController;



Route::get('/user', function (Request $request){
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('/all_voices', [InvoiceController::class, 'all_voices' ]);