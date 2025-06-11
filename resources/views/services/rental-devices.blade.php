@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_Rental_Device_Service.webp') }}" alt="Rental Device Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our Rental Device Service</h1>
        <p class="text-lg text-[#234039] mb-6">
            Rental equipment from Becker – safety and efficiency when you need it most.<br>
            Your vacuum pump or compressor needs to be repaired and you can‘t afford long downtimes? Rely on Becker and our
            first-class customer service. Our rental pump program ensures that your business continues to run during
            maintenance and repair work.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Rental devices: While your own device is being repaired, we will provide you with a rental device for a
                one-time fee and the associated shipping costs.</li>
            <li>Quick device replacement: A comprehensive selection of Becker devices with different operating principles
                are available in our service centers for quick replacement and immediate use.</li>
        </ul>
        <p class="text-sm text-gray-500 mb-6">The exact scope of services may vary from region to region.</p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Maximum system availability: You are well protected even if one of your devices fails.</li>
            <li>Minimal interruptions to production: Downtime for your business can be drastically reduced.</li>
            <li>Fast response and service times: We are guaranteed to be there for you and are happy to help.</li>
        </ul>
    </div>
    @include('partials.contact-section')
@endsection
