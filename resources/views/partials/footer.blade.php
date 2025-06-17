<footer class="bg-white text-white pt-16">
    <div>
        <div class="px-4 bg-[#2549b1] pt-24 rounded-t-2xl ">
            <div class="grid grid-cols-2 gap-4 mt-8 container mx-auto px-4 max-w-screen-xl">
                <div class="flex justify-right w-full">
                    <h3 class="text-white text-lg font-semibold mb-2">Subscribe to Beckor Insights, our monthly look at
                        the global businesses updates.

                    </h3>

                </div>
                <div class="mb-12 text-center ">
                    <form action="#" method="POST">
                        <input type="email" name="email" placeholder="Enter your email"
                            class="w-1/2 px-4 py-2 text-gray-800 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white mr-4">
                        <button type="submit"
                            class="mt-2 inline-block bg-[#2563eb] text-white font-semibold py-2 px-4 rounded-full hover:bg-white hover:text-[#2563eb] cursor-pointer transition">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div
            class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8 border-b border-white/10 bg-[#1e3a8a] py-12 px-8">
            <!-- Logo and Contact -->
            <div class="col-span-1 md:col-span-3 lg:col-span-2 flex flex-col items-start">
                <div class="flex items-center mb-6">
                    {{-- Logo with Star --}}
                    <img src="{{ asset('images/logo_footer_white.png') }}" alt="{{ config('app.name') }}"
                        class="h-12 w-auto transition-all duration-300">

                </div>
                <p class="text-white/80 mb-2">San Francisco,</p>
                <p class="text-white/80 mb-2">1140 Harrison St, CA 94103</p>
                <p class="text-white/80 mb-2">office@execor.com</p>
                <p class="text-white/80 mb-6">+1(122)800 88 08</p>
                <div class="mt-8">
                    <a href="{{ route('contact') }}"
                        class="inline-block bg-[#2563eb] text-white font-semibold py-3 px-8 rounded-full hover:bg-white hover:text-[#2563eb] transition">
                        Contact US
                    </a>
                </div>
            </div>

            <!-- Categories Links -->
            <div class="col-span-1">
                <h4 class="text-xl font-semibold mb-4">Categories</h4>
                <ul>
                    {{-- To make these links dynamic, you would need to pass a collection of categories to this partial
                    from your view or a View Composer. --}}
                    {{-- Example of how to loop through categories if passed: --}}
                    @foreach($categories as $category)
                        <li class="mb-2"><a href="{{ route('products.by-category', $category->slug) }}"
                                class="text-white/80 hover:text-white transition-colors">{{ $category->name }}</a></li>
                    @endforeach
                    {{-- <li class="mb-2"><a href="{{ route('products.index') }}"
                            class="text-white/80 hover:text-white transition-colors">All Products</a></li> --}}
                </ul>
            </div>

            <!-- Services Links -->
            <div class="col-span-1">
                <h4 class="text-xl font-semibold mb-4">Services</h4>
                <ul class="grid grid-cols-2 gap-x-12">
                    <li class="mb-2"><a href="{{ route('services') }}"
                            class="text-white/80 hover:text-white transition-colors">Our Services</a></li>
                    <li class="mb-2"><a href="{{ url('/services/spare-parts') }}"
                            class="text-white/80 hover:text-white transition-colors">Spare Parts</a></li>
                    <li class="mb-2"><a href="{{ url('/services/in-house-service') }}"
                            class="text-white/80 hover:text-white transition-colors">In-House Service</a></li>
                    <li class="mb-2"><a href="{{ url('/services/field-service') }}"
                            class="text-white/80 hover:text-white transition-colors">Field Service</a></li>
                    <li class="mb-2"><a href="{{ url('/services/commissioning') }}"
                            class="text-white/80 hover:text-white transition-colors">Commissioning</a></li>
                    <li class="mb-2"><a href="{{ url('/services/inspection') }}"
                            class="text-white/80 hover:text-white transition-colors">Inspection</a></li>
                    <li class="mb-2"><a href="{{ url('/services/maintenance') }}"
                            class="text-white/80 hover:text-white transition-colors">Maintenance</a></li>
                    <li class="mb-2"><a href="{{ url('/services/repair') }}"
                            class="text-white/80 hover:text-white transition-colors">Repair</a></li>
                    <li class="mb-2"><a href="{{ url('/services/general-overhaul') }}"
                            class="text-white/80 hover:text-white transition-colors">General Overhaul</a></li>
                    <li class="mb-2"><a href="{{ url('/services/technical-advice') }}"
                            class="text-white/80 hover:text-white transition-colors">Technical Advice</a></li>
                    <li class="mb-2"><a href="{{ url('/services/rental-devices') }}"
                            class="text-white/80 hover:text-white transition-colors">Rental Devices</a></li>
                    <li class="mb-2"><a href="{{ url('/services/replacement') }}"
                            class="text-white/80 hover:text-white transition-colors">Replacement</a></li>
                    <li class="mb-2"><a href="{{ url('/services/service-agreements') }}"
                            class="text-white/80 hover:text-white transition-colors">Service Agreements</a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="col-span-1">
                <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
                <ul>
                    <li class="mb-2"><a href="{{ route('home') }}"
                            class="text-white/80 hover:text-white transition-colors">Home</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}"
                            class="text-white/80 hover:text-white transition-colors">About</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}"
                            class="text-white/80 hover:text-white transition-colors">Services</a></li>
                    <li class="mb-2"><a href="{{ route('blog.index') }}"
                            class="text-white/80 hover:text-white transition-colors">Blogs</a></li>
                    <li class="mb-2"><a href="{{ url('/careers') }}"
                            class="text-white/80 hover:text-white transition-colors">Careers</a></li>
                    <li class="mb-2"><a href="{{ route('contact') }}"
                            class="text-white/80 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="flex flex-col md:flex-row justify-between items-center text-sm text-white bg-[#1e3a8a] py-12  px-4">
            <div class="mb-2 md:mb-0">
                &copy; 2025 Becker. ALL RIGHTS RESERVED
            </div>
            <div class="flex space-x-4 mb-2 md:mb-0">
                <a href="#" class="hover:text-white transition-colors">TERMS</a>
                <a href="#" class="hover:text-white transition-colors">PRIVACY</a>
            </div>
            <div class="flex space-x-4">
                {{-- Social Icons --}}
                <a href="#" class="hover:text-white transition-colors">{{-- X/Twitter Icon --}}<svg
                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.714 11.004h-2.808l-6.591-8.809L8.772 22.25H4.924l7.393-9.313L2.25 2.25h3.308l5.379 7.169L18.244 2.25zM17.291 20.354h2.134L7.715 4.646H5.581l11.71 15.708z" />
                    </svg></a>
                <a href="#" class="hover:text-white transition-colors">{{-- LinkedIn Icon --}}<svg
                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5 1.11-2.5 2.48-2.5 2.48 1.119 2.48 2.5zM.012 21h4.968v-16h-4.968v16zM23.97 15.4c0-3.23-.749-5.625-3.993-5.625-1.61 0-2.69 0-3.172.95h-.051V9.25H13.7v11.75h4.082v-6.57c0-.376.007-.751.019-1.13.078-1.497 1.262-3.043 2.757-3.043 1.96 0 2.744 1.684 2.744 4.188V21h4.08V15.4z" />
                    </svg></a>
                <a href="#" class="hover:text-white transition-colors">{{-- Facebook Icon --}}<svg
                        xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.5-1.333h2.848v-5h-4.498c-4.612 0-5.502 3.017-5.502 5.333v2.667z" />
                    </svg></a>
            </div>
        </div>
    </div>
</footer>
