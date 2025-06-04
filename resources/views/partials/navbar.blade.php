<!-- resources/views/partials/navbar.blade.php -->
<nav class="fixed w-full transition-all duration-300 z-50"
     data-aos="fade-down"
     data-aos-delay="600"
     data-aos-duration="1200"
     data-aos-easing="ease-in-out-cubic"
     data-aos-anchor-placement="top-center"
     x-data="{
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
     }"
     @scroll.window="handleScroll"
     :class="{
         'py-3 shadow-none': isScrolled,
         'py-3': !isScrolled,
         'bg-white text-black': isScrolled,
         'bg-transparent text-black': !isScrolled,
         '-translate-y-full': !isVisible,
         'translate-y-0': isVisible
     }"
     x-show="isVisible"
     x-transition:enter="transition ease-in-out duration-500"
     x-transition:enter-start="opacity-0 -translate-y-10"
     x-transition:enter-end="opacity-100 translate-y-0"
     x-transition:leave="transition ease-in-out duration-500"
     x-transition:leave-start="opacity-100 translate-y-0"
     x-transition:leave-end="opacity-0 -translate-y-10"
>

    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/becker-logo-new.png') }}" alt="{{ config('app.name') }}" class="h-12 w-auto transition-all duration-300">
            </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'nav-link-active' : '' }}"><span>Home</span></a>
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('about') ? 'nav-link-active' : '' }}"><span>About</span></a>
            <!-- Services Mega Menu -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <a href="#" class="nav-link flex items-center" @click.prevent="open = !open">
                    <span>Services</span>
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <div x-show="open" x-transition
                    class="fixed left-0 right-0 mx-auto top-[70px] max-w-screen-xl w-full bg-white text-black shadow-2xl rounded-2xl p-0 z-50 flex items-stretch"
                    @click.away="open = false" style="display: none; min-width: 320px;">
                    <!-- Left Promo Card -->
                    <div class="flex flex-col justify-between rounded-2xl m-6 p-8 min-w-[320px] max-w-xs" style="background-image: url('{{ asset('images/home-slide-sm.webp') }}'); background-size: cover; background-position: center; height: 300px;">
                        {{-- <div>
                            <div class="text-lg font-semibold text-[#1e3a8a] mb-4">Fresh Perspectives,<br>Unmatched Solutions</div>
                        </div>
                        <a href="#" class="mt-8 inline-flex items-center px-5 py-3 bg-lime-400 text-[#1e3a8a] font-bold rounded-full hover:bg-lime-500 transition">
                            View All
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a> --}}
                    </div>
                    <!-- Right Columns -->
                    <div class="flex-1 grid grid-cols-2 md:grid-cols-3 gap-8 p-8">
                        <div>
                            <h5 class="uppercase text-xs font-bold text-gray-500 mb-3">Consulting</h5>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-600">Strategy</a></li>
                                <li><a href="#" class="hover:text-blue-600">Operations</a></li>
                                <li><a href="#" class="hover:text-blue-600">Digital</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="uppercase text-xs font-bold text-gray-500 mb-3">Audit & Assurance</h5>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-600">Internal Audit</a></li>
                                <li><a href="#" class="hover:text-blue-600">External Audit</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="uppercase text-xs font-bold text-gray-500 mb-3">Risk & Financial Advisory</h5>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-600">Risk Management</a></li>
                                <li><a href="#" class="hover:text-blue-600">Financial Planning</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="uppercase text-xs font-bold text-gray-500 mb-3">Other Services</h5>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-600">AI & Analytics</a></li>
                                <li><a href="#" class="hover:text-blue-600">Tax Services</a></li>
                                <li><a href="#" class="hover:text-blue-600">M&A & Restructuring</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products Mega Menu -->
            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <a href="#" class="nav-link flex items-center" @click.prevent="open = !open">
                    <span>Products</span>
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <div x-show="open" x-transition
                    class="fixed left-0 right-0 mx-auto top-[70px] max-w-screen-xl w-full bg-white text-black shadow-2xl rounded-2xl p-0 z-50 flex items-stretch"
                    @click.away="open = false" style="display: none; min-width: 320px;">
                    <!-- Left Promo Card -->
                    <div class="flex flex-col justify-between rounded-2xl m-6 p-8 min-w-[320px] max-w-xs" style="background-image: url('{{ asset('images/home-slide-sm.webp') }}'); background-size: cover; background-position: center; height: 300px;">
                        {{-- <div>
                            <div class="text-lg font-semibold text-[#1e3a8a] mb-4">Discover Our<br>Product Suite</div>
                        </div> --}}
                        {{-- <a href="#" class="mt-8 inline-flex items-center px-5 py-3 bg-lime-400 text-[#1e3a8a] font-bold rounded-full hover:bg-lime-500 transition">
                            View All
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a> --}}
                    </div>
                    <!-- Right Columns -->
                    <div class="flex-1 grid grid-cols-2 md:grid-cols-3 gap-8 p-8" style="height: 300px;">
                        <div>
                            <h5 class="uppercase text-xs font-bold text-gray-500 mb-3">Core Products</h5>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-600">Product One</a></li>
                                <li><a href="#" class="hover:text-blue-600">Product Two</a></li>
                                <li><a href="#" class="hover:text-blue-600">Product Three</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="uppercase text-xs font-bold text-gray-500 mb-3">Add-ons</h5>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-600">Add-on One</a></li>
                                <li><a href="#" class="hover:text-blue-600">Add-on Two</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="uppercase text-xs font-bold text-gray-500 mb-3">Resources</h5>
                            <ul class="space-y-2">
                                <li><a href="#" class="hover:text-blue-600">Documentation</a></li>
                                <li><a href="#" class="hover:text-blue-600">API Reference</a></li>
                                <li><a href="#" class="hover:text-blue-600">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('home') ? 'nav-link-active' : '' }}" class="nav-link"><span>Blog</span></a>
            <a href="{{ route('home') ? 'nav-link-active' : '' }}" class="nav-link"><span>Contact</span></a>
            <a href="{{ route('home') }}" class="nav-button">Get Started</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button @click="isOpen = !isOpen" class="focus:outline-none"
                    :class="{ 'text-white': isScrolled, 'text-gray-700': !isScrolled }">
                <svg class="h-6 w-6" x-show="!isOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg class="h-6 w-6" x-show="isOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="md:hidden transition-all duration-300"
         :class="{ 'bg-blue-600 text-white': isScrolled, 'bg-white text-gray-700': !isScrolled }"
         x-show="isOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
    >
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md {{ request()->routeIs('home') ? 'nav-link-active' : '' }}"
               :class="{ 'hover:bg-blue-500': isScrolled, 'hover:bg-gray-100': !isScrolled }">Home</a>
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md {{ request()->routeIs('about') ? 'nav-link-active' : '' }}"
               :class="{ 'hover:bg-blue-500': isScrolled, 'hover:bg-gray-100': !isScrolled }">About</a>
            <!-- Services & Products Mega Menu Mobile -->
            <div x-data="{ open: false }">
                <button @click="open = !open" class="block w-full text-left px-3 py-2 rounded-md focus:outline-none flex items-center justify-between"
                    :class="{ 'hover:bg-blue-500': isScrolled, 'hover:bg-gray-100': !isScrolled }">
                    <span>Services</span>
                    <svg :class="{ 'rotate-180': open }" class="ml-2 w-4 h-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-transition class="pl-2 py-2 space-y-2 bg-white text-black rounded-2xl shadow-md mt-1" style="display: none;">
                    <!-- Promo Card -->
                    <div class="bg-[#e9e9e3] rounded-2xl p-4 mb-4">
                        {{-- <div class="text-base font-semibold text-[#1e3a8a] mb-2">Fresh Perspectives, Unmatched Solutions</div>
                        <a href="#" class="mt-4 inline-flex items-center px-4 py-2 bg-lime-400 text-[#1e3a8a] font-bold rounded-full hover:bg-lime-500 transition">
                            View All
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a> --}}
                    </div>
                    <div>
                        <h5 class="uppercase text-xs font-bold text-gray-500 mb-2">Services</h5>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:text-blue-600">Consulting</a></li>
                            <li><a href="#" class="hover:text-blue-600">Audit & Assurance</a></li>
                            <li><a href="#" class="hover:text-blue-600">Risk & Financial Advisory</a></li>
                            <li><a href="#" class="hover:text-blue-600">AI & Analytics</a></li>
                            <li><a href="#" class="hover:text-blue-600">Tax Services</a></li>
                            <li><a href="#" class="hover:text-blue-600">M&A & Restructuring</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="uppercase text-xs font-bold text-gray-500 mb-2">Products</h5>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:text-blue-600">Product One</a></li>
                            <li><a href="#" class="hover:text-blue-600">Product Two</a></li>
                            <li><a href="#" class="hover:text-blue-600">Product Three</a></li>
                            <li><a href="#" class="hover:text-blue-600">Product Four</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="uppercase text-xs font-bold text-gray-500 mb-2">More</h5>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:text-blue-600">Case Studies</a></li>
                            <li><a href="#" class="hover:text-blue-600">Resources</a></li>
                            <li><a href="#" class="hover:text-blue-600">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="block w-full text-left px-3 py-2 rounded-md focus:outline-none flex items-center justify-between"
                    :class="{ 'hover:bg-blue-500': isScrolled, 'hover:bg-gray-100': !isScrolled }">
                    <span>Products</span>
                    <svg :class="{ 'rotate-180': open }" class="ml-2 w-4 h-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-transition class="pl-2 py-2 space-y-2 bg-white text-black rounded-2xl shadow-md mt-1" style="display: none;">
                    <!-- Promo Card -->
                    <div class="bg-[#e9e9e3] rounded-2xl p-4 mb-4">
                        <div class="text-base font-semibold text-[#1e3a8a] mb-2">Discover Our Product Suite</div>
                        <a href="#" class="mt-4 inline-flex items-center px-4 py-2 bg-lime-400 text-[#1e3a8a] font-bold rounded-full hover:bg-lime-500 transition">
                            View All
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                    <div>
                        <h5 class="uppercase text-xs font-bold text-gray-500 mb-2">Core Products</h5>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:text-blue-600">Product One</a></li>
                            <li><a href="#" class="hover:text-blue-600">Product Two</a></li>
                            <li><a href="#" class="hover:text-blue-600">Product Three</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="uppercase text-xs font-bold text-gray-500 mb-2">Add-ons</h5>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:text-blue-600">Add-on One</a></li>
                            <li><a href="#" class="hover:text-blue-600">Add-on Two</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="uppercase text-xs font-bold text-gray-500 mb-2">Resources</h5>
                        <ul class="space-y-1">
                            <li><a href="#" class="hover:text-blue-600">Documentation</a></li>
                            <li><a href="#" class="hover:text-blue-600">API Reference</a></li>
                            <li><a href="#" class="hover:text-blue-600">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="{{ route('home') ? 'nav-link-active' : '' }}" class="block px-3 py-2 rounded-md"
               :class="{ 'hover:bg-blue-500': isScrolled, 'hover:bg-gray-100': !isScrolled }">Blog</a>
            <a href="{{ route('home') ? 'nav-link-active' : '' }}" class="block px-3 py-2 rounded-md"
               :class="{ 'hover:bg-blue-500': isScrolled, 'hover:bg-gray-100': !isScrolled }">Contact</a>
            <a href="{{ route('home') }}" class="block px-3 py-2 mt-4 text-center bg-primary text-white rounded-md hover:bg-primary-dark transition-colors duration-200">Get Started</a>
        </div>
    </div>
</nav>

<!-- Scroll to Top Button -->
<div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 200 })" x-show="show" x-transition
     class="fixed bottom-6 right-6 z-50">
    <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="bg-[#1e3a8a] text-white rounded-full shadow-lg p-3 hover:bg-[#2563eb] transition focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg>
    </button>
</div>

