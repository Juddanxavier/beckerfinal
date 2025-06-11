@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_Maintenance_Service.webp') }}" alt="Maintenance Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our Maintenance Service</h1>
        <p class="text-lg text-[#234039] mb-6">
            <span class="font-semibold">Why is it so important to maintain your devices?</span><br>
            Regular maintenance of your vacuum pumps and compressors is crucial to ensure that your operating processes run
            smoothly and efficiently. Targeted maintenance measures ensure that your devices achieve maximum service life,
            minimise wear and tear and thus avoid expensive downtimes for your entire system.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Inspection: You benefit from our comprehensive range of inspection services (see Inspection services).</li>
            <li>Professional maintenance work: Our experts carry out all maintenance work exactly to the manufacturer‘s
                specifications. This includes adjustment work, lubrication services and minor repairs.</li>
            <li>Replacement of wearing parts: To ensure quality and durability, only original parts are used.</li>
            <li>Test run: After the maintenance work, we carry out a test run in accordance with the manufacturer‘s
                specifications to guarantee optimal functionality.</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Plannability: You determine the ideal maintenance time so that your operations are not impaired.</li>
            <li>Flexibility: Decide whether maintenance is carried out directly on site or at one of our service centers. If
                required, we can provide you with a temporary device during the maintenance period.</li>
            <li>Reliability: Regular maintenance prevents unforeseen downtime and its associated costs.</li>
            <li>Longevity: The service life of your vacuum pumps and compressors is significantly extended by our
                professional maintenance.</li>
        </ul>
        <p class="text-lg text-[#234039] mb-6">
            Investing in regular maintenance pays off many times over by ensuring operational readiness and extending the
            service life of your devices. Rely on our expertise and ensure the smooth operation of your vacuum pumps and
            compressors.
        </p>
    </div>
    @include('partials.contact-section')
@endsection
