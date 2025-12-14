@extends('layouts.app')

@section('title', 'Destinasi Wisata - Arunika Kaltim')

@section('styles')
<style>
    /* Floating Animation */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    .float-animation {
        animation: float 6s ease-in-out infinite;
    }
    
    /* Gradient Animation */
    @keyframes gradient-shift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    .animated-gradient {
        background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #4facfe);
        background-size: 400% 400%;
        animation: gradient-shift 15s ease infinite;
    }
    
    /* Card Hover Effect */
    .destination-card {
        transition: all 0.3s ease;
    }
    
    .destination-card:hover {
        transform: translateY(-10px);
    }
    
    /* Filter Button Active State */
    .filter-btn {
        position: relative;
        overflow: hidden;
    }
    
    .filter-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }
    
    .filter-btn:hover::before {
        width: 300px;
        height: 300px;
    }
    
    /* Search Input Animation */
    .search-input {
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        transform: scale(1.02);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.2);
    }
    
    /* Pagination Hover */
    .pagination-btn {
        transition: all 0.3s ease;
    }
    
    .pagination-btn:hover {
        transform: scale(1.1);
    }
    
    /* Loading Animation */
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    
    .loading {
        animation: spin 1s linear infinite;
    }
    
    /* Fade In Animation */
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
    
    .fade-in {
        animation: fadeIn 0.5s ease forwards;
    }
    
    /* Stagger Animation */
    .stagger-item {
        opacity: 0;
        transform: translateY(20px);
    }
    
    .stagger-item.visible {
        animation: fadeIn 0.5s ease forwards;
    }
    
    /* Image Overlay Gradient */
    .overlay-gradient {
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%);
    }
</style>
@endsection

@section('content')
<!-- Enhanced Page Header with Animation -->
<section class="animated-gradient text-white py-20 relative overflow-hidden">
    <!-- Animated Decorative Elements -->
    <div class="absolute top-20 right-10 w-72 h-72 bg-white opacity-10 rounded-full blur-3xl float-animation"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-purple-300 opacity-10 rounded-full blur-3xl float-animation" style="animation-delay: 1s;"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">
                    <span class="iconify mr-2" data-icon="mdi:map-marker-multiple"></span>
                    Jelajahi Destinasi
                </span>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Destinasi Wisata</h1>
            <p class="text-xl text-gray-100">
                Temukan berbagai destinasi wisata menakjubkan yang siap memberikan pengalaman tak terlupakan untuk Anda dan keluarga
            </p>
            
            <!-- Quick Stats -->
            <div class="grid grid-cols-3 gap-6 mt-8">
                <div class="text-center transform hover:scale-110 transition-transform">
                    <div class="text-3xl font-bold text-yellow-300">{{ count($destinations) }}+</div>
                    <p class="text-sm text-gray-200">Destinasi</p>
                </div>
                <div class="text-center transform hover:scale-110 transition-transform">
                    <div class="text-3xl font-bold text-yellow-300">4.8</div>
                    <p class="text-sm text-gray-200">Rating</p>
                </div>
                <div class="text-center transform hover:scale-110 transition-transform">
                    <div class="text-3xl font-bold text-yellow-300">1000+</div>
                    <p class="text-sm text-gray-200">Pengunjung</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Filter & Search Section -->
