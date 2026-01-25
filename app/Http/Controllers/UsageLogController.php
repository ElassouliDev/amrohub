<?php

namespace App\Http\Controllers;

use App\Models\UsageLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UsageLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
             $logs = Auth::user()->usageLogs()->latest()->get();
             return view('usage_logs.index', compact('logs'));
        }
        return redirect()->route('login');
    }

    public function startSession(Request $request)
    {
        $request->validate([
            'plan_id' => 'nullable|exists:plans,id',
        ]);

        $user = Auth::user();
        
        // Logic to check if user has active plan could be added here

        $log = UsageLog::create([
            'user_id' => $user->id,
            'plan_id' => $request->plan_id,
            'start_time' => Carbon::now(),
        ]);

        return response()->json(['message' => 'Session started', 'log_id' => $log->id]);
    }

    public function endSession(Request $request)
    {
        $request->validate([
            'log_id' => 'required|exists:usage_logs,id',
        ]);

        $log = UsageLog::find($request->log_id);

        if ($log->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $endTime = Carbon::now();
        $startTime = Carbon::parse($log->start_time);
        $duration = $startTime->diffInMinutes($endTime);

        $log->update([
            'end_time' => $endTime,
            'duration' => $duration,
        ]);

        // Logic to update user_plan used_hours could be added here

        return response()->json(['message' => 'Session ended', 'duration' => $duration]);
    }
}
