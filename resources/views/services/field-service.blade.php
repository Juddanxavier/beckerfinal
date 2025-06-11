@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="800">
        <img src="{{ asset('images/services/Becker_Field_Service.webp') }}" alt="Field Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our Field Service</h1>
        <p class="text-lg text-[#234039] mb-6">
            In the event of unexpected device failure, Becker service is at your side. We act quickly and directly on site
            to safeguard your production. Decide in favor of our Field Service for the maintenance of your pumps and
            systems. This allows you to concentrate on your core business while ensuring that your systems retain their
            value.
        </p>
        <p class="text-lg text-[#234039] mb-6">
            <span class="font-semibold">Our teams:</span> The professionalism and expertise of our technicians is second to
            none. Through continuous training, we ensure that your vacuum pumps and compressors are maintained and repaired
            according to precise manufacturer specifications – always using original parts.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Customised service programmes: Service programs that adapt to your schedule and budget, be it regular or
                situational.</li>
            <li>Assessment based on your requirements: We analyze your pumps in the context of your specific process
                requirements and determine service needs in accordance with our recommended maintenance schedule.</li>
            <li>Thorough inspection: Every pump is carefully inspected and provided with the necessary spare parts for
                maintenance.</li>
            <li>Expert support: Our experts are on hand with help and advice for any maintenance questions.</li>
            <li>Clear price structure: No hidden costs. If additional work or parts are required, we inform you
                transparently and wait for your approval.</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Time efficiency: While you concentrate on other things, we do the work.</li>
            <li>Cost savings: You get exactly what you need and we ensure transparent costs.</li>
            <li>Maximum longevity: By using original parts, we guarantee optimum performance and service life for your
                devices.</li>
            <li>Flexibility: You set the time frame and we keep to it.</li>
            <li>Valuable knowledge: On request, we can provide you with detailed instruction on the special features of your
                vacuum pumps and compressors.</li>
        </ul>
    </div>
    @include('partials.contact-section')
@endsection
