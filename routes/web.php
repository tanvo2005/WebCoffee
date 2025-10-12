<?php

use App\Http\Controllers\webCoffeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[webCoffeController::class , 'index']);