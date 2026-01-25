<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'plan_type' => 'required|in:student,academic,other',
            'daily_limit' => 'required|integer|min:0',
            'weekly_limit' => 'required|integer|min:0',
            'monthly_limit' => 'required|integer|min:0',
            'total_hours' => 'required|integer|min:0',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        Plan::create($validated);

        return redirect()->route('plans.index')->with('success', 'Plan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        return view('plans.show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        return view('plans.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'plan_type' => 'required|in:student,academic,other',
            'daily_limit' => 'required|integer|min:0',
            'weekly_limit' => 'required|integer|min:0',
            'monthly_limit' => 'required|integer|min:0',
            'total_hours' => 'required|integer|min:0',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $plan->update($validated);

        return redirect()->route('plans.index')->with('success', 'Plan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('plans.index')->with('success', 'Plan deleted successfully.');
    }
}
