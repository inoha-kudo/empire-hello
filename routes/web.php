<?php

declare(strict_types=1);

use Empire\Hello\Http\Controllers\HelloWebController;
use Illuminate\Support\Facades\Route;

Route::get('hello', HelloWebController::class)->name('hello');
