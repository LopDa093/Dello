@extends('layout')

@section('title', 'My Boards')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">My Boards</h1>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Logout
        </button>
    </form>
</div>

<div class="mb-6">
    <a href="/boards/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Create New Board
    </a>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @foreach ($boards as $board)
    <div class="bg-white rounded shadow p-4 flex flex-col justify-between">
        <h2 class="text-xl font-bold mb-2">{{ $board->title }}</h2>
        <div class="mt-2">
            <a href="/boards/{{$board->id}}/edit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
            <form action="/boards/{{$board->id}}/delete" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Delete
                </button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
