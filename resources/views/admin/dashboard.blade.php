@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto">

    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
        <p class="text-gray-500">Welcome, {{ auth()->user()->name }}</p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Manage Users -->
        <a href="/admin/users" 
           class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300">
           
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-700">Manage Users</h2>
                <span class="text-blue-500 text-2xl">👥</span>
            </div>

            <p class="text-gray-400 text-sm mt-2">
                View and manage all platform users
            </p>
        </a>

        <!-- Interviews -->
        <a href="/admin/interviews" 
           class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300">

            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-700">Interviews</h2>
                <span class="text-green-500 text-2xl">📅</span>
            </div>

            <p class="text-gray-400 text-sm mt-2">
                Monitor all interview sessions
            </p>
        </a>

        <!-- Mentors -->
        <a href="/admin/mentors" 
           class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300">

            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-700">Mentors</h2>
                <span class="text-purple-500 text-2xl">🎓</span>
            </div>

            <p class="text-gray-400 text-sm mt-2">
                View registered mentors
            </p>
        </a>

        <!-- Mentor Requests -->
        <a href="/admin/mentor-requests" 
           class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300">

            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-700">Mentor Requests</h2>
                <span class="text-red-500 text-2xl">📩</span>
            </div>

            <p class="text-gray-400 text-sm mt-2">
                Approve pending mentor applications
            </p>
        </a>

    </div>

</div>

@endsection