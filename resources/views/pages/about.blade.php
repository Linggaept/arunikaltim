@extends('layouts.app')

@section('title', 'Tentang Kami - Arunika Kaltim')

@section('content')
<!-- Page Header -->
<section class="gradient-bg text-white py-20 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block mb-4">
                <span class="bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">
                    <span class="iconify mr-2" data-icon="mdi:information"></span>
                    Tentang Kami
                </span>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Tentang Wisata Kalimantan Timur</h1>
            <p class="text-xl text-gray-100">
                Kami adalah platform terdepan dalam mempromosikan keindahan wisata lokal Kalimantan Timur kepada dunia
            </p>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-6">
                <div>
                    <div class="inline-block bg-purple-100 text-purple-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        <span class="iconify mr-2" data-icon="mdi:target"></span>
                        Misi Kami
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">
                        Mempromosikan <span class="gradient-text">Wisata Kalimantan Timur</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Platform Wisata Kalimantan Timur didirikan dengan tujuan untuk memperkenalkan dan mempromosikan keindahan destinasi wisata lokal Kalimantan Timur kepada masyarakat luas dan wisatawan internasional. Kami percaya bahwa Kalimantan Timur memiliki kekayaan alam dan budaya yang luar biasa yang perlu diketahui oleh dunia.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Melalui platform ini, kami menyediakan informasi lengkap, akurat, dan terpercaya tentang berbagai destinasi wisata Kalimantan Timur, mulai dari pantai eksotis di Balikpapan, gunung menakjubkan di Samarinda, air terjun indah di Tenggarong, hingga hutan konservasi yang masih asri di Bontang dan lokasi bersejarah budaya Kutai.
                    </p>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 gap-6 pt-6">
                    <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-6 rounded-2xl">
                        <div class="text-4xl font-bold gradient-text mb-2">50+</div>
                        <p class="text-gray-600">Destinasi Wisata</p>
                    </div>
                    <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-6 rounded-2xl">
                        <div class="text-4xl font-bold gradient-text mb-2">1000+</div>
                        <p class="text-gray-600">Pengunjung</p>
                    </div>
                    <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-6 rounded-2xl">
                        <div class="text-4xl font-bold gradient-text mb-2">100+</div>
                        <p class="text-gray-600">Foto & Video</p>
                    </div>
                    <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-6 rounded-2xl">
                        <div class="text-4xl font-bold gradient-text mb-2">4.8</div>
                        <p class="text-gray-600">Rating Pengguna</p>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&h=1000&fit=crop" alt="About Us" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-6 -right-6 w-64 h-64 bg-purple-200 rounded-3xl -z-10"></div>
                <div class="absolute -top-6 -left-6 w-48 h-48 bg-blue-200 rounded-3xl -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gradient-to-br from-purple-50 to-blue-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Nilai-Nilai <span class="gradient-text">Kami</span>
            </h2>
            <p class="text-gray-600 text-lg">
                Prinsip yang kami pegang dalam setiap langkah perjalanan kami
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Value 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-xl transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <span class="iconify text-white text-3xl" data-icon="mdi:shield-check"></span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Terpercaya</h3>
                <p class="text-gray-600">
                    Menyediakan informasi yang akurat dan terverifikasi dari sumber terpercaya
                </p>
            </div>

            <!-- Value 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-xl transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <span class="iconify text-white text-3xl" data-icon="mdi:heart"></span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Peduli Lingkungan</h3>
                <p class="text-gray-600">
                    Mendorong wisata berkelanjutan yang menjaga kelestarian alam
                </p>
            </div>

            <!-- Value 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-xl transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <span class="iconify text-white text-3xl" data-icon="mdi:lightbulb-on"></span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Inovatif</h3>
                <p class="text-gray-600">
                    Terus berinovasi dalam menyajikan informasi wisata yang menarik
                </p>
            </div>

            <!-- Value 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg text-center group hover:shadow-xl transition-all">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <span class="iconify text-white text-3xl" data-icon="mdi:account-group"></span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Komunitas</h3>
                <p class="text-gray-600">
                    Membangun komunitas pecinta wisata lokal yang solid dan aktif
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Timeline Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Perjalanan <span class="gradient-text">Kami</span>
            </h2>
            <p class="text-gray-600 text-lg">
                Melihat kembali pencapaian dan milestone penting dalam perjalanan kami
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <!-- Timeline Item 1 -->
            <div class="flex gap-8 mb-12">
                <div class="flex-shrink-0 w-32">
                    <div class="bg-gradient-to-br from-purple-600 to-blue-600 text-white px-4 py-2 rounded-xl text-center font-bold">
                        2022
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="bg-white p-6 rounded-2xl shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Peluncuran Platform</h3>
                        <p class="text-gray-600">
                                    Arunika Kaltim resmi diluncurkan dengan 10 destinasi wisata pilihan dan antusiasme tinggi dari masyarakat
                                </p>
                    </div>
                </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="flex gap-8 mb-12">
                <div class="flex-shrink-0 w-32">
                    <div class="bg-gradient-to-br from-purple-600 to-blue-600 text-white px-4 py-2 rounded-xl text-center font-bold">
                        2023
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="bg-white p-6 rounded-2xl shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ekspansi Konten</h3>
                        <p class="text-gray-600">
                            Menambah 30+ destinasi baru dan meluncurkan fitur galeri foto serta sistem review dari pengunjung
                        </p>
                    </div>
                </div>
            </div>

            <!-- Timeline Item 3 -->
            <div class="flex gap-8 mb-12">
                <div class="flex-shrink-0 w-32">
                    <div class="bg-gradient-to-br from-purple-600 to-blue-600 text-white px-4 py-2 rounded-xl text-center font-bold">
                        2024
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="bg-white p-6 rounded-2xl shadow-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Pencapaian Besar</h3>
                        <p class="text-gray-600">
                            Mencapai 1000+ pengunjung aktif dan bekerja sama dengan berbagai pengelola destinasi wisata lokal
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Hubungi <span class="gradient-text">Kami</span>
                </h2>
                <p class="text-gray-600 text-lg">
                    Ada pertanyaan atau saran? Jangan ragu untuk menghubungi kami
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Contact Card 1 -->
                <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-8 rounded-2xl text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <span class="iconify text-white text-3xl" data-icon="mdi:map-marker"></span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Alamat</h3>
                    <p class="text-gray-600 text-sm">
                        Jl. Wisata Kalimantan No. 456<br>
                        Samarinda, Kalimantan Timur
                    </p>
                </div>

                <!-- Contact Card 2 -->
                <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-8 rounded-2xl text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <span class="iconify text-white text-3xl" data-icon="mdi:phone"></span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Telepon</h3>
                    <p class="text-gray-600 text-sm">
                        +62 812-3456-7890<br>
                        +62 821-9876-5432
                    </p>
                </div>

                <!-- Contact Card 3 -->
                <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-8 rounded-2xl text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <span class="iconify text-white text-3xl" data-icon="mdi:email"></span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Email</h3>
                    <p class="text-gray-600 text-sm">
                        info@wisatalokal.id<br>
                        support@wisatalokal.id
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-8 md:p-12 rounded-3xl">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none" placeholder="Masukkan nama Anda">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none" placeholder="email@example.com">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Subjek</label>
                        <input type="text" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none" placeholder="Subjek pesan">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Pesan</label>
                        <textarea rows="6" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none" placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-purple-700 text-white py-4 rounded-xl font-semibold hover:from-purple-700 hover:to-purple-800 transition-all transform hover:scale-105 flex items-center justify-center">
                        <span class="iconify mr-2 text-xl" data-icon="mdi:send"></span>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 gradient-bg text-white">
    <div class="container mx-auto px-4 text-center">
        <span class="iconify text-6xl mb-6 inline-block" data-icon="mdi:map-marker-radius"></span>
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Memulai Petualangan?</h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            Bergabunglah dengan ribuan wisatawan yang telah menjelajahi keindahan Indonesia bersama kami
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('destinasi.index') }}" class="inline-flex items-center justify-center space-x-2 bg-white text-purple-600 px-8 py-4 rounded-xl font-semibold hover:bg-yellow-300 hover:text-purple-700 transform hover:scale-105 transition-all shadow-xl">
                <span>Jelajahi Sekarang</span>
                <span class="iconify" data-icon="mdi:arrow-right"></span>
            </a>
            <a href="{{ route('galeri') }}" class="inline-flex items-center justify-center space-x-2 bg-transparent border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-purple-600 transform hover:scale-105 transition-all">
                <span class="iconify" data-icon="mdi:image-multiple"></span>
                <span>Lihat Galeri</span>
            </a>
        </div>
    </div>
</section>
@endsection