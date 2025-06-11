@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_Replacement_Service.webp') }}" alt="Replacement Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our Replacement Service</h1>
        <p class="text-lg text-[#234039] mb-6">
            The Becker replacement service – continuity and reliability in every situation.<br>
            If it needs to be done more quickly or if a repair is not economically viable, our exchange service is there to
            help you. We offer you the option of replacing your defective device with an equivalent or newer model so that
            your production and operating processes can continue seamlessly.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Fast replacement: Your defective device will be quickly replaced with a functional, tested model from our
                range.</li>
            <li>Warranty and safety: The replacement device meets the high Becker quality standards.</li>
            <li>Flexibility: The replacement device can be selected to best suit your individual requirements.</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Virtually uninterrupted operating times: Rapid assistance even in the event of unexpected device failures.
            </li>
            <li>Cost savings: You benefit from a replacement device compared to a new purchase or expensive repairs.</li>
            <li>Certainty and security: Replacement devices are always tested by us in advance.</li>
        </ul>
    </div>
    @include('partials.contact-section')
@endsection
