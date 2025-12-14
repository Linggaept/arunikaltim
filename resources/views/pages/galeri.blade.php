@extends('layouts.app')

@section('title', 'Galeri - Arunika Kaltim')

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
    
    /* Gallery Item Hover Effect */
    .gallery-item {
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
    }
    
    .gallery-item.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .gallery-item:hover {
        transform: translateY(-10px) scale(1.02);
    }
    
    /* Image Zoom Effect */
    .gallery-image-container {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
    }
    
    .gallery-image-container img {
        transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .gallery-item:hover .gallery-image-container img {
        transform: scale(1.15);
    }
    
    /* Overlay Gradient */
    .overlay-gradient {
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, transparent 100%);
    }
    
    /* Filter Button Animation */
    .filter-btn {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
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
    
    /* Fade In Animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .fade-in {
        animation: fadeIn 0.6s ease forwards;
    }
    
    /* Loading Animation */
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    
    .loading {
        animation: spin 1s linear infinite;
    }
    
    /* Pulse Animation */
    @keyframes pulse-slow {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    
    .pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }
    
    /* Lightbox Animations */
    @keyframes lightboxFadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    @keyframes imageZoomIn {
        from {
            opacity: 0;
            transform: scale(0.8);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    #lightbox.show {
        animation: lightboxFadeIn 0.3s ease;
    }
    
    #lightbox.show #lightbox-image {
        animation: imageZoomIn 0.4s ease;
    }
    
    /* Stat Counter Animation */
    .stat-number {
        transition: transform 0.3s ease;
    }
    
    .stat-card:hover .stat-number {
        transform: scale(1.15);
    }
    
    /* View Toggle Button */
    .view-btn {
        transition: all 0.3s ease;
    }
    
    .view-btn:hover {
        transform: scale(1.1);
    }
    
    /* Masonry Layout */
    .masonry-layout {
        column-count: 4;
        column-gap: 1.5rem;
    }
    
    .masonry-layout .gallery-item {
        break-inside: avoid;
        margin-bottom: 1.5rem;
    }
    
    @media (max-width: 1024px) {
        .masonry-layout {
            column-count: 3;
        }
    }
    
    @media (max-width: 768px) {
        .masonry-layout {
            column-count: 2;
        }
    }
    
    @media (max-width: 640px) {
        .masonry-layout {
            column-count: 1;
        }
    }
    
    /* Like Button Animation */
    @keyframes heartBeat {
        0%, 100% { transform: scale(1); }
        25% { transform: scale(1.3); }
        50% { transform: scale(1.1); }
    }
    
    .heart-beat {
        animation: heartBeat 0.5s ease;
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
                    <span class="iconify mr-2" data-icon="mdi:image-multiple"></span>
                    Koleksi Foto Terbaik
                </span>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Galeri Wisata</h1>
            <p class="text-xl text-gray-100">
                Nikmati keindahan berbagai destinasi wisata melalui koleksi foto-foto menakjubkan yang kami sajikan
            </p>
            
            <!-- Quick Stats -->
            <div class="grid grid-cols-3 gap-6 mt-8">
                <div class="text-center transform hover:scale-110 transition-transform stat-card">
                    <div class="stat-number text-3xl font-bold text-yellow-300">{{ count($galleries) }}+</div>
                    <p class="text-sm text-gray-200">Total Foto</p>
                </div>
                <div class="text-center transform hover:scale-110 transition-transform stat-card">
                    <div class="stat-number text-3xl font-bold text-yellow-300">7</div>
                    <p class="text-sm text-gray-200">Kategori</p>
                </div>
                <div class="text-center transform hover:scale-110 transition-transform stat-card">
                    <div class="stat-number text-3xl font-bold text-yellow-300">2024</div>
                    <p class="text-sm text-gray-200">Tahun</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Filter Section -->
<section class="bg-white shadow-xl rounded-2xl -mt-10 relative z-20 mx-4 md:mx-auto max-w-7xl" data-aos="fade-up">
    <div class="px-6 py-8">
        <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
            <!-- Enhanced Category Filter -->
            <div class="flex flex-wrap gap-3 justify-center lg:justify-start flex-1">
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
                <button class="filter-btn px-6 py-3 rounded-xl font-medium transition-all bg-gray-100 text-gray-700 hover:bg-purple-100 hover:text-purple-600 transform hover:scale-105" data-category="Taman">
                    <span class="iconify mr-2" data-icon="mdi:flower"></span>
                    Taman
                </button>
                <button class="filter-btn px-6 py-3 rounded-xl font-medium transition-all bg-gray-100 text-gray-700 hover:bg-purple-100 hover:text-purple-600 transform hover:scale-105" data-category="Danau">
                    <span class="iconify mr-2" data-icon="mdi:waves"></span>
                    Danau
                </button>
                <button class="filter-btn px-6 py-3 rounded-xl font-medium transition-all bg-gray-100 text-gray-700 hover:bg-purple-100 hover:text-purple-600 transform hover:scale-105" data-category="Hutan">
                    <span class="iconify mr-2" data-icon="mdi:pine-tree"></span>
                    Hutan
                </button>
            </div>
            
            <!-- Enhanced View Toggle -->
            <div class="flex items-center space-x-3">
                <span class="text-gray-600 text-sm font-medium">Tampilan:</span>
                <button id="grid-view" class="view-btn p-3 rounded-xl bg-purple-600 text-white shadow-lg hover:shadow-xl">
                    <span class="iconify text-xl" data-icon="mdi:view-grid"></span>
                </button>
                <button id="masonry-view" class="view-btn p-3 rounded-xl bg-gray-100 text-gray-600 hover:bg-gray-200">
                    <span class="iconify text-xl" data-icon="mdi:view-module"></span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Gallery Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Enhanced Results Info -->
        <div class="flex items-center justify-between mb-8" data-aos="fade-up">
            <div class="flex items-center space-x-4">
                <p class="text-gray-600">
                    Menampilkan <span id="showing-count" class="font-bold text-purple-600 text-lg">0</span> dari 
                    <span id="total-count" class="font-bold text-purple-600 text-lg">{{ count($galleries) }}</span> foto
                </p>
                <div id="loading-indicator" class="hidden">
                    <span class="iconify loading text-purple-600 text-2xl" data-icon="mdi:loading"></span>
                </div>
            </div>
        </div>
        
        <!-- Enhanced Gallery Items -->
        <div id="gallery-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($galleries as $index => $gallery)
            <div class="gallery-item group cursor-pointer" 
                 data-category="{{ $gallery['category'] }}"
                 data-index="{{ $index }}"
                 style="display: none;">
                <div class="gallery-image-container bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl">
                    <div class="relative aspect-square">
                        <img src="{{ $gallery['image'] }}" 
                             alt="{{ $gallery['title'] }}" 
                             class="w-full h-full object-cover"
                             loading="lazy">
                        
                        <!-- Enhanced Overlay -->
                        <div class="absolute inset-0 overlay-gradient opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 flex flex-col justify-between p-6">
                                <!-- Top Section -->
                                <div class="flex items-start justify-between">
                                    <!-- Category Badge -->
                                    <span class="bg-white bg-opacity-90 backdrop-blur-sm px-3 py-2 rounded-full text-xs font-semibold text-purple-600 flex items-center shadow-lg transform translate-y-0 group-hover:-translate-y-1 transition-transform">
                                        @if($gallery['category'] == 'Pantai')
                                            <span class="iconify mr-1" data-icon="mdi:beach"></span>
                                        @elseif($gallery['category'] == 'Gunung')
                                            <span class="iconify mr-1" data-icon="mdi:image-filter-hdr"></span>
                                        @elseif($gallery['category'] == 'Air Terjun')
                                            <span class="iconify mr-1" data-icon="mdi:water"></span>
                                        @elseif($gallery['category'] == 'Taman')
                                            <span class="iconify mr-1" data-icon="mdi:flower"></span>
                                        @elseif($gallery['category'] == 'Danau')
                                            <span class="iconify mr-1" data-icon="mdi:waves"></span>
                                        @else
                                            <span class="iconify mr-1" data-icon="mdi:pine-tree"></span>
                                        @endif
                                        {{ $gallery['category'] }}
                                    </span>
                                    
                                    <!-- Favorite Button -->
                                    <button class="favorite-btn w-12 h-12 bg-white bg-opacity-90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-all transform hover:scale-110 shadow-lg" onclick="event.stopPropagation()">
                                        <span class="iconify text-xl" data-icon="mdi:heart-outline"></span>
                                    </button>
                                </div>
                                
                                <!-- Bottom Section -->
                                <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform">
                                    <h3 class="text-white font-bold text-lg mb-3 line-clamp-2">{{ $gallery['title'] }}</h3>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <button class="like-btn flex items-center space-x-1 text-white hover:text-red-400 transition-colors" onclick="event.stopPropagation()">
                                                <span class="iconify text-xl" data-icon="mdi:heart-outline"></span>
                                                <span class="like-count text-sm font-medium">{{ rand(10, 99) }}</span>
                                            </button>
                                            <button class="flex items-center space-x-1 text-white hover:text-blue-400 transition-colors" onclick="event.stopPropagation()">
                                                <span class="iconify text-xl" data-icon="mdi:share-variant"></span>
                                            </button>
                                        </div>
                                        <button class="text-white hover:text-yellow-400 transition-colors zoom-btn">
                                            <span class="iconify text-2xl" data-icon="mdi:magnify-plus"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- No Results Message -->
        <div id="no-results" class="hidden text-center py-16">
            <span class="iconify text-6xl text-gray-300 mb-4" data-icon="mdi:image-off"></span>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">Tidak Ada Foto Ditemukan</h3>
            <p class="text-gray-500">Coba pilih kategori lain untuk melihat foto</p>
        </div>
        
        <!-- Enhanced Load More Button -->
        <div id="load-more-container" class="text-center mt-12" data-aos="fade-up">
            <button id="load-more-btn" class="inline-flex items-center space-x-2 bg-gradient-to-r from-purple-600 to-purple-700 text-white px-8 py-4 rounded-xl font-semibold hover:from-purple-700 hover:to-purple-800 transform hover:scale-105 transition-all shadow-lg hover:shadow-xl relative overflow-hidden group">
                <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></span>
                <span class="relative z-10 flex items-center space-x-2">
                    <span id="load-more-text">Muat Lebih Banyak</span>
                    <span class="iconify" data-icon="mdi:chevron-down"></span>
                </span>
            </button>
            <p id="load-more-info" class="text-gray-500 text-sm mt-4"></p>
        </div>
    </div>
</section>

<!-- Instagram Section -->
<section class="py-20 animated-gradient text-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl float-animation"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-300 opacity-10 rounded-full blur-3xl float-animation" style="animation-delay: 1.5s;"></div>
    
    <div class="container mx-auto px-4 text-center relative z-10" data-aos="zoom-in">
        <div class="mb-6 inline-block">
            <span class="iconify text-7xl pulse-slow" data-icon="mdi:instagram"></span>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Follow di Instagram</h2>
        <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto">
            Ikuti Instagram kami @wisatalokal untuk mendapatkan update foto dan video terbaru dari destinasi wisata favorit
        </p>
        <a href="https://instagram.com" target="_blank" class="inline-flex items-center space-x-2 bg-white text-purple-600 px-8 py-4 rounded-xl font-semibold hover:bg-yellow-300 hover:text-purple-700 transform hover:scale-105 transition-all shadow-xl">
            <span class="iconify text-xl" data-icon="mdi:instagram"></span>
            <span>Follow @wisatalokal</span>
        </a>
    </div>
</section>

<!-- Enhanced Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 bg-black bg-opacity-95 z-50 hidden items-center justify-center p-4">
    <!-- Close Button -->
    <button id="close-lightbox" class="absolute top-6 right-6 w-14 h-14 bg-white bg-opacity-10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-opacity-20 transition-all text-white transform hover:scale-110 hover:rotate-90 z-50">
        <span class="iconify text-3xl" data-icon="mdi:close"></span>
    </button>
    
    <!-- Navigation Buttons -->
    <button id="prev-image" class="absolute left-6 w-14 h-14 bg-white bg-opacity-10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-opacity-20 transition-all text-white transform hover:scale-110 z-50">
        <span class="iconify text-3xl" data-icon="mdi:chevron-left"></span>
    </button>
    <button id="next-image" class="absolute right-6 w-14 h-14 bg-white bg-opacity-10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-opacity-20 transition-all text-white transform hover:scale-110 z-50">
        <span class="iconify text-3xl" data-icon="mdi:chevron-right"></span>
    </button>
    
    <!-- Image Container -->
    <div class="relative max-w-6xl w-full">
        <img id="lightbox-image" src="" alt="Lightbox" class="w-full h-auto max-h-[80vh] object-contain rounded-2xl shadow-2xl">
        
        <!-- Image Info -->
        <div id="lightbox-info" class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-black/80 to-transparent p-6 rounded-b-2xl">
            <h3 id="lightbox-title" class="text-white text-xl font-bold mb-2"></h3>
            <div class="flex items-center justify-between">
                <span id="lightbox-category" class="text-gray-300 text-sm"></span>
                <span id="lightbox-counter" class="text-gray-300 text-sm"></span>
            </div>
        </div>
    </div>
</div>
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
    const itemsPerPage = 12;
    let filteredGalleries = [];
    let allGalleries = [];
    let currentLightboxIndex = 0;
    
    // Get all gallery items
    const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
    allGalleries = galleryItems;
    filteredGalleries = galleryItems;
    
    // Elements
    const filterBtns = document.querySelectorAll('.filter-btn');
    const loadingIndicator = document.getElementById('loading-indicator');
    const showingCount = document.getElementById('showing-count');
    const totalCount = document.getElementById('total-count');
    const noResults = document.getElementById('no-results');
    const galleryContainer = document.getElementById('gallery-container');
    const loadMoreBtn = document.getElementById('load-more-btn');
    const loadMoreContainer = document.getElementById('load-more-container');
    const loadMoreInfo = document.getElementById('load-more-info');
    const loadMoreText = document.getElementById('load-more-text');
    const gridView = document.getElementById('grid-view');
    const masonryView = document.getElementById('masonry-view');
    
    // Lightbox Elements
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxCategory = document.getElementById('lightbox-category');
    const lightboxCounter = document.getElementById('lightbox-counter');
    const closeLightbox = document.getElementById('close-lightbox');
    const prevImage = document.getElementById('prev-image');
    const nextImage = document.getElementById('next-image');
    
    // Animate Cards Function
    function animateCards(items) {
        items.forEach((item, index) => {
            setTimeout(() => {
                item.classList.add('visible');
            }, index * 50);
        });
    }
    
    // Filter Function
    function applyFilters() {
        loadingIndicator.classList.remove('hidden');
        
        setTimeout(() => {
            const activeCategory = document.querySelector('.filter-btn.active').getAttribute('data-category');
            
            // Hide all items first
            allGalleries.forEach(item => {
                item.classList.remove('visible');
                item.style.display = 'none';
            });
            
            // Filter items
            filteredGalleries = allGalleries.filter(item => {
                const itemCategory = item.getAttribute('data-category');
                return activeCategory === 'all' || itemCategory === activeCategory;
            });
            
            // Reset to page 1
            currentPage = 1;
            updateDisplay();
            loadingIndicator.classList.add('hidden');
        }, 300);
    }
    
    // Update Display Function
    function updateDisplay() {
        // Hide all items
        allGalleries.forEach(item => {
            item.classList.remove('visible');
            item.style.display = 'none';
        });
        
        // Show/hide no results
        if (filteredGalleries.length === 0) {
            noResults.classList.remove('hidden');
            loadMoreContainer.classList.add('hidden');
        } else {
            noResults.classList.add('hidden');
            loadMoreContainer.classList.remove('hidden');
            
            // Calculate items to show
            const itemsToShow = currentPage * itemsPerPage;
            const visibleItems = filteredGalleries.slice(0, Math.min(itemsToShow, filteredGalleries.length));
            
            // Show items
            visibleItems.forEach(item => {
                item.style.display = 'block';
            });
            
            // Animate visible items
            setTimeout(() => animateCards(visibleItems), 50);
            
            // Update counts
            showingCount.textContent = visibleItems.length;
            totalCount.textContent = allGalleries.length;
            
            // Update load more button
            if (visibleItems.length >= filteredGalleries.length) {
                loadMoreBtn.style.display = 'none';
                loadMoreInfo.textContent = 'Semua foto telah ditampilkan';
            } else {
                loadMoreBtn.style.display = 'inline-flex';
                const remaining = filteredGalleries.length - visibleItems.length;
                loadMoreInfo.textContent = `${remaining} foto lagi tersedia`;
            }
        }
    }
    
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
    
    // Load More Button Event
    loadMoreBtn.addEventListener('click', function() {
        // Show loading state
        loadMoreText.textContent = 'Memuat...';
        this.disabled = true;
        
        setTimeout(() => {
            currentPage++;
            updateDisplay();
            
            // Reset button
            loadMoreText.textContent = 'Muat Lebih Banyak';
            this.disabled = false;
            
            // Smooth scroll to new items
            const firstNewItem = document.querySelector(`.gallery-item:nth-child(${(currentPage - 1) * itemsPerPage + 1})`);
            if (firstNewItem) {
                firstNewItem.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }, 800);
    });
    
    // View Toggle
    gridView.addEventListener('click', function() {
        galleryContainer.className = 'grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6';
        this.classList.add('bg-purple-600', 'text-white', 'shadow-lg');
        this.classList.remove('bg-gray-100', 'text-gray-600');
        masonryView.classList.remove('bg-purple-600', 'text-white', 'shadow-lg');
        masonryView.classList.add('bg-gray-100', 'text-gray-600');
        
        // Re-animate items
        setTimeout(() => {
            const visibleItems = Array.from(document.querySelectorAll('.gallery-item[style*="display: block"]'));
            visibleItems.forEach(item => item.classList.remove('visible'));
            setTimeout(() => animateCards(visibleItems), 50);
        }, 100);
    });
    
    masonryView.addEventListener('click', function() {
        galleryContainer.className = 'masonry-layout';
        this.classList.add('bg-purple-600', 'text-white', 'shadow-lg');
        this.classList.remove('bg-gray-100', 'text-gray-600');
        gridView.classList.remove('bg-purple-600', 'text-white', 'shadow-lg');
        gridView.classList.add('bg-gray-100', 'text-gray-600');
        
        // Re-animate items
        setTimeout(() => {
            const visibleItems = Array.from(document.querySelectorAll('.gallery-item[style*="display: block"]'));
            visibleItems.forEach(item => item.classList.remove('visible'));
            setTimeout(() => animateCards(visibleItems), 50);
        }, 100);
    });
    
    // Lightbox Functionality
    function openLightbox(index) {
        const visibleItems = filteredGalleries.filter(item => item.style.display === 'block');
        currentLightboxIndex = visibleItems.indexOf(allGalleries[index]);
        
        const item = allGalleries[index];
        const img = item.querySelector('img');
        const title = item.querySelector('h3').textContent;
        const category = item.getAttribute('data-category');
        
        lightboxImage.src = img.src;
        lightboxTitle.textContent = title;
        lightboxCategory.textContent = category;
        lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${visibleItems.length}`;
        
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex', 'show');
        document.body.style.overflow = 'hidden';
    }
    
    function closeLightboxModal() {
        lightbox.classList.remove('show');
        setTimeout(() => {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
        }, 300);
        document.body.style.overflow = '';
    }
    
    function navigateLightbox(direction) {
        const visibleItems = filteredGalleries.filter(item => item.style.display === 'block');
        currentLightboxIndex += direction;
        
        if (currentLightboxIndex < 0) {
            currentLightboxIndex = visibleItems.length - 1;
        } else if (currentLightboxIndex >= visibleItems.length) {
            currentLightboxIndex = 0;
        }
        
        const item = visibleItems[currentLightboxIndex];
        const img = item.querySelector('img');
        const title = item.querySelector('h3').textContent;
        const category = item.getAttribute('data-category');
        
        lightboxImage.style.opacity = '0';
        setTimeout(() => {
            lightboxImage.src = img.src;
            lightboxTitle.textContent = title;
            lightboxCategory.textContent = category;
            lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${visibleItems.length}`;
            lightboxImage.style.opacity = '1';
        }, 200);
    }
    
    // Gallery Item Click Event
    galleryItems.forEach((item, index) => {
        const zoomBtn = item.querySelector('.zoom-btn');
        if (zoomBtn) {
            zoomBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                openLightbox(index);
            });
        }
        
        item.addEventListener('click', function() {
            openLightbox(index);
        });
    });
    
    // Lightbox Controls
    closeLightbox.addEventListener('click', closeLightboxModal);
    
    prevImage.addEventListener('click', function(e) {
        e.stopPropagation();
        navigateLightbox(-1);
    });
    
    nextImage.addEventListener('click', function(e) {
        e.stopPropagation();
        navigateLightbox(1);
    });
    
    // Close on background click
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightboxModal();
        }
    });
    
    // Keyboard Navigation
    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('hidden')) {
            if (e.key === 'Escape') {
                closeLightboxModal();
            } else if (e.key === 'ArrowLeft') {
                navigateLightbox(-1);
            } else if (e.key === 'ArrowRight') {
                navigateLightbox(1);
            }
        }
    });
    
    // Favorite Button Toggle
    document.querySelectorAll('.favorite-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const icon = this.querySelector('.iconify');
            
            if (icon.getAttribute('data-icon') === 'mdi:heart-outline') {
                icon.setAttribute('data-icon', 'mdi:heart');
                this.classList.add('bg-red-500', 'text-white', 'heart-beat');
                
                // Show notification
                showNotification('Ditambahkan ke favorit!', 'success');
                
                setTimeout(() => {
                    this.classList.remove('heart-beat');
                }, 500);
            } else {
                icon.setAttribute('data-icon', 'mdi:heart-outline');
                this.classList.remove('bg-red-500', 'text-white');
                
                showNotification('Dihapus dari favorit', 'info');
            }
        });
    });
    
    // Like Button Toggle
    document.querySelectorAll('.like-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const icon = this.querySelector('.iconify');
            const countEl = this.querySelector('.like-count');
            let count = parseInt(countEl.textContent);
            
            if (icon.getAttribute('data-icon') === 'mdi:heart-outline') {
                icon.setAttribute('data-icon', 'mdi:heart');
                this.classList.add('text-red-500');
                countEl.textContent = count + 1;
                this.classList.add('heart-beat');
                
                setTimeout(() => {
                    this.classList.remove('heart-beat');
                }, 500);
            } else {
                icon.setAttribute('data-icon', 'mdi:heart-outline');
                this.classList.remove('text-red-500');
                countEl.textContent = count - 1;
            }
        });
    });
    
    // Notification Function
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        const bgColor = type === 'success' ? 'bg-green-500' : type === 'error' ? 'bg-red-500' : 'bg-blue-500';
        const icon = type === 'success' ? 'mdi:check-circle' : type === 'error' ? 'mdi:alert-circle' : 'mdi:information';
        
        notification.className = `fixed top-24 right-4 ${bgColor} text-white px-6 py-3 rounded-xl shadow-lg z-50 fade-in flex items-center space-x-2`;
        notification.innerHTML = `
            <span class="iconify" data-icon="${icon}"></span>
            <span>${message}</span>
        `;
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }
    
    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
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
    
    // Initialize display
    updateDisplay();
    
    console.log('✅ Enhanced Gallery Page Initialized!');
    console.log('📊 Total Photos:', allGalleries.length);
    console.log('📄 Items per page:', itemsPerPage);
});
</script>
@endsection