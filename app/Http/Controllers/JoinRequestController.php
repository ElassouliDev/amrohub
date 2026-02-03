<?php

namespace App\Http\Controllers;

use App\Models\JoinRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class JoinRequestController extends Controller
{
    public function __construct()
    {
        App::setLocale('ar');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('join-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!$request->ajax()) {
            return response()->json([
                'message' => 'Invalid request',
            ], 400);
        }
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:join_requests',
            'phone' => 'required|string|max:10',
            'gender' => 'required|in:male,female',
            'type' => 'required|in:student,teacher',
            'university' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'university_id' => 'required|string|max:50',
            //            'plan_id' => 'nullable|exists:plans,id',
        ]);
        $validated['plan_id'] = 1;


        JoinRequest::create($validated);
        return response()->json([
            'message' => 'تمّ تسجيل طلبك بنجاح، الرجاء التوجّه إلى مساحة العمل للاستفادة من الخدمة.',
        ], 201);
    }
}
