@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_In-House_Service.webp') }}" alt="In-house Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">In-house Service</h1>
        <h2 class="text-xl font-semibold mb-6 text-[#3ec3e6]">Professional support at our facilities</h2>
        <p class="text-lg text-[#234039] mb-6">
            Our in-house service provides expert maintenance, repair, and support for your Becker equipment directly at our
            specialized facilities. Benefit from our experienced technicians and state-of-the-art tools to ensure your
            systems are always running at peak performance.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">OUR IN-HOUSE SERVICES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Comprehensive diagnostics and repairs</li>
            <li>Preventive maintenance and upgrades</li>
            <li>Use of original Becker spare parts</li>
            <li>Fast turnaround times</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WHY CHOOSE US?</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Highly trained service technicians</li>
            <li>Access to the latest Becker technology</li>
            <li>Transparent service process and communication</li>
        </ul>
        <p class="text-sm text-gray-500 mt-4">Contact us to schedule your in-house service or to learn more about our
            capabilities.</p>
    </div>
    @include('partials.contact-section')
@endsection
