<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntakeController;

Route::post('/intakes', [IntakeController::class, 'store']);
