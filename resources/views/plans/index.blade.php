@extends('layout')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Available Plans</h2>
        <a href="{{ route('plans.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create New Plan</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($plans as $plan)
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">{{ $plan->title }}</h3>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ ucfirst($plan->plan_type) }}</span>
                <p class="text-gray-700 text-base mb-4">{{ $plan->description }}</p>
                <div class="text-sm text-gray-600">
                    <p>Total Hours: {{ $plan->total_hours }}</p>
                    <p>Monthly Limit: {{ $plan->monthly_limit }}h</p>
                </div>
                <div class="mt-4 flex space-x-2">
                     <a href="{{ route('plans.edit', $plan) }}" class="text-yellow-500 hover:underline">Edit</a>
                     <form action="{{ route('plans.destroy', $plan) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                     </form>
                </div>
                 <!-- Join Request Form -->
                 <div class="mt-4 border-t pt-4">
                    <h4 class="font-bold mb-2">Request this Plan</h4>
                    <form action="{{ route('join-requests.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                        <input type="text" name="name" placeholder="Name" class="w-full border p-1 mb-2 rounded" required>
                        <input type="email" name="email" placeholder="Email" class="w-full border p-1 mb-2 rounded" required>
                        <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded w-full hover:bg-green-600">Join</button>
                    </form>
                 </div>
            </div>
        @endforeach
    </div>
@endsection
