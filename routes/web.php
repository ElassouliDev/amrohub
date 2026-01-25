<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\JoinRequestController;
use App\Http\Controllers\UserPlanController;
use App\Http\Controllers\UsageLogController;

Route::view('/','home');

Route::view('/join-from','join-form');
Route::post('join-requests', [JoinRequestController::class,'store'])->name('join-requests.store');


// AmroHub Routes
//Route::resource('plans', PlanController::class);
//Route::resource('join-requests', JoinRequestController::class);
//Route::resource('user-plans', UserPlanController::class);
//Route::resource('usage-logs', UsageLogController::class);
//Route::post('usage-logs/start', [UsageLogController::class, 'startSession'])->name('usage-logs.start');
//Route::post('usage-logs/end', [UsageLogController::class, 'endSession'])->name('usage-logs.end');
