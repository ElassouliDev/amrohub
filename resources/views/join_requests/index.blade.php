@extends('layout')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Join Requests</h2>
    </div>

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Plan</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($joinRequests as $request)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $request->name }}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $request->email }}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $request->plan->title ?? 'N/A' }}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <span class="relative inline-block px-3 py-1 font-semibold text-gray-900 leading-tight">
                                <span aria-hidden class="absolute inset-0 opacity-50 rounded-full {{ $request->status == 'pending' ? 'bg-yellow-200' : ($request->status == 'approved' ? 'bg-green-200' : 'bg-red-200') }}"></span>
                                <span class="relative">{{ ucfirst($request->status) }}</span>
                            </span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm flex space-x-2">
                            @if($request->status == 'pending')
                                <form action="{{ route('join-requests.update', $request) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="approved">
                                    <button type="submit" class="text-green-600 hover:text-green-900">Approve</button>
                                </form>
                                <form action="{{ route('join-requests.update', $request) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="rejected">
                                    <button type="submit" class="text-red-600 hover:text-red-900">Reject</button>
                                </form>
                            @endif
                            <form action="{{ route('join-requests.destroy', $request) }}" method="POST" onsubmit="return confirm('Delete request?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-gray-600 hover:text-gray-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
