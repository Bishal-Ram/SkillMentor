<nav class="bg-gray-900 text-white px-6 py-4 shadow-md">
    
    <div class="flex justify-between items-center">

        <!-- Left Side -->
        <div class="text-2xl font-bold text-blue-400">
            SkillMentor
        </div>

        <!-- Right Side -->
        <div class="flex items-center gap-6">

            <!-- Role Badge -->
            <span class="bg-blue-500 px-3 py-1 rounded-full text-sm">
                {{ ucfirst(auth()->user()->role) }}
            </span>

            <!-- User Name -->
            <span class="text-gray-300">
                {{ auth()->user()->name }}
            </span>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg transition">
                    Logout
                </button>
            </form>

        </div>

    </div>
</nav>