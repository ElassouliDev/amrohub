<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactRequestController;

Route::post('/contact-us', [ContactRequestController::class, 'store'])->name('api.contact-requests.store');
