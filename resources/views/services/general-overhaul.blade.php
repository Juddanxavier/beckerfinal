@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_General_Overhaul_Service.webp') }}" alt="General Overhaul Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our General Overhaul Service</h1>
        <p class="text-lg text-[#234039] mb-6">
            A general overhaul extends the service life of Becker vacuum pumps and compressors.<br>
            Over time, any device can show signs of wear, but this does not mean the end of its service life. With our
            general overhaul service, we can restore your device to almost new condition. Rely on Becker‘s expertise to
            revitalise your vacuum pumps and compressors.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Repair services: All device functions are restored.</li>
            <li>Preventive replacement: We identify and replace critical components before they fail to ensure the device is
                in perfect working order.</li>
            <li>Original spare parts from the manufacturer: To ensure longevity and performance, we only use original parts,
                which we always stock in sufficient quantities.</li>
            <li>Quality check: After the general overhaul, every pump and compressor is subjected to a defined test run to
                ensure that the overhaul meets the highest standards.</li>
            <li>Warranty: All work carried out is of course covered by a 12-month warranty.</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Like new: Your device works like a new one after the general overhaul.</li>
            <li>Short downtimes: Process efficiency and high availability of spare parts minimises the duration of the
                overhaul.</li>
            <li>Replacement device: We can provide you with a loaner device for the duration of the overhaul on request.
            </li>
            <li>Quality assurance: Every reconditioned device is function-tested in accordance with the manufacturer‘s
                specs.</li>
            <li>Individual solutions: On request, we can repaint your pump or compressor, or offer other personalised
                services.</li>
            <li>Expert advice: Our experts are always happy to assist you.</li>
            <li>Cost efficiency: Extend the service life of your equipment and save money compared to a new purchase.</li>
        </ul>
        <p class="text-lg text-[#234039] mb-6">
            Experience renewed performance and quality with a Becker general overhaul.
        </p>
    </div>
    @include('partials.contact-section')
@endsection
