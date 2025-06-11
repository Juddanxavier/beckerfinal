@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_Inspection_Service.webp') }}" alt="Inspection Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our Inspection Service</h1>
        <p class="text-lg text-[#234039] mb-6">
            <span class="font-semibold">Why is the inspection of vacuum pumps and compressors important?</span><br>
            Inspecting your vacuum pumps and compressors ensures that your equipment is always in optimal condition. It is
            not only a check of the current condition, but also an opportunity to identify and rectify future problems
            before they cause major breakdowns.
        </p>
        <p class="text-lg text-[#234039] mb-6">
            <span class="font-semibold">For which customers is the inspection particularly recommended?</span><br>
            In particular, customers with their own maintenance department who wish to take over maintenance themselves in
            the future will benefit from our service. Our thorough inspection provides a clear starting point for future
            service activities and equips your employees with the necessary know-how to efficiently reduce downtime.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Inspection: We thoroughly check your devices and document the current condition in detail.</li>
            <li>Recommendations for action: We give you recommendations on how you can maintain the value of your equipment
                and extend their service life.</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Clarity: The inspection shows you the current condition of your vacuum pumps and compressors.</li>
            <li>Better planning: By identifying potential problem areas in advance, you can plan ahead for maintenance and
                possibly repairs.</li>
            <li>Training opportunities: Gain the skills to carry out maintenance on your vacuum pumps and compressors
                independently and in accordance with the manufacturer's specifications.</li>
        </ul>
        <p class="text-lg text-[#234039] mb-6">
            Through regular inspections, we ensure that your devices run smoothly and prevent unexpected breakdowns. Rely on
            our expertise for long-lasting, optimum performance of your vacuum pumps and compressors.
        </p>
    </div>
    @include('partials.contact-section')
@endsection
