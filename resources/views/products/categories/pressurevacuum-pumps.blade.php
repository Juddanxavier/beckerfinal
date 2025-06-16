@extends('layouts.app')

@section('content')
    <section class="bg-gradient-to-br from-[#F6F5F2] to-white py-16" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto pt-16 px-4 flex flex-col items-start ">
            <h1 class="font-bold text-4xl md:text-5xl mt-8 leading-tight capitalize">
                {{ $category->name }}
            </h1>
            {{-- <h3 class="mb-2 text-[#1e3a8a] font-semibold text-xl">Industrial Vacuum Pumps for All Applications --}}
            </h3>
            <div class="w-full mt-4">

                <div class="flex flex-col-reverse md:flex-row items-start">
                    <div class="w-full md:w-3/4">
                        <p class="my-2">
                            Pressure/vacuum pumps or combined pumps are uniquely designed for the Printing Industry. The
                            demands of the feeder on a
                            sheet fed printing press require vacuum for gripping each sheet while the pressure side, or
                            blast air, is used to be
                            sure the sheets are separated. Our combined pumps reach an ultimate vacuum level of -0.6 bar and
                            maximum pressure of
                            +0.6 bar simultaneously.

                        </p>
                        <p class="my-2">
                            Becker pioneered the development of the combined pressure/vacuum pumps when it developed a
                            device called the secondary
                            suction. This secondary inlet port allows a continuous flow of inlet air and lets the compressor
                            operate independently
                            of the vacuum pump. All Becker combined pumps include this design.

                        </p>
                        <p class="my-2">
                            Although the print market is the main use for these pumps other non-printing customers have
                            found these pumps to be the
                            perfect fit for them.


                        </p>
                    </div>
                    <div class="w-full md:w-1/4">
                        <img src="{{ asset('images/Becker_Icon_Pressure-Vacuum.webp') }}" alt="Contact Us"
                            class="rounded-3xl w-full object-cover " />
                    </div>
                </div>
            </div>
    </section>
    <div class="max-w-7xl mx-auto px-4 py-2 mt-6">
        <h1 class="text-3xl md:text-4xl font-bold capitalize">{{ $category->name }}</h1>
        {{-- <h2 class="mb-2 text-[#1e3a8a] font-semibold text-xl">Choose your prefered pump technology</h2> --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-2">
            @foreach($category->subcategories as $subcategory)
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h3 class="text-2xl font-semibold mb-2 text-[#1e3a8a]">{{ $subcategory->name }}</h3>
                        <p class="text-gray-600 mb-4">{!! $subcategory->description !!}</p>
                        <a href="{{ route('products.by-subcategory', ['subcategory' => $subcategory->slug]) }}"
                            class="inline-block bg-[#1e3a8a] text-white font-semibold py-3 px-8 rounded-full hover:bg-[#2563eb] transition">
                            View
                            Details
                        </a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.banner-section')
    @include('partials.contact-section')
@endsection