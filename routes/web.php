<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

Route::resource('/user', DetailController::class);
