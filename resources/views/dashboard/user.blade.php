<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hanifspace</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <form class="flex items-center" action="{{route('logout')}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-2xl font-medium text-blue-600">Logout</a>
                </form>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button class="flex items-center space-x-2">
                            <span class="text-gray-700 font-bold text-2xl">{{auth()->user()->name}}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-gradient-to-br from-blue-600 to-indigo-900 rounded-3xl p-8 text-white mb-8">
            <div class="max-w-3xl">
                <h1 class="text-3xl font-bold mb-4">Welcome back, {{auth()->user()->name}}👋</h1>
                <p class="text-blue-100 mb-8">Ready to create your next amazing design? Let's get started!</p>
                <div class="flex space-x-4">
                    <a href="{{route('input')}}">
                        <button class="bg-white text-blue-900 px-6 py-3 rounded-lg hover:bg-blue-50 transition-colors font-semibold flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            New Design
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 10.5V4.75M15 10.5V4.75M6.75 19.25h10.5M6.75 4.75h10.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25H6.75a2.25 2.25 0 01-2.25-2.25V7a2.25 2.25 0 012.25-2.25z"/>
                    </svg>
                    Recent Projects
                </h2>
            </div>

            <div class="overflow-x-auto rounded-t-lg">
                <table class="min-w-full divide-y divide-gray-200 rounded">
                    <thead class="bg-blue-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Project</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Phone Number</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Submission Date</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Brief</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($Design as $print)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$print->name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{$print->project_title}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{$print->phone_number}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{$print->date}}</td>
                                <td class="px-6 py-4 whitespace-normal text-sm text-gray-600 break-words">
                                    <div class="max-h-24 overflow-y-auto break-words" style="word-break: break-word; overflow-wrap: break-word;">
                                        {{$print->brief}}
                                    </div>
                                </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 text-xs font-medium rounded-full 
                                            {{ $print->status == 'Pending' ? 'bg-yellow-100 text-yellow-800' : 
                                            ($print->status == 'Approved' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800') }}">
                                            {{ $print->status == 'Pending' ? 'Waiting' : ($print->status == 'Approved' ? 'Process' : 'Finish') }}
                                        </span>
                                        @if ($print->image)
                                            <br>
                                            <a href="{{ asset('uploads/' . $print->image) }}" target="_blank" class="text-blue-600 hover:underline">
                                                Lihat foto
                                            </a>
                                        @endif
                                    </td>
                            <td class="px-6 py-4 whitespace-nowrap flex space-x-3">
                                <a href="{{url ('design/'. $print->id .'/edit')}}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                <form action="{{url('design/'. $print->id)}}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this item?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
