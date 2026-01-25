@extends('layout')

@section('content')
    <h2 class="text-xl font-bold mb-4">My Plans</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse($plans as $plan)
            <div class="bg-white p-6 rounded shadow border-l-4 border-blue-500">
                <h3 class="text-lg font-bold">{{ $plan->title }}</h3>
                <p class="text-gray-600 mb-2">{{ $plan->description }}</p>
                <div class="text-sm">
                    <p><strong>Status:</strong> {{ ucfirst($plan->pivot->status) }}</p>
                    <p><strong>Remaining Hours:</strong> {{ $plan->pivot->remaining_hours }} / {{ $plan->total_hours }}</p>
                    <p><strong>Valid Until:</strong> {{ $plan->pivot->end_date ? \Carbon\Carbon::parse($plan->pivot->end_date)->format('Y-m-d') : 'Unlimited' }}</p>
                </div>
            </div>
        @empty
            <p>You have no active plans.</p>
        @endforelse
    </div>
@endsection
