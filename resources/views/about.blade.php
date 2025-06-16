@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-br from-[#F6F5F2] to-white min-h-screen">

        <div class="max-w-7xl mx-auto py-16 px-4 flex flex-col items-start " data-aos="fade-up" data-aos-duration="800">

            <h1 class="text-4xl md:text-5xl my-8 text-black font-bold leading-tight ">
                Becker <span class="text-[#1e3a8a]">Your leading manufacturer</span><br />
                of vacuum pumps
            </h1>
            <div class="w-full mt-4">
                <img src="{{ asset('images/Becker_About.jpg') }}" alt="Financial Well-Being"
                    class="rounded-3xl w-full object-cover h-[400px] md:h-[500px]" />
            </div>
        </div>
    </div>

    @include('partials.product-range-section')

    <section class="py-20 bg-white" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex flex-col md:flex-row md:items-start md:justify-between mb-12 gap-8">
                {{-- <div class="md:w-2/3">
                    <h2 class="text-4xl md:text-5xl mb-4 leading-tight">
                        Personalized <span class="text-[#1e3a8a]">Financial Guidance</span><br />
                        Rooted in Core Values
                    </h2>
                </div>
                <div class="md:w-1/3 text-gray-700 text-base">
                    Every client is unique, and every financial journey is different. At Finovate Financial Advisors, we
                    embrace this individuality while staying true to our core principles and values. Our success is built on
                    a deep understanding of these guiding principles, allowing us to navigate the ever-evolving financial
                    landscape and deliver tailored solutions that truly serve our clients.
                </div> --}}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Left Card -->
                <div class="rounded-3xl bg-[#2549b1] p-8 flex flex-col text-white relative min-h-[350px]">
                    {{-- <span class="absolute top-6 right-6 text-2xl">*</span> --}}
                    <span
                        class="inline-block mb-4 px-4 py-1 rounded-full bg-[#2549b1]/50 border border-white/50 text-white text-xs font-bold w-fit">Promise</span>
                    <h3 class="text-2xl font-bold mb-4">Our Promises</h3>
                    <p class="text-base mb-6">As a global market leader and experienced vacuum pump manufacturer, we set the
                        standard in air transportation. Our vision and guiding principle, "We make our customers winners
                        with sustainable vacuum solutions, today and for the future," shape everything we do at Becker.
                        Under the slogan "Make it Becker. Together." we blend our family-run company values with
                        performance-driven thinking and a startup mindset to achieve ambitious goals together.
                        <br><br>
                        We provide real value to our customers and enable their success in their markets. Trust Becker, your
                        partner and solutions provider for innovative products and a renowned manufacturer of vacuum pumps.
                    </p>
                    <a href="{{ route('about') }}"
                        class="mt-auto inline-block bg-white text-[#234039] font-semibold py-2 px-6 rounded-full shadow hover:bg-gray-100 transition w-fit">Learn
                        More</a>
                </div>
                <!-- Center Image with YouTube Lightbox -->
                <div x-data="{ open: false }"
                    class="rounded-3xl overflow-hidden flex items-center justify-center bg-gray-100 min-h-[350px] relative">
                    <a href="#" @click.prevent="open = true" class="block w-full h-full relative group">
                        <img src="{{ asset('images/Additive-Manufacturing.jpg') }}" alt="YouTube Video Thumbnail"
                            class="object-cover w-full h-full" />
                        <!-- Play Button Overlay -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="bg-white bg-opacity-80 rounded-full p-4 group-hover:bg-opacity-100 transition">
                                <svg class="w-12 h-12 text-[#2563eb]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </a>
                    <!-- Lightbox Modal -->
                    <div x-show="open" x-cloak
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-80">
                        <div class="relative w-full max-w-3xl aspect-video">
                            <iframe src="https://www.youtube.com/embed/H3aFoJXLV_E?autoplay=1" frameborder="0"
                                allow=" encrypted-media" allowfullscreen class="w-full h-full rounded-2xl"></iframe>
                            <button @click="open = false"
                                class="absolute top-2 right-2 text-white text-3xl">&times;</button>
                        </div>
                    </div>
                </div>
                <!-- Right Card -->
                <div class="rounded-3xl bg-[#2563eb] p-8 flex flex-col text-white relative min-h-[350px]">
                    {{-- <span class="absolute top-6 right-6 text-2xl">*</span> --}}
                    <span
                        class="inline-block mb-4 px-4 py-1 rounded-full bg-[#2563eb]/50 border border-white/50 text-white text-xs font-semibold w-fit">
                        Services</span>
                    <h3 class="text-2xl font-bold mb-4">Premium
                        Services</h3>
                    <p class="text-base mb-6">For us, a business relationship doesn't end with the purchase of an industrial
                        pump
                        for air transportation or vacuum
                        generation. We offer a broad range of services, including installation, vacuum pump servicing,
                        compressor maintenance,
                        repair, and spare parts. Quick assistance, professional dedication, and comprehensive availability
                        of original spare
                        parts help enhance your system efficiency, ensure long uptime, and minimise maintenance costs.
                        <br><br>
                        For over a century, customer satisfaction has been our top priority. Trust the globally recognised
                        vacuum pump
                        manufacturer.
                    </p>
                    <a href="{{ route('services') }}"
                        class="mt-auto inline-block bg-white text-[#234039] font-semibold py-2 px-6 rounded-full shadow hover:bg-gray-100 transition w-fit">Explore
                        All Services</a>
                </div>

            </div>
        </div>
    </section>

    @include('partials.strengths-values-section')
    @include('partials.our-promise-section')
    @include('partials.globally-present-section')

    @include('partials.banner-section')

    @include('partials.contact-section')


    {{-- Core Principles Section --}}

    {{-- Globally Present Section --}}


@endsection