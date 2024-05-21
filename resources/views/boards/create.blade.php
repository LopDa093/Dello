@extends('layout')

@section('title', 'Create Board')

@section('content')
<div class="bg-white rounded shadow p-6 mt-4">
    <h1 class="text-2xl font-bold mb-6">Create New Board</h1>
    <form method="POST" action="/boards">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Board Title</label>
            <input type="text" id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
        {{-- <a href="{{ route('boards.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a> --}}
    </form>
</div>
@endsection
