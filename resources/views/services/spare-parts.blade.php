@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_Original_Spare_Parts.webp') }}" alt="Becker Original Spare Parts"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our spare parts service</h1>
        <h2 class="text-xl font-semibold mb-6 text-[#3ec3e6]">Quality that lasts.</h2>
        <p class="text-lg text-[#234039] mb-6">
            The quality of our spare parts is our top priority – because we know: "The bitter aftertaste of poor quality
            remains long after the sweetness of the low price has been forgotten." Our original spare parts guarantee smooth
            operation of your pump and systems thanks to their optimal fit and excellent material quality. This minimises
            the risk of breakdowns and saves you additional repair costs and expensive downtime.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li><span class="font-semibold">Global spare parts availability:</span> With 18 subsidiaries worldwide and a
                dealer network of over 30 representatives, we ensure fast access to our spare parts.</li>
            <li><span class="font-semibold">Personal contact:</span> Use the direct contact to Becker and benefit from our
                global network, including our online store with 24/7 availability.</li>
            <li><span class="font-semibold">Tailor-made premium service:</span> Combine our outstanding service with our
                original spare and wear parts according to your needs.</li>
        </ul>
        <h3 class="text-lg text-[#1e3a8a] font-bold mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li><span class="font-semibold">Cost efficiency:</span> Reduce your maintenance costs with a customised offer
                and save with our versatile spare parts kits, such as maintenance, repair, sealing and screw sets.</li>
            <li><span class="font-semibold">Increased equipment availability:</span> Benefit from fast and comprehensive
                spare parts availability, supported by our central warehouse with more than 400,000 directly available
                items.</li>
            <li><span class="font-semibold">Flexible delivery options:</span> Choose between direct delivery, specific
                delivery time, delivery every working day and the option of using our service technicians on site.</li>
        </ul>
        <p class="text-sm text-gray-500 mt-4">The exact scope of services may vary from region to region.</p>
    </div>
    @include('partials.contact-section')
@endsection
