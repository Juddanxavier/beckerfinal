@extends('layouts.app')

@section('content')
    {{-- @include('components.breadcrumbs', data: ['breadcrumbs' => $breadcrumbs]) --}}

    <div class="bg-gradient-to-br from-[#F6F5F2] to-white min-h-screen pt-6">
        <div class="max-w-7xl mx-auto py-16 px-4 flex flex-col items-start " data-aos="fade-up" data-aos-duration="800">
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-2/3">
                    <h1 class="text-4xl md:text-5xl font-bold mt-12 mb-4 text-black leading-tight uppercase">
                        {{ $subcategory->name }}
                    </h1>

                    <p class="mb-8 leading-relaxed text-gray-700">
                        Becker’s screw vacuum pumps, designed for rough vacuum, and screw compressors are dry positive
                        displacement pumps. They
                        have two counter-rotating rotors and a housing that encloses the rotors. Thanks to the direct drive
                        via an integrated
                        frequency inverter, a drive gear is no longer required.


                    </p>
                    <p class="mb-8 leading-relaxed text-gray-700">
                        The rotors are designed with a regular, thread-shaped profile and mesh with each other like
                        cogwheels. When the rotors
                        rotate, they move out in a machine direction and convey the medium from the suction side (inlet) to
                        the pressure side
                        (outlet). They rotate in opposite directions without touching one another or the housing.



                    </p>
                    <p class="mb-8 leading-relaxed text-gray-700">
                        The working chamber of the machines is 100% oil-free, making them relatively maintenance free. The
                        integrated speed
                        control enables energy-optimised operation of the devices. Becker drives continuously adjust the
                        volume flow to the
                        demand. It‘s high efficiency results into low energy consumption.


                    </p>
                </div>
                <div class="w-full md:w-1/3 mt-4 md:mt-0 flex items-center">
                    <a href="https://www.youtube.com/embed/mSCrgo-G6u4" class="venobox" data-vbtype="video">
                        <img src="{{ asset('images/Becker_Operating_principle_of_screw_pumps_Thumbnail.webp') }}"
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