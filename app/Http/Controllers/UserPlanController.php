<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Assuming Auth is used
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        $plans = $user->plans;

        return view('user_plans.index', compact('plans'));
    }
}
