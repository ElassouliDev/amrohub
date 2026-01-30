<?php

namespace App\Http\Controllers;

use App\Models\JoinRequest;
use Illuminate\Http\Request;

class JoinRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joinRequests = JoinRequest::with('plan')->latest()->get();
        return view('join_requests.index', compact('joinRequests'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        $validated['plan_id'] =1;


        JoinRequest::create($validated);

        return redirect()->back()->with('success', 'تمّ تسجيل طلبك بنجاح، الرجاء التوجّه إلى مساحة العمل للاستفادة من الخدمة.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JoinRequest $joinRequest)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $joinRequest->update($validated);

        // TODO: If status is approved, logic to create User and UserPlan could be added here.

        return redirect()->route('join-requests.index')->with('success', 'Request updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JoinRequest $joinRequest)
    {
        $joinRequest->delete();
        return redirect()->route('join-requests.index')->with('success', 'Request deleted successfully.');
    }
}
