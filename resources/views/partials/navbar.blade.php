<!-- resources/views/partials/navbar.blade.php -->
<nav class="fixed w-full transition-all duration-300 z-50" data-aos="fade-down" data-aos-delay="600"
    data-aos-duration="1200" data-aos-easing="ease-in-out-cubic" data-aos-anchor-placement="top-center" x-data="{
         isOpen: false,
         isScrolled: false,
         isVisible: true,
         lastScrollY: 0,
         handleScroll() {
             if (window.innerWidth >= 768) { // Only apply on md and up
                 this.isScrolled = (window.pageYOffset > 80);

                 if (window.pageYOffset > this.lastScrollY && window.pageYOffset > 150) {
                     // Scrolling down past a threshold, hide navbar
                     this.isVisible = false;
                 } else if (window.pageYOffset < this.lastScrollY) {
                     this.isVisible = true;
                 }

                 // Always show navbar if at the very top
                 if (window.pageYOffset <= 80) {
                     this.isVisible = true;
                     this.isScrolled = false;
                 }

                 this.lastScrollY = window.pageYOffset;
             } else {
                 this.isScrolled = false;
                 this.isVisible = true;
             }
         }
     }" @scroll.window="handleScroll" :class="{
         'py-3 shadow-none': isScrolled,
         'py-3': !isScrolled,
         'bg-white text-black': isScrolled,
         'bg-transparent text-black': !isScrolled,
         '-translate-y-full': !isVisible,
         'translate-y-0': isVisible
     }" x-show="isVisible" x-transition:enter="transition transform ease-out duration-1000"
    x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition transform ease-in duration-500" x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="-translate-y-full opacity-0">

    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/becker-logo-new.png') }}" alt="{{ config('app.name') }}"
                    class="h-12 w-auto transition-all duration-300">
            </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}"
                class="nav-link font-semibold text-gray-900 relative overflow-hidden group {{ request()->routeIs('home') ? 'nav-link-active' : '' }}">
                <span>Home</span>
                <span
                    class="absolute left-0 bottom-0 w-full h-0.5 bg-[#1e3a8a] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
            <a href="{{ route('about') }}"
                class="nav-link font-semibold text-gray-900 relative overflow-hidden group {{ request()->routeIs('about') ? 'nav-link-active' : '' }}">
                <span>About</span>
                <span
                    class="absolute left-0 bottom-0 w-full h-0.5 bg-[#1e3a8a] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>

            <!-- Services Mega Menu -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <a href="/services"
                    class="nav-link flex items-center font-semibold text-gray-900 relative overflow-hidden group"
                    @click="open = true; $event.preventDefault();">
                    <span>Services</span>
                    <svg class="ml-1 w-4 h-4 transition-transform duration-300"
                        :class="{ 'rotate-180': open || $el.parentElement.parentElement.classList.contains('group-hover') }"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <span
                        class="absolute left-0 bottom-0 w-full h-0.5 bg-[#1e3a8a] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
                <div x-show="open" x-transition
                    class="fixed left-0 right-0 mx-auto top-[70px] max-w-screen-xl w-full bg-white text-black shadow-2xl rounded-2xl p-0 z-50 flex items-stretch"
                    @click.away="open = false" style="display: none; min-width: 320px;">
                    <!-- Left Promo Card -->
                    <div class="flex flex-col justify-between rounded-2xl m-6 p-8 min-w-[320px] max-w-xs"
                        style="background-image: url('{{ asset('images/home-slide-sm.webp') }}'); background-size: cover; background-position: center;">
                        {{-- <div>
                            <div class="text-lg font-semibold text-[#1e3a8a] mb-4">Fresh Perspectives,<br>Unmatched
                                Solutions</div>
                        </div>
                        <a href="#"
                            class="mt-8 inline-flex items-center px-5 py-3 bg-lime-400 text-[#1e3a8a] font-bold rounded-full hover:bg-lime-500 transition">
                            View All
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a> --}}
                    </div>
                    <!-- Right Columns -->
                    <div class="flex-1 p-8">
                        <div>
                            <h5 class="uppercase text-xs font-bold text-gray-500 mb-3">Becker Services</h5>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                                <div>
                                    <h6 class="text-sm font-bold text-[#1e3a8a] mb-2">Parts & Replacement</h6>
                                    <ul class="space-y-2">
                                        <li><a href="/services/spare-parts" class="hover:text-blue-600">Becker Spare
                                                Parts</a></li>
                                        <li><a href="/services/replacement" class="hover:text-blue-600">Replacement</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h6 class="text-sm font-bold text-[#1e3a8a] mb-2">Maintenance & Repair</h6>
                                    <ul class="space-y-2">
                                        <li><a href="/services/inspection" class="hover:text-blue-600">Inspection</a>
                                        </li>
                                        <li><a href="/services/maintenance" class="hover:text-blue-600">Maintenance</a>
                                        </li>
                                        <li><a href="/services/repair" class="hover:text-blue-600">Repair</a></li>
                                        <li><a href="/services/general-overhaul" class="hover:text-blue-600">General
                                                Overhaul</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h6 class="text-sm font-bold text-[#1e3a8a] mb-2">Service Operations</h6>
                                    <ul class="space-y-2">
                                        <li><a href="/services/in-house-service" class="hover:text-blue-600">In-house
                                                Service</a></li>
                                        <li><a href="/services/field-service" class="hover:text-blue-600">Field
                                                Service</a></li>
                                        <li><a href="/services/commissioning"
                                                class="hover:text-blue-600">Commissioning</a></li>
                                        <li><a href="/services/rental-devices" class="hover:text-blue-600">Rental
                                                Devices</a></li>
                                    </ul>
                                </div>
                                <div class="flex flex-col justify-between">
                                    <div>
                                        <h6 class="text-sm font-bold text-[#1e3a8a] mb-2">Support & Solutions</h6>
                                        <ul class="space-y-2">
                                            <li><a href="/services/technical-advice"
                                                    class="hover:text-blue-600">Technical Advice</a></li>
                                            <li><a href="/services/service-agreements"
                                                    class="hover:text-blue-600">Service Agreements</a></li>
                                        </ul>
                                    </div>
                                    <a href="/services"
                                        class="mt-6 inline-flex items-center px-4 py-2 bg-[#1e3a8a] text-white font-semibold rounded-full hover:bg-blue-700 transition self-end shadow">
                                        View All Services
                                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products Mega Menu -->
            <?php
