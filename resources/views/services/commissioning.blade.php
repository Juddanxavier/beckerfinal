@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_Commissioning_Service.webp') }}" alt="Commissioning Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our Commissioning Service</h1>
        <p class="text-lg text-[#234039] mb-6">
            Why professional commissioning of Becker single units and centralised systems?
        </p>
        <p class="text-lg text-[#234039] mb-6">
            Professional and precise commissioning of your vacuum pumps and compressors, be it a single device, an air
            supply cabinet, or a centralised system, is essential to ensuring smooth operation and a long service life for
            your systems.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Testing and adjustment: We ensure the correct configuration of all system-specific parameters, tailored to
                your individual requirements and in accordance with the manufacturer‘s specifications.</li>
            <li>Planning the system: We work with you to plan the installation and integration of the system to ensure that
                everything is implemented according to your wishes and the technical specifications.</li>
            <li>Insertion and positioning: Our experts ensure that your equipment is professionally inserted into the pump
                room and optimally positioned.</li>
            <li>Piping: We take care of the professional and safe piping of your appliances to ensure stable and efficient
                operation.</li>
            <li>Test run: Before completing our work, we carry out a detailed test run to ensure that your equipment
                functions properly.</li>
            <li>Documentation: We create detailed documentation of the work carried out and settings for your records and
                future reference.</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Specialist knowledge: Benefit from our many years of experience and expertise.</li>
            <li>Time savings: Professional commissioning saves you time and ensures a fast start to your production.</li>
            <li>Safety: Ensure safe and smooth operation right from the start.</li>
        </ul>
        <p class="text-lg text-[#234039] mb-6">
            Rely on the expertise and precision of our team when it comes to commissioning your Becker devices. We are at
            your side from start to finish to ensure that you get the most out of your investment.
        </p>
    </div>
    @include('partials.contact-section')
@endsection
