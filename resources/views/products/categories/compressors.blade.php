@extends('layouts.app')

@section('content')
    <section class="bg-gradient-to-br from-[#F6F5F2] to-white py-16" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto pt-16 px-4 flex flex-col items-start ">
            <h1 class="font-bold text-4xl md:text-5xl mt-8 leading-tight capitalize">
                {{ $category->name }}
            </h1>
            <h3 class="mt-2 text-[#1e3a8a] font-semibold text-xl">Industrial Pressure Pumps for All Applications

            </h3>
            <div class="w-full mt-4">

                <div class="flex flex-col-reverse md:flex-row items-start">
                    <div class="w-full md:w-3/4">
                        <p class="my-2">
                            From 0 to +2 bar, we offer a number of different technologies to provide the proper air flow to
                            satisfy your low
                            pressure requirements. Becker designs and manufactures a variety of industrial compressor
                            technologies, including
                            oil-less and oil-lubricated rotary vane, screw, claw, radial blowers, aswell as regenerative
                            blowers configured for
                            pressure applications. Each type of pressure pump has unique advantages in regard to pressure
                            level, cost and
                            maintenance requirements, but the basic outcome is the same, creating pressure for a specific
                            application. Becker
                            compressors are built to withstand even the toughest environments and operating conditions.

                        </p>
                        <p class="my-2">
                            In the world of compressed air, understanding the pressure level and flow requirements for your
                            application is critical
                            to choosing the right technology to maximise the desired outcome. This can be difficult with
                            such a wide range of
                            technology options available to choose from. Our team has the experience needed to help find the
                            perfect pump for your
                            application, environment, and operation.


                        </p>


                    </div>
                    <div class="w-full md:w-1/4">
                        <img src="{{ asset('images/Becker_Icon_Vacuum.webp') }}" alt="Contact Us"
                            class="rounded-3xl w-full object-cover " />
                    </div>
                </div>
            </div>
    </section>
    <div class="max-w-7xl mx-auto px-4 py-2 mt-6">
        <h1 class="text-3xl md:text-4xl font-bold capitalize">{{ $category->name }}</h1>
        <h2 class="mt-2 text-[#1e3a8a] font-semibold text-xl">Choose your prefered pump technology</h2>
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