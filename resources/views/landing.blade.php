<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>landing</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <style>
        html{
            scroll-behavior: smooth; 
        }
    </style>

    <nav class="fixed top-0 left-0 right-0 bg-white/90 backdrop-blur-sm shadow-sm z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="#hero" class="text-2xl font-bold text-blue-600">Hanifspace</a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="#hero" class="text-gray-700 hover:text-blue-600 transition-colors">Home</a>
                <a href="#stats" class="text-gray-700 hover:text-blue-600 transition-colors">Stats</a>
                <a href="#designs" class="text-gray-700 hover:text-blue-600 transition-colors">Designs</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
                <a href="{{route('login')}}" class="text-gray-700 hover:text-blue-600 transition-colors">Login</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2 rounded-lg hover:bg-gray-100" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-4">
                <a href="#hero" class="text-gray-700 hover:text-blue-600 transition-colors">Home</a>
                <a href="#stats" class="text-gray-700 hover:text-blue-600 transition-colors">Stats</a>
                <a href="#designs" class="text-gray-700 hover:text-blue-600 transition-colors">Designs</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 transition-colors">Contact</a>
                <a href="{{route('login')}}" class="text-gray-700 hover:text-blue-600 transition-colors">Login</a>
            </div>
        </div>
    </div>
</nav>

    <!-- Hero Section with Gradient & Pattern -->
<div class="relative overflow-hidden text-white bg-gradient-to-br from-blue-600 to-indigo-900" id="hero">

            <!-- Content -->
            <div class="max-w-7xl mx-auto px-4 py-24 relative z-10">
                <div class="text-center">
                    <h2 class="text-5xl font-extrabold mb-6 leading-tight">Transform Your Space<br/>With Hanifspace</h2>
                    <p class="mt-4 text-xl text-blue-100 max-w-2xl mx-auto">We blend innovation with aesthetics to create spaces that inspire. Your vision, our expertise – together we create extraordinary environments.</p>
                    <div class="mt-10 flex justify-center gap-4">
                        <a href="{{route('login')}}">
                            <button class="bg-white text-blue-900 px-8 py-3 rounded-lg hover:bg-blue-50 transition-colors font-semibold">
                                Get Started
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

<!-- Stats Section -->
<div class="bg-white py-16" id="stats">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition">
                <svg class="w-12 h-12 text-blue-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m2 0h1m-3 4h-1m5-4v4m-2-4h-1m3 0h1M12 3L2 9l10 6 10-6-10-6zM12 12l8-4.5M12 12v9" />
                </svg>
                <p class="text-4xl font-bold text-blue-600 mt-4">100+</p>
                <p class="text-gray-700 mt-2">Project Selesai</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition">
                <svg class="w-12 h-12 text-blue-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m0 18h12m-6-6h6" />
                </svg>
                <p class="text-4xl font-bold text-blue-600 mt-4">50+</p>
                <p class="text-gray-700 mt-2">Klien Puas</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition">
                <svg class="w-12 h-12 text-blue-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 14l-4-4m8 0l-4 4" />
                </svg>
                <p class="text-4xl font-bold text-blue-600 mt-4">10+</p>
                <p class="text-gray-700 mt-2">Negara Terjangkau</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-lg transition">
                <svg class="w-12 h-12 text-blue-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8l3 6H9l3-6zm-4 9h8m-8 2h8" />
                </svg>
                <p class="text-4xl font-bold text-blue-600 mt-4">5</p>
                <p class="text-gray-700 mt-2">Penghargaan</p>
            </div>
        </div>
    </div>
</div>



<!-- Design Portfolio Section -->
  <div class="bg-gray-50 py-16" id="designs">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold text-gray-900" id="1">Featured Designs</h3>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Explore our collection of transformative spaces that showcase our commitment to excellence in design and functionality.</p>
            </div>
            <div class="relative">
                <div class="flex overflow-x-auto space-x-6 pb-6 snap-x scrollbar-hide">
                    <!-- Simplified Design Cards -->
                    <div class="flex-none w-80 snap-center">
                        <div class="relative overflow-hidden rounded-xl group">
                            <img src="/asset/saham.png" alt="Modern Office" class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <h4 class="text-2xl font-semibold">Feed Design</h4>
                                    <p class="mt-2 text-gray-200">Simple Feed instagram Design</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-80 snap-center">
                        <div class="relative overflow-hidden rounded-xl group">
                            <img src="/asset/rumah.png" alt="Urban Apartment" class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <h4 class="text-2xl font-semibold">Commercial Design</h4>
                                    <p class="mt-2 text-gray-200">Commercial Design for Prootion</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-80 snap-center">
                        <div class="relative overflow-hidden rounded-xl group">
                            <img src="/asset/olahraga.png" alt="Restaurant Interior" class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <h4 class="text-2xl font-semibold">Education Design</h4>
                                    <p class="mt-2 text-gray-200">Design for Education</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-80 snap-center">
                        <div class="relative overflow-hidden rounded-xl group">
                            <img src="/asset/investasi.png" alt="Luxury Villa" class="w-full h-96 object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-black/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 text-white">
                                    <h4 class="text-2xl font-semibold">Feed Design</h4>
                                    <p class="mt-2 text-gray-200">Feed instagram Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Footer Section -->
    <footer class="bg-gray-900 text-white" id="contact">
        <div class="max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <h4 class="text-xl font-bold">Hanifspace</h4>
                    <p class="text-gray-400">Transforming spaces into extraordinary environments through innovative design.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/hanifspace/" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Portfolio</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>505 Design street</li>
                        <li>Creative City, CC 12345</li>
                        <li>luthfihanifm@gmail.com</li>
                        <li>+62 895 3834 66012</li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for updates and insights.</p>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Hanifspace. All rights reserved.</p>
            </div>
        </div>
    </footer>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            })
        </script>
        
    @endif
</body>
</html>