@extends('layouts.app')

@section('title', 'Beranda - Arunika Kaltim')

@section('styles')
<style>
    /* Parallax Effect */
    .parallax-bg {
        transition: transform 0.5s ease-out;
    }

    /* Floating Animation */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .float-animation {
        animation: float 6s ease-in-out infinite;
    }

    /* Typing Effect */
    .typed-cursor {
        animation: blink 1s infinite;
    }

    @keyframes blink {

        0%,
        50% {
            opacity: 1;
        }

        51%,
        100% {
            opacity: 0;
        }
    }

    /* Ripple Effect */
    .ripple {
        position: relative;
        overflow: hidden;
    }

    .ripple:before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .ripple:hover:before {
        width: 300px;
        height: 300px;
    }

    /* Particle Background */
    #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 0;
    }

    /* Glowing Effect */
    .glow {
        box-shadow: 0 0 20px rgba(102, 126, 234, 0.5);
        transition: box-shadow 0.3s ease;
    }

    .glow:hover {
        box-shadow: 0 0 30px rgba(102, 126, 234, 0.8);
    }

    /* Image Reveal */
    .image-reveal {
        overflow: hidden;
        position: relative;
    }

    .image-reveal img {
        transition: transform 0.6s ease;
    }

    .image-reveal:hover img {
        transform: scale(1.1) rotate(2deg);
    }

    /* Counter Animation */
    .counter {
        font-variant-numeric: tabular-nums;
    }

    /* Gradient Animation */
    @keyframes gradient-shift {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .animated-gradient {
        background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #4facfe);
        background-size: 400% 400%;
        animation: gradient-shift 15s ease infinite;
    }
</style>
@endsection

@section('content')
<!-- Hero Section with Enhanced Effects -->
<section class="animated-gradient min-h-screen flex items-center relative overflow-hidden">
    <!-- Particles Background -->
    <div id="particles-js"></div>

    <!-- Animated Decorative elements -->
    <div class="absolute top-20 right-10 w-72 h-72 bg-white opacity-10 rounded-full blur-3xl float-animation"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-purple-300 opacity-10 rounded-full blur-3xl float-animation" style="animation-delay: 1s;"></div>
    <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-yellow-300 opacity-5 rounded-full blur-3xl float-animation" style="animation-delay: 2s;"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="text-white space-y-6 animate-fade-in">
                <div class="inline-block glow">
                    <span class="bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">
                        <span class="iconify mr-2" data-icon="mdi:trending-up"></span>
                        Wisata Kalimantan Timur Terpercaya
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                    <span id="typed-text">Jelajahi Keindahan</span>
                    <span class="block text-yellow-300 mt-2">Kalimantan Timur</span>
                </h1>
                <p class="text-xl text-gray-100 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                    Temukan destinasi wisata lokal terbaik di Kalimantan Timur dengan pemandangan menakjubkan, budaya kaya, dan pengalaman tak terlupakan di setiap sudut bumi Etam.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4" data-aos="fade-up" data-aos-delay="400">
                    <a href="{{ route('destinasi.index') }}" class="ripple inline-flex items-center justify-center space-x-2 bg-white text-purple-600 px-8 py-4 rounded-xl font-semibold hover:bg-yellow-300 hover:text-purple-700 transform hover:scale-105 transition-all shadow-xl">
                        <span>Jelajahi Destinasi</span>
                        <span class="iconify" data-icon="mdi:arrow-right"></span>
                    </a>
                    <a href="{{ route('galeri') }}" class="ripple inline-flex items-center justify-center space-x-2 bg-transparent border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-purple-600 transform hover:scale-105 transition-all">
                        <span class="iconify" data-icon="mdi:image-multiple"></span>
                        <span>Lihat Galeri</span>
                    </a>
                </div>

                <!-- Animated Statistics -->
                <div class="grid grid-cols-3 gap-6 pt-8" data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center transform hover:scale-110 transition-transform">
                        <div class="text-4xl font-bold text-yellow-300 counter" data-target="50">0</div>
                        <p class="text-sm text-gray-200 mt-1">Destinasi Wisata</p>
                    </div>
                    <div class="text-center transform hover:scale-110 transition-transform">
                        <div class="text-4xl font-bold text-yellow-300 counter" data-target="1000">0</div>
                        <p class="text-sm text-gray-200 mt-1">Pengunjung</p>
                    </div>
                    <div class="text-center transform hover:scale-110 transition-transform">
                        <div class="text-4xl font-bold text-yellow-300 counter" data-target="4.8">0</div>
                        <p class="text-sm text-gray-200 mt-1">Rating Rata-rata</p>
                    </div>
                </div>
            </div>

            <!-- Right Content - Interactive Image Grid -->
            <div class="hidden lg:grid grid-cols-2 gap-4 animate-fade-in">
                <div class="space-y-4">
                    <div class="image-reveal relative overflow-hidden rounded-2xl shadow-2xl transform hover:scale-105 transition-transform cursor-pointer" data-aos="fade-left" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400&h=300&fit=crop" alt="Wisata 1" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white font-bold text-lg">Pantai Eksotis</h3>
                            <p class="text-white text-sm opacity-80">Keindahan yang memukau</p>
                        </div>
                    </div>
                    <div class="image-reveal relative overflow-hidden rounded-2xl shadow-2xl transform hover:scale-105 transition-transform cursor-pointer" data-aos="fade-left" data-aos-delay="400">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=400&fit=crop" alt="Wisata 2" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white font-bold text-lg">Gunung Menawan</h3>
                            <p class="text-white text-sm opacity-80">Petualangan tak terlupakan</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4 pt-12">
                    <div class="image-reveal relative overflow-hidden rounded-2xl shadow-2xl transform hover:scale-105 transition-transform cursor-pointer" data-aos="fade-left" data-aos-delay="600">
                        <img src="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?w=400&h=400&fit=crop" alt="Wisata 3" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white font-bold text-lg">Air Terjun Cantik</h3>
                            <p class="text-white text-sm opacity-80">Kesegaran alam</p>
                        </div>
                    </div>
                    <div class="image-reveal relative overflow-hidden rounded-2xl shadow-2xl transform hover:scale-105 transition-transform cursor-pointer" data-aos="fade-left" data-aos-delay="800">
                        <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?w=400&h=300&fit=crop" alt="Wisata 4" class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white font-bold text-lg">Taman Indah</h3>
                            <p class="text-white text-sm opacity-80">Warna-warni alam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Animated Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce cursor-pointer" id="scroll-indicator">
        <a href="#featured" class="flex flex-col items-center text-white hover:text-yellow-300 transition-colors">
            <span class="text-sm mb-2">Gulir ke bawah</span>
            <span class="iconify text-3xl" data-icon="mdi:chevron-down"></span>
        </a>
    </div>
</section>

<!-- Featured Destinations with Interactive Cards -->
<section id="featured" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="inline-block bg-purple-100 text-purple-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                <span class="iconify mr-2" data-icon="mdi:star"></span>
                Destinasi Unggulan
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Destinasi Wisata Kalimantan Timur <span class="gradient-text">Terpopuler</span>
            </h2>
            <p class="text-gray-600 text-lg">
                Jelajahi destinasi wisata pilihan Kalimantan Timur yang paling banyak dikunjungi dan direkomendasikan oleh wisatawan
            </p>
        </div>

        <!-- Interactive Filter Pills -->
        <div class="flex justify-center mb-12 flex-wrap gap-3" data-aos="fade-up" data-aos-delay="200">
            <button class="filter-pill active px-6 py-2 rounded-full font-medium transition-all bg-purple-600 text-white shadow-lg" data-filter="all">
                Semua
            </button>
            <button class="filter-pill px-6 py-2 rounded-full font-medium transition-all bg-gray-100 text-gray-700 shadow-md hover:shadow-lg" data-filter="Pantai">
                <span class="iconify mr-2" data-icon="mdi:beach"></span>
                Pantai
            </button>
            <button class="filter-pill px-6 py-2 rounded-full font-medium transition-all bg-gray-100 text-gray-700 shadow-md hover:shadow-lg" data-filter="Gunung">
                <span class="iconify mr-2" data-icon="mdi:image-filter-hdr"></span>
                Gunung
            </button>
            <button class="filter-pill px-6 py-2 rounded-full font-medium transition-all bg-gray-100 text-gray-700 shadow-md hover:shadow-lg" data-filter="Air Terjun">
                <span class="iconify mr-2" data-icon="mdi:water"></span>
                Air Terjun
            </button>
        </div>

        <!-- Destinations Grid with Stagger Animation -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="destinations-grid">
            @foreach($featuredDestinations as $index => $destination)
            <div class="destination-card bg-white rounded-2xl overflow-hidden shadow-lg card-hover group"
                data-category="{{ $destination['category'] }}"
                data-aos="zoom-in"
                data-aos-delay="{{ $index * 100 }}">
                <!-- Image with Hover Effect -->
                <div class="relative overflow-hidden h-64">
                    <img src="{{ $destination['image'] }}" alt="{{ $destination['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 overlay-gradient opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Category Badge with Animation -->
                    <div class="absolute top-4 right-4 transform translate-y-0 group-hover:-translate-y-1 transition-transform">
                        <span class="bg-white bg-opacity-90 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-semibold text-purple-600 flex items-center">
                            <span class="iconify mr-1" data-icon="mdi:tag"></span>
                            {{ $destination['category'] }}
                        </span>
                    </div>

                    <!-- Interactive Favorite Button -->
                    <button class="favorite-btn absolute top-4 left-4 w-10 h-10 bg-white bg-opacity-90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all transform hover:scale-110">
                        <span class="iconify text-xl" data-icon="mdi:heart-outline"></span>
                    </button>

                    <!-- View Count -->
                    <div class="absolute bottom-4 right-4 bg-black bg-opacity-50 backdrop-blur-sm px-3 py-1 rounded-full text-white text-sm">
                        <span class="iconify mr-1" data-icon="mdi:eye"></span>
                        <span class="view-count">{{ rand(100, 999) }}</span>
                    </div>
                </div>

                <!-- Content with Enhanced Interactions -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors">
                        {{ $destination['title'] }}
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">
                        {{ $destination['description'] }}
                    </p>

                    <!-- Info with Icons -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-1 text-yellow-400">
                            @for($i = 0; $i < 4; $i++)
                                <span class="iconify star-icon" data-icon="mdi:star"></span>
                                @endfor
                                <span class="iconify star-icon" data-icon="mdi:star-half-full"></span>
                                <span class="text-gray-600 text-sm ml-2 font-semibold">4.5</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-sm">
                            <span class="iconify mr-1" data-icon="mdi:map-marker"></span>
                            <span>{{ rand(3, 15) }} km</span>
                        </div>
                    </div>

                    <!-- Price Badge -->
                    <div class="mb-4">
                        <span class="inline-block bg-green-100 text-green-600 px-3 py-1 rounded-lg text-sm font-semibold">
                            <span class="iconify mr-1" data-icon="mdi:ticket"></span>
                            Mulai Rp 10.000
                        </span>
                    </div>

                    <!-- Interactive Button -->
                    <a href="{{ route('destinasi.show', $destination['id']) }}" class="detail-btn block w-full text-center bg-gradient-to-r from-purple-600 to-purple-700 text-white py-3 rounded-xl font-semibold hover:from-purple-700 hover:to-purple-800 transition-all transform hover:scale-105 relative overflow-hidden">
                        <span class="relative z-10 flex items-center justify-center">
                            <span class="iconify mr-2" data-icon="mdi:eye"></span>
                            Lihat Detail
                        </span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- View All Button with Pulse Effect -->
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="{{ route('destinasi.index') }}" class="inline-flex items-center space-x-2 bg-gradient-to-r from-purple-600 to-purple-700 text-white px-8 py-4 rounded-xl font-semibold hover:from-purple-700 hover:to-purple-800 transform hover:scale-105 transition-all shadow-lg relative overflow-hidden group">
                <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></span>
                <span class="relative z-10">Lihat Semua Destinasi</span>
                <span class="iconify relative z-10" data-icon="mdi:arrow-right"></span>
            </a>
        </div>
    </div>
</section>

<!-- Interactive Features Section -->
<section class="py-20 bg-gradient-to-br from-purple-50 to-blue-50 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full opacity-5">
        <div class="absolute top-10 left-10 w-32 h-32 bg-purple-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-blue-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Mengapa Memilih <span class="gradient-text">Kami?</span>
            </h2>
            <p class="text-gray-600 text-lg">
                Kami menyediakan informasi lengkap dan terpercaya untuk pengalaman wisata terbaik Anda
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 with Hover Animation -->
            <div class="feature-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all text-center group cursor-pointer" data-aos="flip-left" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                    <span class="iconify text-white text-3xl" data-icon="mdi:shield-check"></span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors">Terpercaya</h3>
                <p class="text-gray-600">Informasi akurat dan terverifikasi dari sumber terpercaya</p>
                <div class="mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <span class="text-purple-600 font-semibold text-sm">Pelajari Lebih Lanjut →</span>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all text-center group cursor-pointer" data-aos="flip-left" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                    <span class="iconify text-white text-3xl" data-icon="mdi:map-search"></span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Lengkap</h3>
                <p class="text-gray-600">Detail destinasi, harga, jam operasional, dan lokasi yang jelas</p>
                <div class="mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <span class="text-blue-600 font-semibold text-sm">Pelajari Lebih Lanjut →</span>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all text-center group cursor-pointer" data-aos="flip-left" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                    <span class="iconify text-white text-3xl" data-icon="mdi:update"></span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">Terupdate</h3>
                <p class="text-gray-600">Informasi selalu diperbarui dengan data terkini</p>
                <div class="mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <span class="text-green-600 font-semibold text-sm">Pelajari Lebih Lanjut →</span>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all text-center group cursor-pointer" data-aos="flip-left" data-aos-delay="400">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                    <span class="iconify text-white text-3xl" data-icon="mdi:account-group"></span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-yellow-600 transition-colors">Komunitas</h3>
                <p class="text-gray-600">Bergabung dengan komunitas pecinta wisata lokal</p>
                <div class="mt-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <span class="text-yellow-600 font-semibold text-sm">Pelajari Lebih Lanjut →</span>
                </div>
            </div>
        </div>

        <!-- Interactive Stats Bar -->
        <div class="mt-16 bg-white rounded-3xl p-8 shadow-xl" data-aos="zoom-in">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center stat-item">
                    <div class="text-4xl font-bold gradient-text mb-2 counter-stat" data-target="99">0</div>
                    <p class="text-gray-600">% Kepuasan</p>
                </div>
                <div class="text-center stat-item">
                    <div class="text-4xl font-bold gradient-text mb-2 counter-stat" data-target="24">0</div>
                    <p class="text-gray-600">Jam Support</p>
                </div>
                <div class="text-center stat-item">
                    <div class="text-4xl font-bold gradient-text mb-2 counter-stat" data-target="150">0</div>
                    <p class="text-gray-600">Partner Lokal</p>
                </div>
                <div class="text-center stat-item">
                    <div class="text-4xl font-bold gradient-text mb-2 counter-stat" data-target="5000">0</div>
                    <p class="text-gray-600">Review Positif</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced CTA Section with Parallax -->
<section class="py-20 animated-gradient text-white relative overflow-hidden" id="cta-section">
    <div class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl float-animation"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-300 opacity-10 rounded-full blur-3xl float-animation" style="animation-delay: 1.5s;"></div>

    <!-- Floating Icons -->
    <div class="absolute top-20 left-10 opacity-20">
        <span class="iconify text-6xl float-animation" data-icon="mdi:island" style="animation-delay: 0.5s;"></span>
    </div>
    <div class="absolute bottom-20 right-20 opacity-20">
        <span class="iconify text-6xl float-animation" data-icon="mdi:beach" style="animation-delay: 1s;"></span>
    </div>
    <div class="absolute top-1/2 right-10 opacity-20">
        <span class="iconify text-6xl float-animation" data-icon="mdi:mountain" style="animation-delay: 1.5s;"></span>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center" data-aos="zoom-in">
            <div class="mb-6 inline-block">
                <span class="iconify text-7xl animate-bounce" data-icon="mdi:map-marker-radius"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Siap Memulai Petualangan Anda?
            </h2>
            <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto">
                Jelajahi berbagai destinasi wisata menarik dan buat momen tak terlupakan bersama keluarga dan teman-teman
            </p>

            <!-- Email Subscription -->
            <div class="max-w-md mx-auto mb-8" data-aos="fade-up" data-aos-delay="200">
                <div class="flex gap-2">
                    <input type="email" id="subscribe-email" placeholder="Email Anda" class="flex-1 px-6 py-4 rounded-xl text-gray-900 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all">
                    <button id="subscribe-btn" class="bg-yellow-400 hover:bg-yellow-500 text-purple-900 px-8 py-4 rounded-xl font-semibold transition-all transform hover:scale-105 flex items-center space-x-2">
                        <span>Subscribe</span>
                        <span class="iconify" data-icon="mdi:send"></span>
                    </button>
                </div>
                <p class="text-sm text-gray-200 mt-2">Dapatkan update destinasi wisata terbaru!</p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('destinasi.index') }}" class="ripple inline-flex items-center justify-center space-x-2 bg-white text-purple-600 px-8 py-4 rounded-xl font-semibold hover:bg-yellow-300 hover:text-purple-700 transform hover:scale-105 transition-all shadow-xl">
                    <span>Mulai Jelajahi</span>
                    <span class="iconify" data-icon="mdi:arrow-right"></span>
                </a>
                <a href="{{ route('about') }}" class="ripple inline-flex items-center justify-center space-x-2 bg-transparent border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-purple-600 transform hover:scale-105 transition-all">
                    <span class="iconify" data-icon="mdi:information"></span>
                    <span>Tentang Kami</span>
                </a>
            </div>

            <!-- Social Proof -->
            <div class="mt-12 flex items-center justify-center space-x-8" data-aos="fade-up" data-aos-delay="600">
                <div class="text-center">
                    <div class="flex items-center justify-center -space-x-2 mb-2">
                        <img src="https://i.pravatar.cc/40?img=1" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                        <img src="https://i.pravatar.cc/40?img=2" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                        <img src="https://i.pravatar.cc/40?img=3" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                        <img src="https://i.pravatar.cc/40?img=4" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-yellow-400 flex items-center justify-center text-purple-900 text-xs font-bold">+99</div>
                    </div>
                    <p class="text-sm">Bergabung dengan 1000+ wisatawan</p>
                </div>
                <div class="h-12 w-px bg-white opacity-30"></div>
                <div class="flex items-center space-x-1">
                    @for($i = 0; $i < 5; $i++)
                        <span class="iconify text-2xl text-yellow-300" data-icon="mdi:star"></span>
                        @endfor
                        <span class="ml-2">4.9/5 Rating</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Slider -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Apa Kata <span class="gradient-text">Mereka?</span>
            </h2>
            <p class="text-gray-600 text-lg">
                Testimoni dari wisatawan yang telah menjelajahi destinasi melalui platform kami
            </p>
        </div>

        <div class="relative max-w-6xl mx-auto">
            <div class="testimonial-slider overflow-hidden">
                <div class="testimonial-track flex transition-transform duration-500 ease-in-out">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-item flex-shrink-0 w-full px-4">
                        <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-8 rounded-2xl shadow-lg">
                            <div class="flex items-center mb-6">
                                <img src="https://i.pravatar.cc/80?img=5" alt="User" class="w-16 h-16 rounded-full mr-4">
                                <div>
                                    <h4 class="font-bold text-gray-900">Yuli Subroto</h4>
                                    <div class="flex items-center text-yellow-400">
                                        @for($i = 0; $i < 5; $i++)
                                            <span class="iconify" data-icon="mdi:star"></span>
                                            @endfor
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 text-lg italic mb-4">"Platform ini sangat membantu dalam merencanakan liburan keluarga. Informasi yang lengkap dan foto-foto yang menakjubkan!"</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="iconify mr-2" data-icon="mdi:map-marker"></span>
                                <span>Mengunjungi Pantai Indah Sunset</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-item flex-shrink-0 w-full px-4">
                        <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-8 rounded-2xl shadow-lg">
                            <div class="flex items-center mb-6">
                                <img src="https://i.pravatar.cc/80?img=6" alt="User" class="w-16 h-16 rounded-full mr-4">
                                <div>
                                    <h4 class="font-bold text-gray-900">Yanto Sulaeman</h4>
                                    <div class="flex items-center text-yellow-400">
                                        @for($i = 0; $i < 5; $i++)
                                            <span class="iconify" data-icon="mdi:star"></span>
                                            @endfor
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 text-lg italic mb-4">"Destinasi yang recommended semuanya bagus! Harga tiket juga sesuai dengan yang tertera. Puas banget!"</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="iconify mr-2" data-icon="mdi:map-marker"></span>
                                <span>Mengunjungi Gunung Hijau Asri</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-item flex-shrink-0 w-full px-4">
                        <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-8 rounded-2xl shadow-lg">
                            <div class="flex items-center mb-6">
                                <img src="https://i.pravatar.cc/80?img=7" alt="User" class="w-16 h-16 rounded-full mr-4">
                                <div>
                                    <h4 class="font-bold text-gray-900">Budi Santoso</h4>
                                    <div class="flex items-center text-yellow-400">
                                        @for($i = 0; $i < 5; $i++)
                                            <span class="iconify" data-icon="mdi:star"></span>
                                            @endfor
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 text-lg italic mb-4">"Website yang user-friendly dan informatif. Saya jadi lebih mudah mencari destinasi wisata yang cocok untuk adventure!"</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="iconify mr-2" data-icon="mdi:map-marker"></span>
                                <span>Mengunjungi Air Terjun Pelangi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <button class="testimonial-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-purple-600 hover:text-white transition-all">
                <span class="iconify text-2xl" data-icon="mdi:chevron-left"></span>
            </button>
            <button class="testimonial-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-purple-600 hover:text-white transition-all">
                <span class="iconify text-2xl" data-icon="mdi:chevron-right"></span>
            </button>

            <!-- Slider Dots -->
            <div class="flex justify-center mt-8 space-x-2">
                <button class="testimonial-dot w-3 h-3 rounded-full bg-purple-600"></button>
                <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-300"></button>
                <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-300"></button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<!-- Particles.js Library -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

