<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arunika Kaltim - Temukan destinasi wisata terbaik di Kalimantan Timur">
    <title>@yield('title', 'Arunika Kaltim')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Iconify untuk icons modern -->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <!-- Custom Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .navbar-blur {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }

        .overlay-gradient {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 100%);
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-pattern {
            background-color: #667eea;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>

    @yield('styles')
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="navbar-blur fixed w-full top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                    <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform">
                        <span class="iconify text-white text-2xl" data-icon="mdi:island"></span>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold gradient-text">Arunika Kaltim</h1>
                        <p class="text-xs text-gray-500">Jelajahi Keindahan Wisata Kalimantan Timur</p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'text-purple-600 font-semibold' : 'text-gray-700' }} hover:text-purple-600 transition-colors flex items-center space-x-2">
                        <span class="iconify" data-icon="mdi:home"></span>
                        <span>Beranda</span>
                    </a>
                    <a href="{{ route('destinasi.index') }}" class="nav-link {{ request()->routeIs('destinasi.*') ? 'text-purple-600 font-semibold' : 'text-gray-700' }} hover:text-purple-600 transition-colors flex items-center space-x-2">
                        <span class="iconify" data-icon="mdi:map-marker"></span>
                        <span>Destinasi</span>
                    </a>
                    <a href="{{ route('galeri') }}" class="nav-link {{ request()->routeIs('galeri') ? 'text-purple-600 font-semibold' : 'text-gray-700' }} hover:text-purple-600 transition-colors flex items-center space-x-2">
                        <span class="iconify" data-icon="mdi:image-multiple"></span>
                        <span>Galeri</span>
                    </a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'text-purple-600 font-semibold' : 'text-gray-700' }} hover:text-purple-600 transition-colors flex items-center space-x-2">
                        <span class="iconify" data-icon="mdi:information"></span>
                        <span>Tentang</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-purple-600">
                    <span class="iconify text-3xl" data-icon="mdi:menu"></span>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'text-purple-600 font-semibold' : 'text-gray-700' }} hover:text-purple-600 transition-colors flex items-center space-x-2 py-2">
                        <span class="iconify" data-icon="mdi:home"></span>
                        <span>Beranda</span>
                    </a>
                    <a href="{{ route('destinasi.index') }}" class="nav-link {{ request()->routeIs('destinasi.*') ? 'text-purple-600 font-semibold' : 'text-gray-700' }} hover:text-purple-600 transition-colors flex items-center space-x-2 py-2">
                        <span class="iconify" data-icon="mdi:map-marker"></span>
                        <span>Destinasi</span>
                    </a>
                    <a href="{{ route('galeri') }}" class="nav-link {{ request()->routeIs('galeri') ? 'text-purple-600 font-semibold' : 'text-gray-700' }} hover:text-purple-600 transition-colors flex items-center space-x-2 py-2">
                        <span class="iconify" data-icon="mdi:image-multiple"></span>
                        <span>Galeri</span>
                    </a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'text-purple-600 font-semibold' : 'text-gray-700' }} hover:text-purple-600 transition-colors flex items-center space-x-2 py-2">
                        <span class="iconify" data-icon="mdi:information"></span>
                        <span>Tentang</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                            <span class="iconify text-white text-xl" data-icon="mdi:island"></span>
                        </div>
                        <h3 class="text-xl font-bold">Arunika Kaltim</h3>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Platform promosi wisata lokal terbaik untuk memperkenalkan keindahan destinasi wisata di Kalimantan Timur.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Menu Cepat</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors flex items-center space-x-2">
                                <span class="iconify" data-icon="mdi:chevron-right"></span>
                                <span>Beranda</span>
                            </a></li>
                        <li><a href="{{ route('destinasi.index') }}" class="hover:text-white transition-colors flex items-center space-x-2">
                                <span class="iconify" data-icon="mdi:chevron-right"></span>
                                <span>Destinasi Wisata</span>
                            </a></li>
                        <li><a href="{{ route('galeri') }}" class="hover:text-white transition-colors flex items-center space-x-2">
                                <span class="iconify" data-icon="mdi:chevron-right"></span>
                                <span>Galeri Foto</span>
                            </a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors flex items-center space-x-2">
                                <span class="iconify" data-icon="mdi:chevron-right"></span>
                                <span>Tentang Kami</span>
                            </a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start space-x-3">
                            <span class="iconify mt-1" data-icon="mdi:map-marker"></span>
                            <span class="text-sm">Jl. Wisata Kalimantan No. 456, Samarinda, Kalimantan Timur</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="iconify" data-icon="mdi:phone"></span>
                            <span class="text-sm">+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="iconify" data-icon="mdi:email"></span>
                            <span class="text-sm">info@wisatalokal.id</span>
                        </li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-purple-600 transition-colors">
                            <span class="iconify text-xl" data-icon="mdi:facebook"></span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-purple-600 transition-colors">
                            <span class="iconify text-xl" data-icon="mdi:instagram"></span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-purple-600 transition-colors">
                            <span class="iconify text-xl" data-icon="mdi:twitter"></span>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-purple-600 transition-colors">
                            <span class="iconify text-xl" data-icon="mdi:youtube"></span>
                        </a>
                    </div>
                    <div class="mt-6">
                        <p class="text-sm text-gray-400 mb-3">Download Aplikasi Kami</p>
                        <div class="flex flex-col space-y-2">
                            <a href="#" class="inline-flex items-center space-x-2 bg-gray-800 px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                                <span class="iconify text-2xl" data-icon="mdi:google-play"></span>
                                <div class="text-left">
                                    <p class="text-xs">Download di</p>
                                    <p class="text-sm font-semibold">Google Play</p>
                                </div>
                            </a>
                            <a href="#" class="inline-flex items-center space-x-2 bg-gray-800 px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                                <span class="iconify text-2xl" data-icon="mdi:apple"></span>
                                <div class="text-left">
                                    <p class="text-xs">Download di</p>
                                    <p class="text-sm font-semibold">App Store</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2024 Arunika Kaltim. Hak Cipta Dilindungi. Dibuat dengan penuh dedikasi untuk memajukan pariwisata Kalimantan Timur.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        });
    </script>

    @yield('scripts')
</body>

</html>