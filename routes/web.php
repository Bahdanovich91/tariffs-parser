<?php

use App\Http\Controllers\TariffController;
use Illuminate\Support\Facades\Route;

Route::get('/parse-tariffs', [TariffController::class, 'get']);
