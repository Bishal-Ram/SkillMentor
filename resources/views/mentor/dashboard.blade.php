@extends('layouts.app')

@section('content')

<style>
    /* Page Background */
    .dashboard-container {
        background-color: #87b9eb; /* Soft blue-grey */
        min-height: 100vh;
        padding: 40px 20px;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    }

    .dashboard-content {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* Typography */
    .dashboard-title {
        color: #272c1a; /* Deep charcoal */
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .dashboard-subtitle {
        color: #4a5568;
        font-size: 1.1rem;
        margin-bottom: 40px;
    }

    .username {
        color: #4c51bf; /* Indigo accent */
        font-weight: bold;
    }

    /* Grid and Cards */
    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }

    .dash-card {
        background: #ffffff;
        padding: 30px;
        border-radius: 15px;
        text-decoration: none;
        display: block;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .dash-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
        border-color: #cbd5e0;
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .card-header h2 {
        margin: 0;
        font-size: 1.5rem;
        color: #2d3748;
    }

    .card-icon {
        font-size: 2rem;
    }

    .card-desc {
        color: #718096;
        font-size: 1rem;
        line-height: 1.5;
        margin: 0;
    }
</style>

<div class="dashboard-container">
    <div class="dashboard-content">
        
        <div class="header-section">
            <h1 class="dashboard-title">Mentor Dashboard</h1>
            <p class="dashboard-subtitle">
                Welcome, <span class="username">{{ auth()->user()->name }}</span>
            </p>
        </div>

        <div class="card-grid">

            <a href="/mentor/create-slot" class="dash-card">
                <div class="card-header">
                    <h2>Create Interview Slots</h2>
                    <span class="card-icon">🕒</span>
                </div>
                <p class="card-desc">
                    Create available interview slots for candidates to book.
                </p>
            </a>

            <a href="/mentor/interviews" class="dash-card">
                <div class="card-header">
                    <h2>My Interviews</h2>
                    <span class="card-icon">📅</span>
                </div>
                <p class="card-desc">
                    Manage scheduled interviews and provide feedback.
                </p>
            </a>

        </div>
    </div>
</div>

@endsection