<!-- resources/views/partials/hero.blade.php -->

<section class="relative h-screen flex items-center overflow-hidden" data-aos="fade-up" data-aos-duration="1000">
    {{-- Replace with the actual path to your theme's hero background image --}}
    <img src="{{ asset('images/homepage/CoverSlide.png') }}" alt="Hero Background"
        class="absolute inset-0 w-full h-full object-cover rounded-4xl p-3">

    {{-- Background Overlay --}}
    {{-- <div class="absolute inset-0 bg-black opacity-80 "></div>
    <!-- Optional: Overlay for better text readability --> --}}

    <div class="relative max-w-7xl mx-auto px-4 w-full text-primary text-left z-10 py-6">
        {{--
        Content Container - Removed horizontal padding from here, added to parent --}}
        <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4 w-full md:w-2/3">Discover Vacuum Pumps and
            Compressors from Becker.
        </h1>

        {{-- Green Line --}}
        <div class="w-16 h-1 bg-blue-500 mb-8"></div> {{-- Placeholder green color, adjust width/height as needed --}}
        <h2 class="text-lg text-gray-700 leading-tight mb-4 w-full md:w-2/3">Innovative customer-oriented
            vacuum and compressed air solutions since 1885.
        </h2>
        {{-- Free Consultation Button --}}
        <a href="{{ route('home') }}" {{-- Update route if needed --}}
            class="inline-block bg-[#1e3a8a] text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-[#2563eb] transition-colors duration-300">Learn
            More</a>
    </div>

    {{-- Bottom Text Elements --}}
    {{-- <div class="absolute bottom-0 left-0 right-0 p-6 z-10">
        <div class="container mx-auto px-4 flex justify-around">
            <a href="#"
                class="text-sm text-black font-semibold tracking-wider bg-white bg-opacity-20 backdrop-blur-sm rounded-sm px-4 py-2">TRUSTED
                PARTNER</a>
            <a href="#"
                class="text-sm text-black font-semibold tracking-wider bg-white bg-opacity-20 backdrop-blur-sm rounded-sm px-4 py-2">FINANCIAL
                SERVICES</a>
            <a href="#"
                class="text-sm text-black font-semibold tracking-wider bg-white bg-opacity-20 backdrop-blur-sm rounded-sm px-4 py-2">INVESTING</a>
        </div>
    </div> --}}
</section>
