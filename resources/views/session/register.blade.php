<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full mx-4">
            <!-- Registration Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Header with Gradient -->
                <div class="relative bg-gradient-to-br from-blue-600 to-indigo-900 px-8 pt-12 pb-20">
                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold text-white text-center">Sign up</h2>
                        <p class="text-blue-100 text-center mt-2">Create your account</p>
                    </div>
                    <!-- Decorative Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'30\' height=\'30\' viewBox=\'0 0 30 30\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\' fill=\'rgba(255,255,255,0.4)\'/%3E%3C/svg%3E')"></div>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="relative -mt-12 px-8 pb-8">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <!-- Error Messages -->
                        @if ($errors->any())
                            <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Success Message -->
                        @if(session('success'))
                            <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Username Input -->
                            <div class="mb-6">
                                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                                <div class="relative">
                                    <input type="text" id="username" name="name" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder-gray-400"
                                        placeholder="Choose a username"
                                        value="{{ old('name') }}" required>
                                </div>
                                @error('name')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email Input -->
                            <div class="mb-6">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder-gray-400"
                                        placeholder="Enter your email"
                                        value="{{ old('email') }}" required>
                                </div>
                                @error('email')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="mb-6">
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                                <div class="relative">
                                    <input type="password" id="password" name="password" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder-gray-400"
                                        placeholder="Create a password"
                                        required>
                                </div>
                                @error('password')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-900 text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Create Account
                            </button>

                            <!-- Sign In Link -->
                            <p class="text-center mt-6 text-gray-600">
                                Already have an account? 
                                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-500 font-medium">Sign in</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
