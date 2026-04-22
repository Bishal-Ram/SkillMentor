@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto">

    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">
            Candidate Dashboard
        </h1>

        <p class="text-gray-500">
            Welcome, {{ auth()->user()->name }}
        </p>
    </div>

    @php
        $request = \App\Models\MentorRequest::where('user_id', auth()->id())
                    ->where('status','pending')
                    ->first();
    @endphp

    <!-- Dashboard Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Browse Mentors -->
        <a href="/mentors"
           class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300">

            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-700">
                    Browse Mentors
                </h2>
                <span class="text-blue-500 text-2xl">🎯</span>
            </div>

            <p class="text-gray-400 text-sm mt-2">
                Explore available mentors
            </p>
        </a>


        <!-- My Interviews -->
        <a href="/my-interviews"
           class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300">

            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-700">
                    My Interviews
                </h2>
                <span class="text-green-500 text-2xl">📅</span>
            </div>

            <p class="text-gray-400 text-sm mt-2">
                View your scheduled interviews
            </p>
        </a>


        <!-- Performance Report -->
        <a href="/performance"
           class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300">

            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-700">
                    Performance Report
                </h2>
                <span class="text-purple-500 text-2xl">📊</span>
            </div>

            <p class="text-gray-400 text-sm mt-2">
                Track your interview performance
            </p>
        </a>


        <!-- Apply Mentor -->
        @if(auth()->user()->role == 'candidate' && !$request)

        <a href="/apply-mentor"
           class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition duration-300">

            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-gray-700">
                    Apply as Mentor
                </h2>
                <span class="text-red-500 text-2xl">🚀</span>
            </div>

            <p class="text-gray-400 text-sm mt-2">
                Become a mentor on SkillMentor
            </p>
        </a>

        @elseif($request)

        <div class="bg-yellow-100 p-6 rounded-xl shadow">
            <h2 class="text-lg font-semibold text-yellow-700">
                Mentor Request Pending
            </h2>

            <p class="text-sm text-yellow-600 mt-2">
                Your mentor application is under review.
            </p>
        </div>

        @endif

    </div>

</div>

@endsection