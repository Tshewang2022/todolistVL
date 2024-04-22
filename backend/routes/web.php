<?php

use Illuminate\Support\Facades\Route;
use App\Http\InvoiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{pathMatch}', function(){
    return view('welcome');
})->where('pathMatch', ".*");


Route::get('/all_voices', [InvoiceController::class, 'all_voices']);