<!-- AOS (Animate On Scroll) Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Initialize Particles.js
        if (document.getElementById('particles-js')) {
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: '#ffffff'
                    },
                    shape: {
                        type: 'circle'
                    },
                    opacity: {
                        value: 0.5,
                        random: true
                    },
                    size: {
                        value: 3,
                        random: true
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#ffffff',
                        opacity: 0.4,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: 'none',
                        random: false,
                        straight: false,
                        out_mode: 'out',
                        bounce: false
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'grab'
                        },
                        onclick: {
                            enable: true,
                            mode: 'push'
                        },
                        resize: true
                    },
                    modes: {
                        grab: {
                            distance: 140,
                            line_linked: {
                                opacity: 1
                            }
                        },
                        push: {
                            particles_nb: 4
                        }
                    }
                },
                retina_detect: true
            });
        }

        // Counter Animation
        const animateCounter = (element) => {
            const target = parseFloat(element.getAttribute('data-target'));
            const isDecimal = target % 1 !== 0;
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    element.textContent = isDecimal ? current.toFixed(1) : Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = isDecimal ? target.toFixed(1) : target;
                    if (!isDecimal && target > 50) {
                        element.textContent += '+';
                    }
                }
            };
            updateCounter();
        };

        // Intersection Observer for Counters
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.counter, .counter-stat');
                    counters.forEach(counter => {
                        if (!counter.classList.contains('counted')) {
                            counter.classList.add('counted');
                            animateCounter(counter);
                        }
                    });
                    counterObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        document.querySelectorAll('[data-target]').forEach(element => {
            counterObserver.observe(element.parentElement.parentElement);
        });

        // Typing Effect
        const typedText = document.getElementById('typed-text');
        if (typedText) {
            const text = typedText.textContent;
            typedText.textContent = '';
            let i = 0;

            const typeWriter = () => {
                if (i < text.length) {
                    typedText.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 100);
                }
            };

            setTimeout(typeWriter, 500);
        }

        // Parallax Effect on Hero
        document.addEventListener('mousemove', (e) => {
            const heroSection = document.querySelector('.animated-gradient');
            if (heroSection) {
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;

                const decoratives = heroSection.querySelectorAll('.float-animation');
                decoratives.forEach((element, index) => {
                    const speed = (index + 1) * 0.5;
                    const x = (mouseX - 0.5) * speed * 50;
                    const y = (mouseY - 0.5) * speed * 50;
                    element.style.transform = `translate(${x}px, ${y}px)`;
                });
            }
        });

        // Favorite Button Toggle
        document.querySelectorAll('.favorite-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const icon = this.querySelector('.iconify');

                if (icon.getAttribute('data-icon') === 'mdi:heart-outline') {
                    icon.setAttribute('data-icon', 'mdi:heart');
                    this.classList.add('bg-red-500', 'text-white');

                    const heart = document.createElement('div');
                    heart.innerHTML = '<span class="iconify" data-icon="mdi:heart"></span>';
                    heart.style.cssText = 'position: absolute; color: red; font-size: 24px; pointer-events: none; animation: heartFloat 1s ease-out forwards;';
                    this.appendChild(heart);

                    setTimeout(() => heart.remove(), 1000);
                } else {
                    icon.setAttribute('data-icon', 'mdi:heart-outline');
                    this.classList.remove('bg-red-500', 'text-white');
                }
            });
        });

        // View Counter Animation
        document.querySelectorAll('.view-count').forEach(counter => {
            setInterval(() => {
                const currentCount = parseInt(counter.textContent);
                counter.textContent = currentCount + Math.floor(Math.random() * 3);
            }, 5000);
        });

        // Filter Pills Animation
        document.querySelectorAll('.filter-pill').forEach(pill => {
            pill.addEventListener('click', function() {
                document.querySelectorAll('.filter-pill').forEach(p => {
                    p.classList.remove('active', 'bg-purple-600', 'text-white');
                    p.classList.add('bg-gray-100', 'text-gray-700');
                });

                this.classList.add('active', 'bg-purple-600', 'text-white');
                this.classList.remove('bg-gray-100', 'text-gray-700');

                const filter = this.getAttribute('data-filter');
                const cards = document.querySelectorAll('.destination-card');

                cards.forEach((card, index) => {
                    const category = card.getAttribute('data-category');

                    if (filter === 'all' || category === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, index * 50);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Scroll Indicator
        const scrollIndicator = document.getElementById('scroll-indicator');
        if (scrollIndicator) {
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                if (currentScroll > 100) {
                    scrollIndicator.style.opacity = '0';
                    scrollIndicator.style.pointerEvents = 'none';
                } else {
                    scrollIndicator.style.opacity = '1';
                    scrollIndicator.style.pointerEvents = 'auto';
                }
            });
        }

        // Email Subscription
        const subscribeBtn = document.getElementById('subscribe-btn');
        const subscribeEmail = document.getElementById('subscribe-email');

        if (subscribeBtn && subscribeEmail) {
            subscribeBtn.addEventListener('click', function() {
                const email = subscribeEmail.value;

                if (email && email.includes('@')) {
                    this.innerHTML = '<span class="iconify animate-spin" data-icon="mdi:loading"></span>';

                    setTimeout(() => {
                        this.innerHTML = '<span class="iconify" data-icon="mdi:check"></span> Berhasil!';
                        this.classList.add('bg-green-500');
                        subscribeEmail.value = '';

                        const message = document.createElement('div');
                        message.className = 'fixed top-24 right-4 bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg z-50 animate-fade-in';
                        message.innerHTML = '<span class="iconify mr-2" data-icon="mdi:check-circle"></span>Terima kasih telah subscribe!';
                        document.body.appendChild(message);

                        setTimeout(() => message.remove(), 3000);

                        setTimeout(() => {
                            this.innerHTML = '<span>Subscribe</span><span class="iconify ml-2" data-icon="mdi:send"></span>';
                            this.classList.remove('bg-green-500');
                        }, 2000);
                    }, 1500);
                } else {
                    subscribeEmail.classList.add('ring-4', 'ring-red-500');
                    setTimeout(() => subscribeEmail.classList.remove('ring-4', 'ring-red-500'), 1000);
                }
            });
        }

        // Testimonial Slider
        let currentTestimonial = 0;
        const testimonialTrack = document.querySelector('.testimonial-track');
        const testimonialItems = document.querySelectorAll('.testimonial-item');
        const testimonialDots = document.querySelectorAll('.testimonial-dot');
        const prevBtn = document.querySelector('.testimonial-prev');
        const nextBtn = document.querySelector('.testimonial-next');

        const updateTestimonial = (index) => {
            if (testimonialTrack) {
                testimonialTrack.style.transform = `translateX(-${index * 100}%)`;
                testimonialDots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.remove('bg-gray-300');
                        dot.classList.add('bg-purple-600');
                    } else {
                        dot.classList.add('bg-gray-300');
                        dot.classList.remove('bg-purple-600');
                    }
                });
            }
        };

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                currentTestimonial = (currentTestimonial + 1) % testimonialItems.length;
                updateTestimonial(currentTestimonial);
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                currentTestimonial = (currentTestimonial - 1 + testimonialItems.length) % testimonialItems.length;
                updateTestimonial(currentTestimonial);
            });
        }

        testimonialDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentTestimonial = index;
                updateTestimonial(currentTestimonial);
            });
        });

        // Auto-play testimonials
        setInterval(() => {
            if (testimonialTrack) {
                currentTestimonial = (currentTestimonial + 1) % testimonialItems.length;
                updateTestimonial(currentTestimonial);
            }
        }, 5000);

        // Star Rating Hover Effect
        document.querySelectorAll('.star-icon').forEach(star => {
            star.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.3) rotate(360deg)';
                this.style.transition = 'transform 0.3s ease';
            });

            star.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
            });
        });

        // Feature Card Hover
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Image Reveal on Hover
        document.querySelectorAll('.image-reveal').forEach(container => {
            container.addEventListener('mouseenter', function() {
                const img = this.querySelector('img');
                img.style.filter = 'brightness(1.1) contrast(1.1)';
            });

            container.addEventListener('mouseleave', function() {
                const img = this.querySelector('img');
                img.style.filter = 'brightness(1) contrast(1)';
            });
        });

        // Add CSS for animations
        const style = document.createElement('style');
        style.textContent = `
        @keyframes heartFloat {
            0% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
            100% {
                transform: translateY(-50px) scale(1.5);
                opacity: 0;
            }
        }
        
        .filter-pill { transition: all 0.3s ease; }
        .filter-pill.active { transform: scale(1.05); }
        .destination-card { transition: all 0.3s ease; }
        .stat-item { transition: transform 0.3s ease; }
        .stat-item:hover { transform: scale(1.1); }
        .feature-card { transition: all 0.3s ease; }
        .star-icon { transition: transform 0.3s ease; }
    `;
        document.head.appendChild(style);

        console.log('🎉 Enhanced interactive features initialized!');
    });
</script>
@endsection