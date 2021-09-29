<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('customers', [CustomersController::class, 'show']);
