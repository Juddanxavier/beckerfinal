@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_Service_Agreements.webp') }}" alt="Service Agreements"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our Service Agreements</h1>
        <p class="text-lg text-[#234039] mb-6">
            Service agreements from Becker – individual solutions for constant operating efficiency.<br>
            To provide our customers with optimal support and ensure the longevity and efficiency of their devices, we offer
            adaptive service agreements. This enables you to combine specific services according to your needs, ensuring
            customised maintenance and care of your devices.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Adaptive contract structures with the options:</li>
            <ul class="list-disc pl-6 mb-2">
                <li>Inspection: Monitoring and checking the condition of your Becker vacuum pumps and compressors.</li>
                <li>Maintenance: Regular maintenance work to ensure optimal operating conditions.</li>
                <li>Repair: Fast and effective repair in the event of unexpected breakdowns or damage.</li>
            </ul>
            <li>Flexibility: The terms can be adapted to your operational requirements and specifications.</li>
            <li>Individual combination options: A combination of services results in a customised service for you.</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Long-term security: Targeted and regular service measures give you peace of mind.</li>
            <li>Optimization of operating costs: With predictive maintenance and care, you can keep an eye on costs.</li>
            <li>Fast and efficient solutions: Predefined services are immediately deployed when required.</li>
        </ul>
    </div>
    @include('partials.contact-section')
@endsection
