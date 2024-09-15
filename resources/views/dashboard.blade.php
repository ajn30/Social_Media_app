<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Profile Header -->
                <div class="relative h-80 bg-gray-200">
                    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ auth()->user()->background_picture ? Storage::url(auth()->user()->background_picture) : asset('images/default-background.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 flex items-end">
                        <div class="relative -mb-16">
                            <img src="{{ auth()->user()->profile_picture ? Storage::url(auth()->user()->profile_picture) : asset('images/default-avatar.png') }}" alt="{{ auth()->user()->name }}" class="w-40 h-40 rounded-full border-4 border-white object-cover">
                        </div>
                        <div class="ml-6 text-white pb-4">
                            <h1 class="text-4xl font-bold">{{ auth()->user()->name }}</h1>
                            <p class="text-xl mt-2">{{ auth()->user()->bio ?? 'No bio yet.' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="p-6 pt-20">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Sidebar -->
                        <div class="md:col-span-1">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                                <h3 class="text-lg font-semibold mb-4">User Information</h3>
                                <ul class="space-y-2">
                                    <li><strong>Email:</strong> {{ auth()->user()->email }}</li>
                                    <li><strong>Joined:</strong> {{ auth()->user()->created_at->format('M d, Y') }}</li>
                                    <!-- Add more user information as needed -->
                                </ul>
                            </div>
                        </div>

                        <!-- Main Content -->
                        <div class="md:col-span-2 space-y-6">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                                <h3 class="text-lg font-semibold mb-4">Welcome to Your Dashboard</h3>
                                <p>This is where you can view and manage your account information, posts, and other activities.</p>
                            </div>

                            <!-- Placeholder for future content -->
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                                <h3 class="text-lg font-semibold mb-4">Recent Activity</h3>
                                <p class="text-gray-600">No recent activity to display.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
