@extends('layout')

@section('content')
    <h2 class="text-xl font-bold mb-4">My Usage Logs</h2>
    <div class="bg-white rounded shadow overflow-hidden">
        <ul class="divide-y divide-gray-200">
            @forelse($logs as $log)
                <li class="p-4 hover:bg-gray-50">
                    <div class="flex justify-between">
                        <span class="font-bold">{{ $log->plan->title ?? 'No Plan' }}</span>
                        <span class="text-sm text-gray-500">{{ $log->start_time->format('Y-m-d H:i') }}</span>
                    </div>
                    <p class="text-sm">Duration: {{ $log->duration ?? 0 }} minutes</p>
                </li>
            @empty
                <li class="p-4 text-center text-gray-500">No usage logs found.</li>
            @endforelse
        </ul>
    </div>
@endsection
