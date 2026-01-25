@extends('layout')

@section('content')
    <h2 class="text-xl font-bold mb-4">Edit Plan: {{ $plan->title }}</h2>
    <form action="{{ route('plans.update', $plan) }}" method="POST" class="bg-white p-6 rounded shadow max-w-lg">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" name="title" value="{{ $plan->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $plan->description }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Type</label>
            <select name="plan_type" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="student" {{ $plan->plan_type == 'student' ? 'selected' : '' }}>Student</option>
                <option value="academic" {{ $plan->plan_type == 'academic' ? 'selected' : '' }}>Academic</option>
                <option value="other" {{ $plan->plan_type == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Daily Limit (hours)</label>
                <input type="number" name="daily_limit" value="{{ $plan->daily_limit }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Weekly Limit (hours)</label>
                <input type="number" name="weekly_limit" value="{{ $plan->weekly_limit }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Monthly Limit (hours)</label>
                <input type="number" name="monthly_limit" value="{{ $plan->monthly_limit }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Total Hours</label>
                <input type="number" name="total_hours" value="{{ $plan->total_hours }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Update Plan
        </button>
    </form>
@endsection