<section class="bg-white shadow-xl rounded-2xl -mt-10 relative z-20 mx-4 md:mx-auto max-w-7xl" data-aos="fade-up">
    <div class="px-6 py-8">
        <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
            <!-- Enhanced Search -->
            <div class="flex-1 w-full">
                <div class="relative group">
                    <span class="iconify absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-xl group-focus-within:text-purple-600 transition-colors" data-icon="mdi:magnify"></span>
                    <input type="text" 
                           id="search-input"
                           placeholder="Cari destinasi wisata..." 
                           class="search-input w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:outline-none transition-all">
                    <div class="absolute right-4 top-1/2 transform -translate-y-1/2 hidden" id="search-clear">
                        <button class="text-gray-400 hover:text-gray-600">
                            <span class="iconify text-xl" data-icon="mdi:close-circle"></span>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Enhanced Filter Buttons -->
            <div class="flex flex-wrap gap-3 justify-center lg:justify-end">
                <button class="filter-btn active px-6 py-3 rounded-xl font-medium transition-all bg-purple-600 text-white shadow-lg hover:shadow-xl transform hover:scale-105" data-category="all">
                    <span class="iconify mr-2" data-icon="mdi:select-all"></span>
                    Semua
                </button>
                <button class="filter-btn px-6 py-3 rounded-xl font-medium transition-all bg-gray-100 text-gray-700 hover:bg-purple-100 hover:text-purple-600 transform hover:scale-105" data-category="Pantai">
                    <span class="iconify mr-2" data-icon="mdi:beach"></span>
                    Pantai
                </button>
                <button class="filter-btn px-6 py-3 rounded-xl font-medium transition-all bg-gray-100 text-gray-700 hover:bg-purple-100 hover:text-purple-600 transform hover:scale-105" data-category="Gunung">
                    <span class="iconify mr-2" data-icon="mdi:image-filter-hdr"></span>
                    Gunung
                </button>
                <button class="filter-btn px-6 py-3 rounded-xl font-medium transition-all bg-gray-100 text-gray-700 hover:bg-purple-100 hover:text-purple-600 transform hover:scale-105" data-category="Air Terjun">
                    <span class="iconify mr-2" data-icon="mdi:water"></span>
                    Air Terjun
                </button>
                <button class="filter-btn px-6 py-3 rounded-xl font-medium transition-all bg-gray-100 text-gray-700 hover:bg-purple-100 hover:text-purple-600 transform hover:scale-105" data-category="other">
                    <span class="iconify mr-2" data-icon="mdi:pine-tree"></span>
                    Lainnya
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Destinations Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Enhanced Results Info -->
        <div class="flex flex-col md:flex-row items-center justify-between mb-8 gap-4" data-aos="fade-up">
            <div class="flex items-center space-x-4">
                <p class="text-gray-600">
                    Menampilkan <span id="showing-count" class="font-bold text-purple-600 text-lg">{{ count($destinations) }}</span> dari 
                    <span id="total-count" class="font-bold text-purple-600 text-lg">{{ count($destinations) }}</span> destinasi
                </p>
                <div id="loading-indicator" class="hidden">
                    <span class="iconify loading text-purple-600 text-2xl" data-icon="mdi:loading"></span>
                </div>
            </div>
            
            <div class="flex items-center space-x-3">
                <span class="text-gray-600 text-sm font-medium">Urutkan:</span>
                <select id="sort-select" class="border-2 border-gray-200 rounded-xl px-6 py-3 focus:border-purple-500 focus:outline-none hover:border-purple-300 transition-all cursor-pointer bg-white">
                    <option value="popular">Terpopuler</option>
                    <option value="newest">Terbaru</option>
                    <option value="price-low">Harga Terendah</option>
                    <option value="price-high">Harga Tertinggi</option>
                    <option value="rating">Rating Tertinggi</option>
                    <option value="name">Nama (A-Z)</option>
                </select>
            </div>
        </div>
        
        <!-- Enhanced Grid with Stagger Animation -->
        <div id="destinations-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($destinations as $index => $destination)
            <div class="destination-card stagger-item bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl group" 
                 data-category="{{ $destination['category'] }}"
                 data-name="{{ strtolower($destination['title']) }}"
                 data-price="{{ $destination['price'] }}"
                 data-rating="4.5"
                 style="animation-delay: {{ $index * 0.1 }}s">
                
                <!-- Enhanced Image with Hover Effect -->
                <div class="relative overflow-hidden h-64">
                    <img src="{{ $destination['image'] }}" 
                         alt="{{ $destination['title'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                         loading="lazy">
                    <div class="absolute inset-0 overlay-gradient opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <!-- Category Badge with Animation -->
                    <div class="absolute top-4 right-4 transform translate-y-0 group-hover:-translate-y-1 transition-transform">
                        <span class="bg-white bg-opacity-90 backdrop-blur-sm px-3 py-2 rounded-full text-sm font-semibold text-purple-600 flex items-center shadow-lg">
                            @if($destination['category'] == 'Pantai')
                                <span class="iconify mr-1" data-icon="mdi:beach"></span>
                            @elseif($destination['category'] == 'Gunung')
                                <span class="iconify mr-1" data-icon="mdi:image-filter-hdr"></span>
                            @elseif($destination['category'] == 'Air Terjun')
                                <span class="iconify mr-1" data-icon="mdi:water"></span>
                            @elseif($destination['category'] == 'Taman')
                                <span class="iconify mr-1" data-icon="mdi:flower"></span>
                            @elseif($destination['category'] == 'Danau')
                                <span class="iconify mr-1" data-icon="mdi:waves"></span>
                            @else
                                <span class="iconify mr-1" data-icon="mdi:pine-tree"></span>
                            @endif
                            {{ $destination['category'] }}
                        </span>
                    </div>
                    
                    <!-- Interactive Favorite Button -->
                    <button class="favorite-btn absolute top-4 left-4 w-12 h-12 bg-white bg-opacity-90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all transform hover:scale-110 shadow-lg">
                        <span class="iconify text-xl" data-icon="mdi:heart-outline"></span>
                    </button>
                    
                    <!-- Enhanced Price Tag -->
                    <div class="absolute bottom-4 left-4 transform group-hover:scale-110 transition-transform">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-2 rounded-xl font-bold text-sm flex items-center shadow-xl">
                            <span class="iconify mr-2" data-icon="mdi:ticket"></span>
                            {{ $destination['price'] }}
                        </div>
                    </div>
                    
                    <!-- View Count -->
                    <div class="absolute bottom-4 right-4 bg-black bg-opacity-50 backdrop-blur-sm px-3 py-1 rounded-full text-white text-sm">
                        <span class="iconify mr-1" data-icon="mdi:eye"></span>
                        <span class="view-count">{{ rand(100, 999) }}</span>
                    </div>
                </div>
                
                <!-- Enhanced Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors line-clamp-1">
                        {{ $destination['title'] }}
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">
                        {{ $destination['description'] }}
                    </p>
                    
                    <!-- Enhanced Info Row -->
                    <div class="flex items-center justify-between mb-4 text-sm">
                        <div class="flex items-center space-x-1 text-yellow-400">
                            @for($i = 0; $i < 4; $i++)
                                <span class="iconify star-icon" data-icon="mdi:star"></span>
                            @endfor
                            <span class="iconify star-icon" data-icon="mdi:star-half-full"></span>
                            <span class="text-gray-600 ml-2 font-semibold">(4.5)</span>
                        </div>
                        <div class="flex items-center text-gray-500 bg-gray-100 px-3 py-1 rounded-lg">
                            <span class="iconify mr-1" data-icon="mdi:clock-outline"></span>
                            <span class="font-medium">{{ $destination['open_hours'] }}</span>
                        </div>
                    </div>
                    
                    <!-- Enhanced Location -->
                    <div class="flex items-start text-gray-500 text-sm mb-4 bg-gray-50 p-3 rounded-lg">
                        <span class="iconify mr-2 mt-1 text-purple-600" data-icon="mdi:map-marker"></span>
                        <span class="line-clamp-1 flex-1">{{ $destination['location'] }}</span>
                    </div>
                    
                    <!-- Enhanced Button -->
                    <a href="{{ route('destinasi.show', $destination['id']) }}" 
                       class="block w-full text-center bg-gradient-to-r from-purple-600 to-purple-700 text-white py-3 rounded-xl font-semibold hover:from-purple-700 hover:to-purple-800 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl relative overflow-hidden group">
                        <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></span>
                        <span class="relative z-10 flex items-center justify-center">
                            <span class="iconify mr-2" data-icon="mdi:eye"></span>
                            Lihat Detail
                        </span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- No Results Message -->
        <div id="no-results" class="hidden text-center py-16">
            <span class="iconify text-6xl text-gray-300 mb-4" data-icon="mdi:map-marker-off"></span>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">Tidak Ada Destinasi Ditemukan</h3>
            <p class="text-gray-500">Coba ubah filter atau kata kunci pencarian Anda</p>
        </div>
        
        <!-- Enhanced Pagination -->
        <div id="pagination-container" class="mt-16 flex justify-center" data-aos="fade-up">
            <div class="flex items-center space-x-2">
                <button id="prev-page" class="pagination-btn px-4 py-3 border-2 border-gray-300 rounded-xl hover:border-purple-500 hover:text-purple-600 hover:bg-purple-50 transition-all disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    <span class="iconify text-xl" data-icon="mdi:chevron-left"></span>
                </button>
                
                <div id="page-numbers" class="flex items-center space-x-2">
                    <!-- Pages will be generated by JavaScript -->
                </div>
                
                <button id="next-page" class="pagination-btn px-4 py-3 border-2 border-gray-300 rounded-xl hover:border-purple-500 hover:text-purple-600 hover:bg-purple-50 transition-all">
                    <span class="iconify text-xl" data-icon="mdi:chevron-right"></span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced CTA Section -->
