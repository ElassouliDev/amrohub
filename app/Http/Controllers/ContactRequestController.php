<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use App\Http\Requests\StoreContactRequestRequest;
use App\Http\Requests\UpdateContactRequestRequest;

class ContactRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequestRequest $request)
    {
        $contactRequest = ContactRequest::create($request->validated());

        return response()->json([
            'message' => 'Contact request submitted successfully.',
            'data' => $contactRequest
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactRequest $contactRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactRequest $contactRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequestRequest $request, ContactRequest $contactRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactRequest $contactRequest)
    {
        //
    }
}