use App\Models\Category;

$productCategories = Category::with('subcategories')->orderBy('name')->get();
            ?>
            <div class="relative group" x-data="{ open: false, openSystems: false }" @mouseenter="open = true"
                @mouseleave="open = false">
                <a href="" class="nav-link flex items-center font-semibold text-gray-900 relative overflow-hidden group"
                    @click="open = !open">
                    <span>Products</span>
                    <svg class="ml-1 w-4 h-4 transition-transform duration-300"
                        :class="{ 'rotate-180': open || $el.parentElement.parentElement.classList.contains('group-hover') }"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <span
                        class="absolute left-0 bottom-0 w-full h-0.5 bg-[#1e3a8a] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
                <div x-show="open" x-transition
                    class="fixed left-0 right-0 mx-auto top-[70px] max-w-screen-xl w-full bg-white text-black shadow-2xl rounded-2xl p-0 z-50 flex items-stretch"
                    @click.away="open = false" style="display: none; min-width: 320px;">
                    <!-- Left Promo Card -->
                    <div class="flex flex-col justify-between rounded-2xl m-6 p-8 min-w-[320px] max-w-xs"
                        style="background-image: url('{{ asset('images/home-slide-sm.webp') }}'); background-size: cover; background-position: center;">
                    </div>
                    <!-- Right Columns -->
                    <div class="flex-1 p-8">
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                            @foreach($productCategories as $category)
                                <div>
                                    <h6 class="text-sm font-bold text-[#1e3a8a] mb-2"><a
                                            href="{{ route('products.by-category', $category->slug) }}"
                                            class="hover:text-blue-700">{{ $category->name }}</a></h6>
                                    <ul class="space-y-2">
                                        @foreach($category->subcategories as $subcategory)
                                            <li><a href="{{ route('products.by-subcategory', $subcategory->slug) }}"
                                                    class="hover:text-blue-700">{{ $subcategory->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                            <!-- Systems Section -->
                            <div>
                                <h6 class="text-sm font-bold text-[#1e3a8a] mb-2 uppercase"><a href="/systems"
                                        class="hover:text-blue-700">
                                        Systems</a></h6>
                                <ul class="space-y-2">
                                    <li><a href="/systems#variair" class="hover:text-blue-700">VARIAIR Central
                                            System</a></li>
                                    <li><a href="/systems#central" class="hover:text-blue-700">Centralised System</a>
                                    </li>
                                    <li><a href="/systems#roots" class="hover:text-blue-700">Roots Booster Packages</a>
                                    </li>
                                    <li><a href="/systems#vessel" class="hover:text-blue-700">Vacuum Systems with
                                            Vessel</a></li>
                                    <li><a href="/systems#controller" class="hover:text-blue-700">VARIAIR
                                            Controller+</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('blog.index') }}"
                class="nav-link font-semibold text-gray-900 relative overflow-hidden group">
                <span>Blog</span>
                <span
                    class="absolute left-0 bottom-0 w-full h-0.5 bg-[#1e3a8a] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
            <a href="{{ route('downloads.index') }}"
                class="nav-link font-semibold text-gray-900 relative overflow-hidden group {{ request()->routeIs('downloads.index') ? 'nav-link-active' : '' }}">
                <span>Downloads</span>
                <span
                    class="absolute left-0 bottom-0 w-full h-0.5 bg-[#1e3a8a] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
            <a href="{{ route('contact') }}"
                class="nav-link font-semibold text-gray-900 relative overflow-hidden group {{ request()->routeIs('contact') ? 'nav-link-active' : '' }}">
                <span>Contact</span>
                <span
                    class="absolute left-0 bottom-0 w-full h-0.5 bg-[#1e3a8a] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button @click="isOpen = !isOpen" class="focus:outline-none"
                :class="{ 'text-white': isScrolled, 'text-gray-700': !isScrolled }">
                <svg class="h-6 w-6" x-show="!isOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="h-6 w-6" x-show="isOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="md:hidden transition-all duration-300 fixed inset-0 z-50 overflow-y-auto h-screen bg-[#1e3a8a] text-white"
        x-show="isOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1">
        <div class="px-6 pt-8 pb-8 space-y-2">
            <div class="flex justify-left mb-6">
                <img src="{{ asset('images/logo_footer_white.png') }}" alt="Becker Logo" class="h-12 w-auto">
            </div>
            <a href="{{ route('home') }}"
                class="block px-3 py-3 rounded-lg font-bold text-white hover:bg-[#2563eb] transition">Home</a>
            <a href="{{ route('about') }}"
                class="block px-3 py-3 rounded-lg font-bold text-white hover:bg-[#2563eb] transition">About</a>
            <a href="/services"
                class="block px-3 py-3 rounded-lg font-bold text-white hover:bg-[#2563eb] transition">Services</a>
            <!-- Systems Mobile Collapsible -->
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex items-center justify-between px-3 py-3 rounded-lg font-bold text-white hover:bg-[#2563eb] transition focus:outline-none">
                    <span>Systems</span>
                    <svg :class="{ 'rotate-180': open }" class="ml-2 w-5 h-5 transition-transform duration-300"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="mt-2 bg-white rounded-xl p-4 text-[#1e3a8a] shadow-lg">
                    <ul class="space-y-2">
                        <li><a href="/systems#variair" class="hover:text-blue-700">VARIAIR</a></li>
                        <li><a href="/systems#central" class="hover:text-blue-700">Central System</a></li>
                        <li><a href="/systems#roots" class="hover:text-blue-700">Roots Booster</a></li>
                        <li><a href="/systems#vessel" class="hover:text-blue-700">Vacuum Systems with Vessel</a></li>
                        <li><a href="/systems#controller" class="hover:text-blue-700">VARIAIR Controller+</a></li>
                    </ul>
                </div>
            </div>
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex items-center justify-between px-3 py-3 rounded-lg font-bold text-white hover:bg-[#2563eb] transition focus:outline-none">
                    <span>Services</span>
                    <svg :class="{ 'rotate-180': open }" class="ml-2 w-5 h-5 transition-transform duration-300"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="mt-2 bg-white rounded-xl p-4 text-[#1e3a8a] shadow-lg">
                    <h5 class="uppercase text-xs font-bold text-gray-500 mb-3">Becker Services</h5>
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <h6 class="text-sm font-bold text-blue-900 mb-2">Parts & Replacement</h6>
                            <ul class="space-y-1">
                                <li><a href="/services/spare-parts" class="hover:text-blue-700">Becker Spare Parts</a>
                                </li>
                                <li><a href="/services/replacement" class="hover:text-blue-700">Replacement</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="text-sm font-bold text-blue-900 mb-2">Maintenance & Repair</h6>
                            <ul class="space-y-1">
                                <li><a href="/services/inspection" class="hover:text-blue-700">Inspection</a></li>
                                <li><a href="/services/maintenance" class="hover:text-blue-700">Maintenance</a></li>
                                <li><a href="/services/repair" class="hover:text-blue-700">Repair</a></li>
                                <li><a href="/services/general-overhaul" class="hover:text-blue-700">General
                                        Overhaul</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="text-sm font-bold text-blue-900 mb-2">Service Operations</h6>
                            <ul class="space-y-1">
                                <li><a href="/services/in-house-service" class="hover:text-blue-700">In-house
                                        Service</a></li>
                                <li><a href="/services/field-service" class="hover:text-blue-700">Field Service</a></li>
                                <li><a href="/services/commissioning" class="hover:text-blue-700">Commissioning</a></li>
                                <li><a href="/services/rental-devices" class="hover:text-blue-700">Rental Devices</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="text-sm font-bold text-blue-900 mb-2">Support & Solutions</h6>
                            <ul class="space-y-1">
                                <li><a href="/services/technical-advice" class="hover:text-blue-700">Technical
                                        Advice</a></li>
                                <li><a href="/services/service-agreements" class="hover:text-blue-700">Service
                                        Agreements</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="/services"
                        class="mt-6 inline-flex items-center px-4 py-2 bg-[#1e3a8a] text-white font-bold rounded-full hover:bg-blue-800 transition self-end shadow">
                        View All Services
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
            <div x-data="{ open: false }">
                <a href="" @click="open = !open"
                    class="w-full flex items-center justify-between px-3 py-3 rounded-lg font-bold text-white hover:bg-[#2563eb] transition focus:outline-none">
                    <span>Products</span>
                    <svg :class="{ 'rotate-180': open }" class="ml-2 w-5 h-5 transition-transform duration-300"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <div x-show="open" x-transition class="mt-2 bg-white rounded-xl p-4 text-[#1e3a8a] shadow-lg">
                    <div class="grid grid-cols-1 gap-4">
                        @foreach($productCategories as $category)
                            <div>
                                <h6 class="text-sm font-bold text-blue-900 mb-2"><a
                                        href="{{ route('products.by-category', $category->slug) }}"
                                        class="hover:text-blue-700">{{ $category->name }}</a></h6>
                                <ul class="space-y-1">
                                    @foreach($category->subcategories as $subcategory)
                                        <li><a href="{{ route('products.by-subcategory', $subcategory->slug) }}"
                                                class="hover:text-blue-700">{{ $subcategory->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    {{-- <a href="{{ route('products.index') }}"
                        class="mt-6 inline-flex items-center px-4 py-2 bg-[#1e3a8a] text-white font-bold rounded-full hover:bg-blue-800 transition self-end shadow">
                        View All Products
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a> --}}
                </div>
            </div>
            <a href="{{ route('blog.index') }}"
                class="block px-3 py-3 rounded-lg font-bold text-white hover:bg-[#2563eb] transition">Blog</a>
            <a href="{{ route('downloads.index') }}"
                class="block px-3 py-3 rounded-lg font-bold text-white hover:bg-[#2563eb] transition">Downloads</a>
            <a href="{{ route('contact') }}"
                class="block px-3 py-3 rounded-lg font-bold text-white hover:bg-[#2563eb] transition">Contact</a>
        </div>
    </div>
</nav>

<!-- Scroll to Top Button -->
<div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 200 })"
    x-show="show" x-transition class="fixed bottom-6 right-6 z-50">
    <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="bg-[#1e3a8a] text-white rounded-full shadow-lg p-3 hover:bg-[#2563eb] transition focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
    </button>
</div>