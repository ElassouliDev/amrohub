@extends('layout')

@section('content')
    <h2 class="text-xl font-bold mb-4">Edit Request : {{ $item->id }}</h2>
    @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50  " role="alert">
            <span class="font-medium">نجاح!</span> {{session('success')}}
        </div>

    @endif

    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-white-800 rounded-lg bg-red-50 dark:bg-red-800 dark:text-red-400"
             role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('join-requests.update', $item) }}" method="POST" class="bg-white p-6 rounded shadow max-w-lg">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">name</label>
            <input type="text" name="name"    value="{{ $item->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
            <input type="text" name="phone"    value="{{ $item->phone }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">'Email</label>
            <input type="email" name="email"    value="{{ $item->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">University</label>
            <input type="text" name="university"    value="{{ $item->university }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Specialization</label>
            <input type="text" name="specialization"    value="{{ $item->specialization }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Job Id/ Student Id</label>
            <input type="text" name="university_id"    value="{{ $item->university_id }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Gender</label>
            <select name="gender" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="male" {{ $item->gender === 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $item->gender === 'female' ? 'selected' : '' }}>Female</option>
             </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Type</label>
            <select name="type" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                 <option @selected(old('type' ,  $item->type ) === "student") value="student">طالب جامعي</option>
                <option @selected(old('type' ,  $item->type) === "teacher")  value="teacher">أكاديمي / محاضر</option>
             </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Update
        </button>
    </form>
@endsection
