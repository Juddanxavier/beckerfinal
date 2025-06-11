@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_Repair_Service.webp') }}" alt="Repair Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our Repair Service</h1>
        <p class="text-lg text-[#234039] mb-6">
            Becker repair service focuses on the quality and longevity of your vacuum pumps and compressors.<br>
            A sudden failure or the desire for a general refurbishment of your device can be a challenge. Our Becker team of
            specialists offers you a professional service to repair your vacuum pumps and compressors quickly and reliably.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Warranty: We provide a warranty for all work carried out in our service centers.</li>
            <li>Expertise: Our service technicians are factory-trained and familiar with the entire Becker product range,
                from pumps and systems to blowers and compressors.</li>
            <li>Original spare parts: To ensure the optimal performance and longevity of your equipment, we only use
                original parts. An extensive stock in each of our service centers ensures the necessary spare parts are
                always available.</li>
            <li>Quality assurance: After every repair job, your pump undergoes a rigorous test run. We also offer a
                twelve-month warranty on all work carried out to back our quality.</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Fast solutions: Short repair times thanks to high availability of spare parts.</li>
            <li>Loaner pump: On request, we can provide you with a temporary replacement device for the duration of the
                repair.</li>
            <li>Availability: Maximum operational readiness of your systems is our goal.</li>
            <li>Quality inspection: Each pump is tested after repair in accordance with the manufacturer's specifications.
            </li>
            <li>Customization: We can carry out a professional paint job for you on request.</li>
            <li>Personal advice: We are always on hand to advise you and answer questions.</li>
            <li>Reliability: A 12-month warranty is proof of our trustworthy work.</li>
        </ul>
        <p class="text-lg text-[#234039] mb-6">
            Rely on Becker when it comes to repairing your vacuum pumps and compressors. Quality, speed and reliability are
            our trademarks.
        </p>
    </div>
    @include('partials.contact-section')
@endsection
