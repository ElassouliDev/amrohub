<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\JoinRequestController;
use App\Http\Controllers\UserPlanController;
use App\Http\Controllers\UsageLogController;

Route::view('/','home');

Route::view('/join-from','join-form');
Route::post('join-requests', [JoinRequestController::class,'store'])->name('join-requests.store');





// Route::prefix('dashboard')->group(function () {
//     Route::resource('join-requests', \App\Http\Controllers\Dashboard\JoinRequestController::class)->only('index', 'show' ,'edit','update','destroy');
//     Route::put('join-requests/{joinRequest}/update-status', [\App\Http\Controllers\Dashboard\JoinRequestController::class,'updateStatus'])->name('join-requests.update-status' );
//     Route::resource('plans', PlanController::class);

//     Route::resource('user-plans', UserPlanController::class);
//     Route::resource('usage-logs', UsageLogController::class);
//     Route::post('usage-logs/start', [UsageLogController::class, 'startSession'])->name('usage-logs.start');
//     Route::post('usage-logs/end', [UsageLogController::class, 'endSession'])->name('usage-logs.end');

// });

