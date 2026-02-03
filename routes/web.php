<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinRequestController;
use App\Http\Controllers\UsageLogController;

Route::view('/','home');

Route::redirect("join-from",'join');
Route::view('/join','join-form');
Route::post('join', [JoinRequestController::class,'store'])->name('join-requests.store');




Route::get('test/store-approved',function (){

//    $records= \App\Models\JoinRequest::where('status','approved')->get();
//
//    foreach($records as $record){
//
//        if ($record->status === 'approved') {
//            $customer = Customer::firstOrCreate(
//                [
//                    'email' => $record->email,
//                ],
//                [
//                    'name' => $record->name,
//                    'phone' => $record->phone,
//                    'gender' => $record->gender,
//                    'university' => $record->university,
//                    'specialization' => $record->specialization,
//                    'university_id' => $record->university_id,
//                    'user_type' => $record->type?:"student",
//                    'account_status' => true,
//                    'id_image_path' => $record->id_image_path,
//                    'plan_id' => $record->plan_id,
//                ]
//            );
//
//            if ($customer->wasRecentlyCreated) {
//                $customer->customerPlans()->create([
//                    'plan_id' => $record->plan_id,
//                    'start_date' => $record->start_date,
//                    'end_date' => $record->end_date,
//                    'status' => 'active',
//                    "uuid" => "{$record->plan_id}_{$record->id}_" . now()->getTimestamp(),
//                ]);
//            }
//
//
//
//            $record->delete();
//        }
//
//        }

});




// Route::prefix('dashboard')->group(function () {
//     Route::resource('join-requests', \App\Http\Controllers\Dashboard\JoinRequestController::class)->only('index', 'show' ,'edit','update','destroy');
//     Route::put('join-requests/{joinRequest}/update-status', [\App\Http\Controllers\Dashboard\JoinRequestController::class,'updateStatus'])->name('join-requests.update-status' );
//     Route::resource('plans', PlanController::class);

//     Route::resource('user-plans', UserPlanController::class);
//     Route::resource('usage-logs', UsageLogController::class);
//     Route::post('usage-logs/start', [UsageLogController::class, 'startSession'])->name('usage-logs.start');
//     Route::post('usage-logs/end', [UsageLogController::class, 'endSession'])->name('usage-logs.end');

// });

