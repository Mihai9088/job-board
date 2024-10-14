<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

Route::get('', fn() => to_route('jobs.index'));

Route::resource('jobs', WorkController::class)->only(['index' , 'show']);
