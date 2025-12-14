@extends('layouts.app')

@section('title', $destination['title'] . ' - Arunika Kaltim')

@section('content')
<!-- Hero Image Section -->
<section class="relative h-[70vh] overflow-hidden">
    <img src="{{ $destination['image'] }}" alt="{{ $destination['title'] }}" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
    
    <!-- Breadcrumb & Title -->
    <div class="absolute bottom-0 left-0 right-0 pb-12 pt-20">
        <div class="container mx-auto px-4">
            <!-- Breadcrumb -->
            <nav class="mb-6">
                <ol class="flex items-center space-x-2 text-white text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-yellow-300 transition-colors">Beranda</a></li>
                    <li><span class="iconify" data-icon="mdi:chevron-right"></span></li>
                    <li><a href="{{ route('destinasi.index') }}" class="hover:text-yellow-300 transition-colors">Destinasi</a></li>
                    <li><span class="iconify" data-icon="mdi:chevron-right"></span></li>
                    <li class="text-yellow-300">{{ $destination['title'] }}</li>
                </ol>
            </nav>
            
            <!-- Title & Info -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div class="flex-1">
                    <div class="inline-block mb-4">
                        <span class="bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold text-white flex items-center">
                            @if($destination['category'] == 'Pantai')
                                <span class="iconify mr-2" data-icon="mdi:beach"></span>
                            @elseif($destination['category'] == 'Gunung')
                                <span class="iconify mr-2" data-icon="mdi:image-filter-hdr"></span>
                            @elseif($destination['category'] == 'Air Terjun')
                                <span class="iconify mr-2" data-icon="mdi:water"></span>
                            @elseif($destination['category'] == 'Taman')
                                <span class="iconify mr-2" data-icon="mdi:flower"></span>
                            @elseif($destination['category'] == 'Danau')
                                <span class="iconify mr-2" data-icon="mdi:waves"></span>
                            @else
                                <span class="iconify mr-2" data-icon="mdi:pine-tree"></span>
                            @endif
                            {{ $destination['category'] }}
                        </span>
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $destination['title'] }}</h1>
                    <div class="flex flex-wrap items-center gap-4 text-white">
                        <div class="flex items-center space-x-1 text-yellow-300">
                            <span class="iconify text-xl" data-icon="mdi:star"></span>
                            <span class="iconify text-xl" data-icon="mdi:star"></span>
                            <span class="iconify text-xl" data-icon="mdi:star"></span>
                            <span class="iconify text-xl" data-icon="mdi:star"></span>
                            <span class="iconify text-xl" data-icon="mdi:star-half-full"></span>
                            <span class="ml-2">4.5 (328 Ulasan)</span>
                        </div>
                        <div class="flex items-center">
                            <span class="iconify mr-2 text-xl" data-icon="mdi:eye"></span>
                            <span>5,234 Pengunjung</span>
                        </div>
                    </div>
                </div>
                
                <div class="flex gap-3">
                    <button class="w-12 h-12 bg-white bg-opacity-20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-red-500 transition-colors text-white">
                        <span class="iconify text-2xl" data-icon="mdi:heart-outline"></span>
                    </button>
                    <button class="w-12 h-12 bg-white bg-opacity-20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors text-white">
                        <span class="iconify text-2xl" data-icon="mdi:share-variant"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Description -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                        <span class="iconify mr-3 text-purple-600 text-3xl" data-icon="mdi:information"></span>
                        Tentang Destinasi
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $destination['full_description'] }}
                    </p>
                </div>
                
                <!-- Facilities -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="iconify mr-3 text-purple-600 text-3xl" data-icon="mdi:checkbox-multiple-marked"></span>
                        Fasilitas yang Tersedia
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach($destination['facilities'] as $facility)
                        <div class="flex items-center space-x-3 p-3 bg-purple-50 rounded-lg">
                            <span class="iconify text-purple-600 text-2xl" data-icon="mdi:check-circle"></span>
                            <span class="text-gray-700 font-medium">{{ $facility }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Location Map -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="iconify mr-3 text-purple-600 text-3xl" data-icon="mdi:map-marker"></span>
                        Lokasi & Peta
                    </h2>
                    <div class="mb-4">
                        <div class="flex items-start text-gray-600">
                            <span class="iconify mr-2 mt-1 text-purple-600" data-icon="mdi:map-marker"></span>
                            <span>{{ $destination['location'] }}</span>
                        </div>
                    </div>
                    <div class="rounded-xl overflow-hidden h-96 bg-gray-200">
                        <iframe 
                            src="{{ $destination['map_embed'] }}" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="mt-4 flex gap-3">
                        <a href="https://www.google.com/maps" target="_blank" class="flex-1 bg-blue-600 text-white text-center py-3 rounded-xl font-semibold hover:bg-blue-700 transition-colors flex items-center justify-center">
                            <span class="iconify mr-2" data-icon="mdi:navigation"></span>
                            Buka di Google Maps
                        </a>
                        <button class="px-6 bg-gray-100 text-gray-700 rounded-xl font-semibold hover:bg-gray-200 transition-colors flex items-center">
                            <span class="iconify mr-2" data-icon="mdi:directions"></span>
                            Petunjuk Arah
                        </button>
                    </div>
                </div>
                
                <!-- Gallery -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="iconify mr-3 text-purple-600 text-3xl" data-icon="mdi:image-multiple"></span>
                        Galeri Foto
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="relative overflow-hidden rounded-xl aspect-square group cursor-pointer">
                            <img src="{{ $destination['image'] }}" alt="Gallery" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all flex items-center justify-center">
                                <span class="iconify text-white text-4xl opacity-0 group-hover:opacity-100 transition-opacity" data-icon="mdi:magnify-plus"></span>
                            </div>
                        </div>
                        <div class="relative overflow-hidden rounded-xl aspect-square group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400" alt="Gallery" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all flex items-center justify-center">
                                <span class="iconify text-white text-4xl opacity-0 group-hover:opacity-100 transition-opacity" data-icon="mdi:magnify-plus"></span>
                            </div>
                        </div>
                        <div class="relative overflow-hidden rounded-xl aspect-square group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=400" alt="Gallery" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all flex items-center justify-center">
                                <span class="iconify text-white text-4xl opacity-0 group-hover:opacity-100 transition-opacity" data-icon="mdi:magnify-plus"></span>
                            </div>
                        </div>
                        <div class="relative overflow-hidden rounded-xl aspect-square group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?w=400" alt="Gallery" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all flex items-center justify-center">
                                <span class="iconify text-white text-4xl opacity-0 group-hover:opacity-100 transition-opacity" data-icon="mdi:magnify-plus"></span>
                            </div>
                        </div>
                        <div class="relative overflow-hidden rounded-xl aspect-square group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=400" alt="Gallery" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all flex items-center justify-center">
                                <span class="iconify text-white text-4xl opacity-0 group-hover:opacity-100 transition-opacity" data-icon="mdi:magnify-plus"></span>
                            </div>
                        </div>
                        <div class="relative overflow-hidden rounded-xl aspect-square bg-gradient-to-br from-purple-600 to-blue-600 flex items-center justify-center cursor-pointer group">
                            <div class="text-center text-white">
                                <span class="iconify text-4xl mb-2" data-icon="mdi:plus-circle"></span>
                                <p class="font-semibold">Lihat Semua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Sidebar -->
            <div class="space-y-6">
                <!-- Info Card -->
                <div class="bg-white rounded-2xl p-6 shadow-lg sticky top-24">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Informasi Penting</h3>
                    
                    <div class="space-y-4">
                        <!-- Price -->
                        <div class="flex items-center justify-between p-4 bg-green-50 rounded-xl">
                            <div class="flex items-center">
                                <span class="iconify text-green-600 text-2xl mr-3" data-icon="mdi:ticket"></span>
                                <div>
                                    <p class="text-sm text-gray-600">Harga Tiket</p>
                                    <p class="text-xl font-bold text-green-600">{{ $destination['price'] }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Open Hours -->
                        <div class="flex items-start p-4 bg-blue-50 rounded-xl">
                            <span class="iconify text-blue-600 text-2xl mr-3 mt-1" data-icon="mdi:clock-outline"></span>
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Jam Operasional</p>
                                <p class="font-semibold text-gray-900">{{ $destination['open_hours'] }}</p>
                            </div>
                        </div>
                        
                        <!-- Best Time -->
                        <div class="flex items-start p-4 bg-yellow-50 rounded-xl">
                            <span class="iconify text-yellow-600 text-2xl mr-3 mt-1" data-icon="mdi:weather-sunny"></span>
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Waktu Terbaik</p>
                                <p class="font-semibold text-gray-900">Pagi & Sore Hari</p>
                            </div>
                        </div>
                        
                        <!-- Contact -->
                        <div class="flex items-start p-4 bg-purple-50 rounded-xl">
                            <span class="iconify text-purple-600 text-2xl mr-3 mt-1" data-icon="mdi:phone"></span>
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Kontak</p>
                                <p class="font-semibold text-gray-900">+62 812-3456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 space-y-3">
                        <button class="w-full bg-gradient-to-r from-purple-600 to-purple-700 text-white py-4 rounded-xl font-semibold hover:from-purple-700 hover:to-purple-800 transition-all transform hover:scale-105 flex items-center justify-center">
                            <span class="iconify mr-2 text-xl" data-icon="mdi:calendar-check"></span>
                            Rencanakan Kunjungan
                        </button>
                        <button class="w-full bg-green-500 text-white py-4 rounded-xl font-semibold hover:bg-green-600 transition-all flex items-center justify-center">
                            <span class="iconify mr-2 text-xl" data-icon="mdi:whatsapp"></span>
                            Hubungi via WhatsApp
                        </button>
                    </div>
                </div>
                
                <!-- Tips Card -->
                <div class="bg-gradient-to-br from-purple-600 to-blue-600 rounded-2xl p-6 text-white">
                    <div class="flex items-center mb-4">
                        <span class="iconify text-3xl mr-3" data-icon="mdi:lightbulb-on"></span>
                        <h3 class="text-xl font-bold">Tips Berkunjung</h3>
                    </div>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start">
                            <span class="iconify mr-2 mt-1" data-icon="mdi:check-circle"></span>
                            <span>Datang lebih awal untuk menghindari keramaian</span>
                        </li>
                        <li class="flex items-start">
                            <span class="iconify mr-2 mt-1" data-icon="mdi:check-circle"></span>
                            <span>Bawa kamera untuk mengabadikan momen indah</span>
                        </li>
                        <li class="flex items-start">
                            <span class="iconify mr-2 mt-1" data-icon="mdi:check-circle"></span>
                            <span>Gunakan pakaian dan alas kaki yang nyaman</span>
                        </li>
                        <li class="flex items-start">
                            <span class="iconify mr-2 mt-1" data-icon="mdi:check-circle"></span>
                            <span>Jaga kebersihan dan kelestarian lingkungan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Destinations -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Destinasi <span class="gradient-text">Terkait</span>
            </h2>
            <p class="text-gray-600">Destinasi wisata lain yang mungkin Anda sukai</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @for($i = 1; $i <= 3; $i++)
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg card-hover">
                <div class="relative overflow-hidden h-48">
                    <img src="https://images.unsplash.com/photo-{{ $i == 1 ? '1506905925346-21bda4d32df4' : ($i == 2 ? '1441974231531-c6227db76b6e' : '1490750967868-88aa4486c946') }}?w=600&h=400&fit=crop" alt="Destinasi" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Destinasi Menarik {{ $i }}</h3>
                    <p class="text-gray-600 text-sm mb-4">Deskripsi singkat destinasi wisata yang menarik untuk dikunjungi</p>
                    <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 flex items-center">
                        <span>Lihat Detail</span>
                        <span class="iconify ml-2" data-icon="mdi:arrow-right"></span>
                    </a>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection