<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinRequestController;
use App\Http\Controllers\UsageLogController;
use App\Models\UsageLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;

use function Symfony\Component\Clock\now;

Route::view('/', 'home');

Route::redirect("join-from", 'join');
Route::get('join', [JoinRequestController::class, 'index'])->name('join-requests.index');
Route::post('join', [JoinRequestController::class, 'store'])->name('join-requests.store');



Route::get('scan/{uuid}', function ($uuid) {
    $customerPlan = \App\Models\CustomerPlan::where('uuid', $uuid)->firstOrFail();



    if ($customerPlan->daily_limit > 0) {

        $usedMinutesToday = UsageLog::where('customer_plan_id', $customerPlan->id)
            ->whereDate('created_at', today())->sum('duration');

        if ($usedMinutesToday >= $customerPlan->daily_limit) {
            abort(403, 'لقد تجاوزت الحد الأقصى للدقائق المسموحة في اليوم');
        }
    }


    if ($customerPlan->weekly_limit > 0) {

        $usedMinutesWeek = UsageLog::where('customer_plan_id', $customerPlan->id)
            ->whereDate('created_at', '>=', today()->startOfWeek(Carbon::SATURDAY))->sum('duration');

        if ($usedMinutesWeek >= $customerPlan->weekly_limit) {
            abort(403, 'لقد تجاوزت الحد الأقصى للدقائق المسموحة في الأسبوع');
        }
    }




    $usageLog = UsageLog::where('customer_plan_id', $customerPlan->id)
        ->whereNull('end_time')
        ->whereDate('created_at', ">=", today())
        ->first();

    if ($usageLog) {

        $duration = abs(Carbon::now()->diffInMinutes($usageLog->start_time));
        $usageLog->update([
            'end_time' => now(),
            'duration' => $duration >= 20 ? 20 : $duration,
        ]);

        return view('scan', [
            'message' => 'تم تسجيل الخروج بنجاح',
            'is_login' => false,
        ]);
    }

    UsageLog::create([
        'customer_id' => $customerPlan->customer_id,
        'plan_id' => $customerPlan->plan_id,
        'customer_plan_id' => $customerPlan->id,
        'start_time' => now(),
        //  'end_date' => $customerPlan->end_date,
    ]);

    return view('scan', [
        'message' => 'تم تسجيل الدخول بنجاح',
        'is_login' => true,
    ]);
})->name('scan');


Route::get('test/store-approved', function () {


    Artisan::call("migrate");


    dd("Success");

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
