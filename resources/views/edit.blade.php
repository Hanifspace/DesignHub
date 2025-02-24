<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Project - Hanifspace</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-2xl w-full mx-4">
            <!-- Project Submission Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Header with Gradient -->
                <div class="relative bg-gradient-to-br from-blue-600 to-indigo-900 px-8 pt-12 pb-20">
                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold text-white text-center">Edit Submission</h2>
                        <p class="text-blue-100 text-center mt-2">Tell us about your project</p>
                    </div>
                    <!-- Decorative Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'30\' height=\'30\' viewBox=\'0 0 30 30\' fill=\'none\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\' fill=\'rgba(255,255,255,0.4)\'/%3E%3C/svg%3E')"></div>
                    </div>
                </div>

                <!-- Submission Form -->
                <div class="relative -mt-12 px-8 pb-8">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <form method="POST" action="{{ route('design.update', $data->id) }}">
                            @csrf
                            @method('PUT')

                            <!-- Client Name -->
                            <div class="mb-6">
                                <label for="client_name" class="block text-sm font-medium text-gray-700 mb-2">Client Name</label>
                                <div class="relative">
                                    <input type="text" id="name" name="name" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder-gray-400"
                                        value="{{ $data->name }}" required>
                                </div>
                                @error('client_name')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Project Title -->
                            <div class="mb-6">
                                <label for="project_title" class="block text-sm font-medium text-gray-700 mb-2">Project Title</label>
                                <div class="relative">
                                    <input type="text" id="project_title" name="project_title" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder-gray-400"
                                        value="{{ $data->project_title }}" required>
                                </div>
                                @error('project_title')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-6">
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <div class="relative">
                                    <input type="text" id="phone_number" name="phone_number" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder-gray-400"
                                        value="{{ $data->phone_number }}" required>
                                </div>
                                @error('phone')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submission Date -->
                            <div class="mb-6">
                                <label for="submission_date" class="block text-sm font-medium text-gray-700 mb-2">Submission Date</label>
                                <div class="relative">
                                    <input type="date" id="date" name="date" 
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder-gray-400"
                                        value="{{ $data->date }}" required>
                                </div>
                                @error('submission_date')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Project Brief -->
                            <div class="mb-6">
                                <label for="brief" class="block text-sm font-medium text-gray-700 mb-2">Project Brief</label>
                                <div class="relative">
                                    <textarea id="brief" name="brief" rows="4"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder-gray-400"
                                        required>{{ $data->brief }}</textarea>
                                </div>
                                @error('brief')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-indigo-900 text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Update Project
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
