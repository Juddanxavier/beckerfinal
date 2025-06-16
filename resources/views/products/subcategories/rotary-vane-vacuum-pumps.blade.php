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
                    <h3 class="text-2xl font-semibold mb-4 text-[#1e3a8a]">Oil-Free Rotary Vane Vacuum Pumps and
                        Oil-Lubricated Rotary Vane Vacuum Pumps
                    </h3>
                    <p class="mb-8 leading-relaxed text-gray-700">
                        Becker’s robustly constructed rotary vane pumps utilise a positive-displacement operating principle.
                        An eccentrically
                        mounted rotor with slots rotates in a cylindrical housing driven by a totally enclosed, fan-cooled
                        motor. The precisely
                        sliding vanes move in the slots, driven to the cylinder wall by centrifugal force. Separate the
                        individual working
                        chambers are created by the separation between the vanes.


                    </p>
                    <p class="mb-8 leading-relaxed text-gray-700">
                        Both our oil-less respectively dry-running rotary vane and oil-lubricated rotary vane vacuum pumps
                        are suitable for
                        higher pressure differences in vacuum applications. There are many factors to consider when choosing
                        a pump technology,
                        but the first issue is always the vacuum level required for the process. Time at the desired vacuum
                        level, potential
                        contaminants, ambient conditions are just a few of the multitude of factors that must be considered
                        when choosing a
                        technology.

                    </p>

                </div>
                <div class="w-full md:w-1/3 mt-4 md:mt-0 flex items-center">
                    {{-- <a href="https://www.youtube.com/embed/46y1-Eo3rE" class="venobox" data-vbtype="video"> --}}
                        <img src="{{ asset('images/Becker_Icon_Rotary_Vane.webp') }}"
                            alt="Becker Operating Principle of Oil-Free Rotary Vane Pumps Thumbnail" class="w-full mb-4">
                        {{-- </a> --}}
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