<section class="py-20 animated-gradient text-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl float-animation"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-300 opacity-10 rounded-full blur-3xl float-animation" style="animation-delay: 1.5s;"></div>
    
    <div class="container mx-auto px-4 text-center relative z-10" data-aos="zoom-in">
        <div class="mb-6 inline-block">
            <span class="iconify text-7xl animate-bounce" data-icon="mdi:bell-ring"></span>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Ingin Mendapat Info Terbaru?</h2>
        <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto">
            Daftarkan email Anda untuk mendapatkan update destinasi wisata terbaru dan penawaran menarik
        </p>
        <div class="max-w-md mx-auto">
            <div class="flex gap-2">
                <input type="email" 
                       id="cta-email"
                       placeholder="Masukkan email Anda" 
                       class="flex-1 px-6 py-4 rounded-xl text-gray-900 focus:outline-none focus:ring-4 focus:ring-yellow-300 transition-all">
                <button id="cta-subscribe" class="bg-yellow-400 hover:bg-yellow-500 text-purple-900 px-8 py-4 rounded-xl font-semibold transition-all transform hover:scale-105 flex items-center space-x-2 shadow-xl">
                    <span>Daftar</span>
                    <span class="iconify" data-icon="mdi:send"></span>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<!-- AOS Library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
    
    // State Management
    let currentPage = 1;
    const itemsPerPage = 6;
    let filteredDestinations = [];
    let allDestinations = [];
    
    // Get all destination cards
    const destinationCards = Array.from(document.querySelectorAll('.destination-card'));
    allDestinations = destinationCards;
    filteredDestinations = destinationCards;
    
    // Elements
    const searchInput = document.getElementById('search-input');
    const searchClear = document.getElementById('search-clear');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const sortSelect = document.getElementById('sort-select');
    const loadingIndicator = document.getElementById('loading-indicator');
    const showingCount = document.getElementById('showing-count');
    const totalCount = document.getElementById('total-count');
    const noResults = document.getElementById('no-results');
    const destinationsGrid = document.getElementById('destinations-grid');
    const prevPageBtn = document.getElementById('prev-page');
    const nextPageBtn = document.getElementById('next-page');
    const pageNumbers = document.getElementById('page-numbers');
    
    // Stagger Animation for Cards
    function animateCards() {
        const visibleCards = destinationsGrid.querySelectorAll('.destination-card:not([style*="display: none"])');
        visibleCards.forEach((card, index) => {
            setTimeout(() => {
                card.classList.add('visible');
            }, index * 100);
        });
    }
    
    // Initial animation
    setTimeout(animateCards, 100);
    
    // Filter Function
    function applyFilters() {
        loadingIndicator.classList.remove('hidden');
        
        setTimeout(() => {
            const searchTerm = searchInput.value.toLowerCase();
            const activeCategory = document.querySelector('.filter-btn.active').getAttribute('data-category');
            
            filteredDestinations = allDestinations.filter(card => {
                const cardName = card.getAttribute('data-name');
                const cardCategory = card.getAttribute('data-category');
                
                const matchesSearch = cardName.includes(searchTerm);
                const matchesCategory = activeCategory === 'all' || 
                                       cardCategory === activeCategory || 
                                       (activeCategory === 'other' && !['Pantai', 'Gunung', 'Air Terjun'].includes(cardCategory));
                
                return matchesSearch && matchesCategory;
            });
            
            currentPage = 1;
            updateDisplay();
            loadingIndicator.classList.add('hidden');
        }, 300);
    }
    
    // Sort Function
    function sortDestinations(sortType) {
        filteredDestinations.sort((a, b) => {
            switch(sortType) {
                case 'name':
                    return a.getAttribute('data-name').localeCompare(b.getAttribute('data-name'));
                case 'price-low':
                    return parseInt(a.getAttribute('data-price').replace(/\D/g, '')) - 
                           parseInt(b.getAttribute('data-price').replace(/\D/g, ''));
                case 'price-high':
                    return parseInt(b.getAttribute('data-price').replace(/\D/g, '')) - 
                           parseInt(a.getAttribute('data-price').replace(/\D/g, ''));
                case 'rating':
                    return parseFloat(b.getAttribute('data-rating')) - 
                           parseFloat(a.getAttribute('data-rating'));
                default:
                    return 0;
            }
        });
        
        updateDisplay();
    }
    
    // Update Display Function
    function updateDisplay() {
        // Hide all cards first
        allDestinations.forEach(card => {
            card.style.display = 'none';
            card.classList.remove('visible');
        });
        
        // Show/hide no results message
        if (filteredDestinations.length === 0) {
            noResults.classList.remove('hidden');
            document.getElementById('pagination-container').classList.add('hidden');
        } else {
            noResults.classList.add('hidden');
            document.getElementById('pagination-container').classList.remove('hidden');
            
            // Calculate pagination
            const totalPages = Math.ceil(filteredDestinations.length / itemsPerPage);
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = Math.min(startIndex + itemsPerPage, filteredDestinations.length);
            
            // Show cards for current page
            for (let i = startIndex; i < endIndex; i++) {
                filteredDestinations[i].style.display = 'block';
            }
            
            // Animate visible cards
            setTimeout(animateCards, 50);
            
            // Update counts
            showingCount.textContent = filteredDestinations.length;
            totalCount.textContent = allDestinations.length;
            
            // Update pagination buttons
            updatePagination(totalPages);
        }
        
        // Scroll to top of results
        destinationsGrid.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    
    // Update Pagination Function
    function updatePagination(totalPages) {
        // Update prev/next buttons
        prevPageBtn.disabled = currentPage === 1;
        nextPageBtn.disabled = currentPage === totalPages;
        
        // Generate page numbers
        pageNumbers.innerHTML = '';
        
        for (let i = 1; i <= totalPages; i++) {
            if (
                i === 1 || 
                i === totalPages || 
                (i >= currentPage - 1 && i <= currentPage + 1)
            ) {
                const pageBtn = document.createElement('button');
                pageBtn.className = `pagination-btn px-4 py-3 rounded-xl font-semibold transition-all ${
                    i === currentPage 
                        ? 'bg-purple-600 text-white shadow-lg' 
                        : 'border-2 border-gray-300 hover:border-purple-500 hover:text-purple-600'
                }`;
                pageBtn.textContent = i;
                pageBtn.addEventListener('click', () => {
                    currentPage = i;
                    updateDisplay();
                });
                pageNumbers.appendChild(pageBtn);
            } else if (
                i === currentPage - 2 || 
                i === currentPage + 2
            ) {
                const dots = document.createElement('span');
                dots.className = 'px-2 text-gray-400';
                dots.textContent = '...';
                pageNumbers.appendChild(dots);
            }
        }
    }
    
    // Search Input Event
    searchInput.addEventListener('input', function() {
        if (this.value) {
            searchClear.classList.remove('hidden');
        } else {
            searchClear.classList.add('hidden');
        }
        applyFilters();
    });
    
    // Clear Search
    searchClear.querySelector('button')?.addEventListener('click', function() {
        searchInput.value = '';
        searchClear.classList.add('hidden');
        applyFilters();
    });
    
    // Filter Buttons Event
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active state from all buttons
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-purple-600', 'text-white', 'shadow-lg');
                b.classList.add('bg-gray-100', 'text-gray-700');
            });
            
            // Add active state to clicked button
            this.classList.remove('bg-gray-100', 'text-gray-700');
            this.classList.add('active', 'bg-purple-600', 'text-white', 'shadow-lg');
            
            applyFilters();
        });
    });
    
    // Sort Select Event
    sortSelect.addEventListener('change', function() {
        sortDestinations(this.value);
    });
    
    // Pagination Navigation
    prevPageBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            updateDisplay();
        }
    });
    
    nextPageBtn.addEventListener('click', () => {
        const totalPages = Math.ceil(filteredDestinations.length / itemsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            updateDisplay();
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
                
                // Floating heart animation
                const heart = document.createElement('div');
                heart.innerHTML = '<span class="iconify" data-icon="mdi:heart"></span>';
                heart.style.cssText = 'position: absolute; color: red; font-size: 24px; pointer-events: none;';
                heart.classList.add('animate-ping');
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
    
    // CTA Subscribe
    const ctaSubscribe = document.getElementById('cta-subscribe');
    const ctaEmail = document.getElementById('cta-email');
    
    if (ctaSubscribe && ctaEmail) {
        ctaSubscribe.addEventListener('click', function() {
            const email = ctaEmail.value;
            
            if (email && email.includes('@')) {
                this.innerHTML = '<span class="iconify animate-spin" data-icon="mdi:loading"></span>';
                
                setTimeout(() => {
                    this.innerHTML = '<span class="iconify" data-icon="mdi:check"></span> Berhasil!';
                    this.classList.add('bg-green-500');
                    ctaEmail.value = '';
                    
                    // Success notification
                    const notification = document.createElement('div');
                    notification.className = 'fixed top-24 right-4 bg-green-500 text-white px-6 py-3 rounded-xl shadow-lg z-50 fade-in';
                    notification.innerHTML = '<span class="iconify mr-2" data-icon="mdi:check-circle"></span>Terima kasih telah subscribe!';
                    document.body.appendChild(notification);
                    
                    setTimeout(() => notification.remove(), 3000);
                    
                    setTimeout(() => {
                        this.innerHTML = '<span>Daftar</span><span class="iconify ml-2" data-icon="mdi:send"></span>';
                        this.classList.remove('bg-green-500');
                    }, 2000);
                }, 1500);
            } else {
                ctaEmail.classList.add('ring-4', 'ring-red-500');
                setTimeout(() => ctaEmail.classList.remove('ring-4', 'ring-red-500'), 1000);
            }
        });
    }
    
    // Initialize display
    updateDisplay();
    
    console.log('✅ Enhanced Destinasi Page Initialized!');
    console.log('📊 Total Destinations:', allDestinations.length);
    console.log('📄 Items per page:', itemsPerPage);
});
</script>
@endsection