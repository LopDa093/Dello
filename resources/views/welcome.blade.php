@extends('layout')

@section('title', 'Welcome to Trello Clone')

@section('content')
<div class="bg-white rounded shadow p-6 mt-4">
    <h1 class="text-4xl font-bold mb-4">Welcome to Trello Clone</h1>
    <p class="text-lg mb-4">Our application is a replica of Trello, where you can create and manage boards, tasks, and collaborate with others seamlessly.</p>
    <p class="mb-4">With our Trello Clone, you can:</p>
    <ul class="list-disc list-inside mb-4">
        <li>Create an account and log in securely.</li>
        <li>Create multiple boards for different projects.</li>
        <li>Add tasks to boards and organize them into lists.</li>
        <li>Assign tasks to different users and collaborate in real-time.</li>
        <li>Comment on tasks to provide updates and feedback.</li>
    </ul>
    <p class="mb-4">Get started now by signing up and creating your first board!</p>
    <a href="/register" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Sign Up</a>
    <a href="/login" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Log In</a>
</div>
@endsection

