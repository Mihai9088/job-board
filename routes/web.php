<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

Route::resource('jobs', WorkController::class)->only(['index']);