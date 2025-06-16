@extends('layouts.app')

@section('content')
    {{-- @include('components.breadcrumbs', data: ['breadcrumbs' => $breadcrumbs]) --}}

    <div class="bg-gradient-to-br from-[#F6F5F2] to-white min-h-screen pt-6">
        <div class="max-w-7xl mx-auto py-16 px-4 flex flex-col items-start " data-aos="fade-up" data-aos-duration="800">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-2/3">
                    <h1 class="text-4xl md:text-5xl font-bold mt-12 mb-2 text-black leading-tight uppercase">
                        {{ $subcategory->name }}
                    </h1>
                    <h3 class="text-2xl font-semibold mb-4 text-[#1e3a8a]">Single and Double Stage
                    </h3>
                    <p class="mb-8 leading-relaxed text-gray-700">
                        Claw compressors from Becker work according to the positive displacement principle. Comparable to
                        Becker's trusted
                        rotary vane compressors, our dry claw compressors are recognised as a dependable choice for
                        demanding environments where
                        efficiency and consistency are critical.



                    </p>
                    <p class="mb-8 leading-relaxed text-gray-700">
                        The compression process is carried out 100% oil-free and contactless. Two claw-like rotors rotate in
                        opposite directions
                        within the compression chamber without touching each other or the housing.

                    </p>
                    <p class="mb-8 leading-relaxed text-gray-700">
                        This makes these positive displacement pumps particularly low maintenance. The claw technology
                        ensures high efficiency,
                        and the low installed motor power ensures low energy consumption. With our focus on environmentally
                        friendly technology,
                        our products ensure sustainable production in numerous industrial processes.

                    </p>
                </div>
                <div class="w-full md:w-1/3 mt-4 md:mt-0 flex items-center">
                    <a href="https://www.youtube.com/embed/zwfinY8cnEs" class="venobox" data-vbtype="video">
                        <img src="{{ asset('images/Becker_Operating_principle_of_side_channel_blowers_Thumbnail.webp') }}"
                            alt="Becker Operating Principle of Oil-Free Rotary Vane Pumps Thumbnail" class="w-full mb-4">
                    </a>
                </div>
            </div>
            <div class="w-full mt-4">
                @if($products->isEmpty())
                    <p>No products found for this subcategory.</p>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($products as $product)
                            <div class="bg-white rounded-lg border overflow-hidden">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="w-full h-48 object-contain">
                                @endif
                                <div class="p-4">
                                    <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                                    <p class="text-gray-600 text-sm mb-4">{!! Str::words($product->description, 20) !!}</p>
                                    <a href="{{ route('products.show', $product->slug) }}"
                                        class="text-blue-500 hover:underline pt-4">View
                                        Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('partials.banner-section')
    @include('partials.contact-section')
@endsection