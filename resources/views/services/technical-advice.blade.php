@extends('layouts.app')
@section('content')
    <div class="max-w-7xl mx-auto py-16 px-4" data-aos="fade-up" data-aos-duration="1000">
        <img src="{{ asset('images/services/Becker_Technical_Advice_Service.webp') }}" alt="Technical Advice Service"
            class="w-full max-w-7xl mx-auto my-8 rounded-xl shadow" />
        <h1 class="text-3xl font-bold mb-4 text-[#1e3a8a]">Our Technical Advice Service</h1>
        <p class="text-lg text-[#234039] mb-6">
            Optimise your operation with expert knowledge from the Becker specialists.<br>
            Technology is constantly evolving, and with it the demands placed on modern vacuum pumps and compressors. With
            our technical expertise, you can ensure that you are always up to date and that your systems work efficiently
            and reliably.
        </p>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">WE OFFER</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Needs analysis: Together we determine your exact requirements and identify options for optimizing and
                expanding your systems.</li>
            <li>Product consulting: We help you select the right products and solutions for your specific requirements.</li>
            <li>Integration & adaptation: Our experts advise you on the integration of new devices or the adaptation of
                existing systems.</li>
            <li>Energy efficiency: We show you ways in which you can reduce the energy consumption of your systems and thus
                save costs.</li>
            <li>Training & Education: We offer customised training to ensure that your team can utilise the full potential
                of your Becker equipment.</li>
            <li>Long-term planning: Together we look to the future and develop strategies for further development and
                modernization of your equipment.</li>
        </ul>
        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 mt-8">YOUR ADVANTAGES</h3>
        <ul class="list-disc pl-6 mb-6 text-[#234039]">
            <li>Expertise: Benefit from our in-depth knowledge and years of experience in the field of vacuum solutions.
            </li>
            <li>Individual solutions: Our advice is always tailored to your specific needs and requirements.</li>
            <li>Future-proof: With us, you will always stay one step ahead technologically and thus ensure the long-term
                success of your business.</li>
        </ul>
        <p class="text-lg text-[#234039] mb-6">
            The world of vacuum pumps and compressors is complex, but with the right partner you can be sure that you are
            always making the best decisions for your business. Rely on the expertise of Becker - we are your trusted
            partner for all technical matters.
        </p>
    </div>
    @include('partials.contact-section')
@endsection
