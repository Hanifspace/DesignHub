<!DOCTYPE html>
<html lang="en">
<!-- Head section remains exactly the same -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Client Projects</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation remains exactly the same -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <form class="flex items-center" action="{{route('logout')}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-2xl font-medium text-blue-600 hover:text-blue-700 transition-colors">Logout</button>
                </form>
                <div class="flex items-center">
                    <span class="text-gray-700 font-bold text-2xl">{{auth()->user()->name}}</span>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-8">
        <!-- Welcome section remains exactly the same -->
        <div class="bg-gradient-to-br from-blue-600 to-indigo-900 rounded-3xl p-8 text-white mb-8">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-bold mb-4">Welcome back, {{auth()->user()->name}} 👋</h1>
                <p class="text-blue-100 text-lg">Manage your client projects and submissions here.</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Client Projects</h2>
            </div>
            
            <div class="overflow-x-auto rounded-xl border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Client Name</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Project Title</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Phone Number</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Submission Date</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Brief</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">Upload Image</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($Design as $print)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{$print->name}}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{$print->project_title}}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{$print->phone_number}}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{$print->date}}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                <div class="max-h-24 overflow-y-auto prose prose-sm">
                                    {{$print->brief}}
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('admin.updateStatus', $print->id) }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <select name="status" 
                                            onchange="this.form.submit()"
                                            class="text-xs border-0 rounded cursor-pointer
                                                {{ $print->status == 'Pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
                                                {{ $print->status == 'Approved' ? 'bg-blue-100 text-blue-700' : '' }}
                                                {{ $print->status == 'Rejected' ? 'bg-green-100 text-green-700' : '' }}">
                                        <option value="Pending" 
                                                {{ $print->status == 'Pending' ? 'selected' : '' }}
                                                class="">
                                            Waiting
                                        </option>
                                        <option value="Approved" 
                                                {{ $print->status == 'Approved' ? 'selected' : '' }}
                                                class="">
                                            Process
                                        </option>
                                        <option value="Rejected" 
                                                {{ $print->status == 'Rejected' ? 'selected' : '' }}
                                                class="">
                                            Finish
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('admin.upload', $print->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex flex-col space-y-2">
                                        <div class="flex items-center">
                                            <input type="file" name="image" accept="image/*" class="hidden" id="fileInput{{$print->id}}" onchange="updateFileName({{$print->id}})">
                                            <label for="fileInput{{$print->id}}" class="bg-blue-600 text-white px-3 py-1 rounded text-xs cursor-pointer hover:bg-blue-700">Choose File</label>
                                            <button type="submit" class="bg-green-600 text-white px-3 py-1 rounded text-xs ml-2 hover:bg-green-700">Upload Image</button>
                                        </div>
                                        <div class="text-xs text-gray-500" id="fileName{{$print->id}}">
                                            {{ $print->image ?? 'No file chosen' }}
                                        </div>
                                            @if($print->image)
                                                <a href="{{ asset('uploads/' . $print->image) . '?' . time() }}" 
                                                target="_blank" 
                                                class="text-xs text-blue-600 hover:underline">
                                                    View Uploaded Image
                                                </a>
                                            @endif
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        function updateFileName(id) {
            const input = document.getElementById('fileInput' + id);
            const fileName = document.getElementById('fileName' + id);
            fileName.textContent = input.files.length > 0 ? input.files[0].name : 'No file chosen';
        }
    </script>
</body>
</html>