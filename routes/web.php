<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CIDADESDOBRASILController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cities', [CIDADESDOBRASILController::class, 'index']);