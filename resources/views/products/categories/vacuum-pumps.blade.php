@extends('layouts.app')

@section('content')
    <section class="bg-gradient-to-br from-[#F6F5F2] to-white py-16" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto pt-16 px-4 flex flex-col items-start ">
            <h1 class="font-bold text-4xl md:text-5xl mt-8 leading-tight capitalize">
                {{ $category->name }}
            </h1>
            <h3 class="mt-2 text-[#1e3a8a] font-semibold text-xl">Industrial Vacuum Pumps for All Applications
            </h3>
            <div class="w-full mt-4">

                <div class="flex flex-col-reverse md:flex-row items-start">
                    <div class="w-full md:w-3/4">
                        <p class="my-2">
                            Becker designs and manufactures a variety of industrial vacuum pump technologies. From 0 to 1013
                            mbar,
                            primary pumps to
                            booster pumps, positive displacement pumps to dynamic pumps, our vacuum pumps cover a wide range
                            of
                            operating pressures,
                            principles, and technologies, including oil-less/dry and oil-lubricated rotary vane,
                            oil-less/dry rotary
                            screw, claw,
                            and radial vacuum pumps, as well as regenerative blowers configured for vacuum applications.
                        </p>
                        <p class="my-2">
                            Each type of vacuum pump has unique advantages in regard to vacuum level, flow rate, cost and
                            maintenance
                            requirements,
                            but the basic outcome is the same, creating vacuum for a specific application. Becker vacuum
                            pumps are built
                            to
                            withstand even the toughest industrial environments and operating conditions.

                        </p>
                        <p class="my-2">
                            Regardless of operating pressure, pump type or technology, understanding the function of the
                            pump is
                            critical to the
                            proper design and operation of any vacuum application. Our team has the experience needed to
                            help find the
                            perfect pump
                            for your application, environment, and operation.

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