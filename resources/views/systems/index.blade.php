@extends('layouts.app')

@section('content')
                                                <div class="bg-gradient-to-br from-[#F6F5F2] to-white min-h-screen pt-6">
                                                    <div class="max-w-7xl mx-auto py-16 px-4 flex flex-col items-start " data-aos="fade-up" data-aos-duration="800">

                                                        <h1 class="text-4xl md:text-5xl my-8 text-black font-bold leading-tight ">
                                                            Becker <span class="text-[#1e3a8a]">VARIAIR Central System</span>

                                                        </h1>
                                                        <p>The VARIAIR Central System (VACS) from Becker provides a compact solution for supplying air to one or more
                                                            production
                                                            systems. Energy-saving, flexible, and modular, VACS delivers suction and blast air that's matched to demand
                                                            for
                                                            businesses of all sizes.
                                                        </p>
                                                        <div class="w-full mt-4">
                                                            <img src="{{ asset('images/Becker_Products_1050x450px.webp') }}" alt="Financial Well-Being"
                                                                class="rounded-3xl w-full object-cover h-[400px] md:h-[500px]" />
                                                        </div>
                                                    </div>
                                                    <div class="max-w-7xl mx-auto py-12 px-4">


                                                        <!-- Product/Systems Overview -->
                                                            <section id="variair" class="grid grid-cols-1 md:grid-cols-4 gap-16 items-center" data-aos="fade-up" data-aos-delay="100">
                                                                <!-- Left Column: Text Content -->
                                                                <div class="md:col-span-3 text-base text-gray-700 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                                                                    <h1 class="text-4xl md:text-5xl font-bold text-black mb-6" data-aos="fade-up" data-aos-delay="150">
                                                                        VARIAIR
                                                                        Central System

                                                                    </h1>
                                                                    <h1 class="text-xl md:text-2xl font-bold text-black mb-6" data-aos="fade-up" data-aos-delay="150">
                                                                        Central Systems with a promise of success.


                                                                    </h1>
                                                                    <p class="mb-6" data-aos="fade-up" data-aos-delay="200">
                                                                        The VARIAIR Central System (VACS) from Becker provides a compact solution for supplying air to one
                                                                        or more production
                                                                        systems. This method of supplying suction and blast air supply is employed in a wide range of
                                                                        different places. Whether
                                                                        in small businesses or for specific stages of production in large companies, the energy-saving
                                                                        VARIAIR Central System
                                                                        delivers suction and blast air that's matched to demand.

                                                                    </p>
                                                                    <p data-aos="fade-up" data-aos-delay="250">
                                                                        VACS cuts noise in the work environment and reduces operating personnel exposure to high
                                                                        temperatures through the
                                                                        absence of direct heat sources. This is where VACS offers the major advantage of Becker's modular
                                                                        control system VARIAIR
                                                                        Controller+. It manages as many as four different pressure levels with no more than seven pump units
                                                                        each. The VARIAIR
                                                                        Central System obviates the need for additional pump rooms. Affording a high degree of flexibility,
                                                                        VACS uses short
                                                                        connection lines and costs little to install. All connected equipment is provided with a built-on
                                                                        frequency converter.
                                                                        Of modular design, these cabinets can be extended at any time to ensure flexibility in accommodating
                                                                        growing production
                                                                        requirements.
                                                                    </p>
                                                                    <div class="mt-8" data-aos="zoom-in" data-aos-delay="300">
                                                                        <a href="{{ route('services') }}"
                                                                            class="inline-block bg-[#1e3a8a] text-white font-semibold py-3 px-8 rounded-full hover:bg-[#2563eb] transition">
                                                                            Explore service offerings
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <!-- Right Column: Image -->
                                                                <div class="md:col-span gap-4" data-aos="fade-left" data-aos-delay="400">
                                                                    {{-- Image: Becker Service Van --}}
                                                                    <img src="{{ asset('images/Becker_Logo_VARIAIR_Central_System.webp') }}" alt="Becker Service Van"
                                                                        class="rounded-4xl w-full h-auto object-cover mb-4"><img
                                                                        src="{{ asset('images/Becker_VARIAIR_Central_System_trans.webp') }}" alt="Becker Service Van"
                                                                        class="rounded-4xl w-full h-auto object-cover">
                                                                </div>
                                                            </section>

                                                        <div class="my-8" data-aos="fade-up" data-aos-delay="100">
                                                            <h1 class="text-xl md:text-2xl font-bold text-black mb-6" data-aos="fade-up" data-aos-delay="150">
                                                                Examples of stand-alone pumps
                                                            </h1>
                                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                                                                <div>
                                                                    <img src="{{ asset('images/Becker_KVT_3.140_00096.webp') }}" alt="KVT 3.140"
                                                                        class="mx-auto mb-4 w-full max-w-xs h-56 object-contain" />
                                                                    <div class="text-2xl font-extrabold text-[#1e3a8a] mb-1">KVT 3.140</div>
                                                                    <div class="text-lg text-[#1e3a8a] font-semibold">Rotary Vane Vacuum Pumps, oil-free</div>
                                                                </div>
                                                                <div>
                                                                    <img src="{{ asset('images/Becker_VTLF_2.250_00072.webp') }}" alt="VTLF 2.250"
                                                                        class="mx-auto mb-4 w-full max-w-xs h-56 object-contain" />
                                                                    <div class="text-2xl font-extrabold text-[#1e3a8a] mb-1">VTLF 2.250</div>
                                                                    <div class="text-lg text-[#1e3a8a] font-semibold">Rotary Vane Vacuum Pumps, oil-free</div>
                                                                </div>
                                                                <div>
                                                                    <img src="{{ asset('images/Becker_SV_300_00000.webp') }}" alt="SV 300"
                                                                        class="mx-auto mb-4 w-full max-w-xs h-56 object-contain" />
                                                                    <div class="text-2xl font-extrabold text-[#1e3a8a] mb-1">SV 300</div>
                                                                    <div class="text-lg text-[#1e3a8a] font-semibold">Side Channel Vacuum Pumps</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <section id='central' data-aos="fade-up" data-aos-delay="200">

                                                        <div class="grid grid-cols-1 md:grid-cols-4 gap-16 items-center my-12">
                                                            <!-- Left Column: Text Content -->
                                                                <div class="md:col-span-2 text-base text-gray-700 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                                                                    <h1 class="text-4xl md:text-5xl font-bold text-black mb-6" data-aos="fade-up" data-aos-delay="150">
                                                                        VARIAIR
                                                                        Central System

                                                                    </h1>
                                                                    <h1 class="text-xl md:text-2xl font-bold text-[#1e3a8a] mb-6" data-aos="fade-up" data-aos-delay="150">
                                                                        Central Systems with a promise of success.


                                                                    </h1>
                                                                    <p class="mb-6" data-aos="fade-up" data-aos-delay="200">
                                                                        In central systems, multiple single pumps on separate production machines are replaced by just a few
                                                                        larger vacuum pumps
                                                                        and/or compressors in a separate room (control room, basement etc.). The units are connected to the
                                                                        production machines
                                                                        via pipes.





                                                                    </p>
                                                                    <p data-aos="fade-up" data-aos-delay="250">
                                                                        Central systems provide your machines with on-demand vacuum and blast air, which means energy
                                                                        savings. Noise levels are
                                                                        drastically reduced in employee work areas. Each pneumatic supply in a centralised system is
                                                                        equipped with its own
                                                                        frequency converter. Thus, the pneumatic requirements of each production machine can be continuously
                                                                        adapted for any
                                                                        given operating point. By average, frequency-controlled units operate at a relative speed of approx.
                                                                        65%. Overall, this
                                                                        leads to significant energy savings over separate units and devices without speed controlling.

                                                                    </p>
                                                                    <div class="mt-8" data-aos="zoom-in" data-aos-delay="300">
                                                                        <p>
                                                                            The animation for the food packaging industry on the right shows typical problems of
                                                                            decentralized production areas:

                                                                        </p>
                                                                        <ul class="list-disc font-semibold ml-4">
                                                                            <li>Lack of speed</li>
                                                                            <li>Pump failure</li>
                                                                            <li>Nigh noise and heat emissions</li>
                                                                            <li>Aerosolemissions</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                            <!-- Right Column: Image -->
                                                            <div class="md:col-span-2 gap-4" data-aos="fade-left" data-aos-delay="400">
                                                                {{-- Image: Becker Service Van --}}
                                                                <img src="{{ asset('images/Becker_Centralised_System_VADS_1500.webp') }}" alt="Becker Service Van"
                                                                    class="w-full mx-auto my-4">
                                                                <a href="https://www.youtube.com/embed/a3p1sYYOcJY" class="venobox" data-vbtype="video">
                                                                    <img src="{{ asset('images/Video-Thumnail_Zentralanlagenvideo.webp') }}"
                                                                        alt="Becker Operating Principle of Oil-Free Rotary
                                                                                                                                                    Vane Pumps Thumbnail" class="w-full mx-auto my-4">
                                                                </a>
                                                            </div>
                                                            </section>

                                                        </div>
                                                    </section>
                                                    <div class="max-w-7xl mx-auto">
                                                        <h2 class="text-3xl font-bold mb-8">
                                                            6 STEPS TO YOUR <span class="text-[#1e3a8a]">ENERGY EFFICIENT CENTRAL SYSTEM</span>
                                                        </h2>
                                                        <div id="steps-splide" class="splide ">
                                                            <div class="splide__track">
                                                                <ul class="splide__list">
                                                                    <!-- Step 1 -->
                                                                    <li class="splide__slide flex flex-col justify-start ">
                                                                        <img src="{{ asset('images/Becker_Central_System_6_Steps_Thumbnail_1.webp') }}" alt="Step 1"
                                                                            class="w-full h-auto object-cover rounded-xl mb-4">
                                                                        <div class="flex items-center text-left mb-2">
                                                                            {{-- <span class="text-3xl font-extrabold text-[#1e3a8a] mr-2">1</span> --}}
                                                                            <span class="text-xl font-bold text-[#1e3a8a]">6 Steps</span>
                                                                        </div>
                                                                        <p class="text-gray-700 ">
                                                                            to maximize your production efficiency and start saving cost, big time!
                                                                        </p>
                                                                    </li>
                                                                    <!-- Step 1 -->
                                                                    <li class="splide__slide flex flex-col justify-start bg-white ">
                                                                        <img src="{{ asset('images/Becker_Central_System_6_Steps_Thumbnail_2.webp') }}" alt="Step 1"
                                                                            class="w-full h-auto object-cover rounded-xl mb-4">
                                                                        <div class="flex items-center text-left mb-2">
                                                                            <span class="text-3xl font-extrabold text-[#1e3a8a] mr-2">1</span>
                                                                            <span class="text-xl font-bold text-[#1e3a8a]">Pre-Project Phase</span>
                                                                        </div>
                                                                        <p class="text-gray-700 ">
                                                                            To provide you with the perfect fit solution, we will examine your current set-up, as well
                                                                            as to conduct detailed
                                                                            discussions with project managers and architect. </p>
                                                                    </li>
                                                                    <!-- Step 2 -->
                                                                    <li class="splide__slide flex flex-col justify-start bg-white ">
                                                                        <img src="{{ asset('images/Becker_Central_System_6_Steps_Thumbnail_3.webp') }}" alt="Step 1"
                                                                            class="w-full h-auto object-cover rounded-xl mb-4">
                                                                        <div class="flex items-center text-left mb-2">
                                                                            <span class="text-3xl font-extrabold text-[#1e3a8a] mr-2">2</span>
                                                                            <span class="text-xl font-bold text-[#1e3a8a]">Project Planning Phase</span>
                                                                        </div>
                                                                        <p class="text-gray-700 ">
                                                                            From the discussions from phase 1. data for the selection and dimensioning of various
                                                                            parameters such as pumps and
                                                                            controls are now evaluated. </p>
                                                                    </li>
                                                                    <!-- Step 3 -->
                                                                    <li class="splide__slide flex flex-col justify-start bg-white ">
                                                                        <img src="{{ asset('images/Becker_Central_System_6_Steps_Thumbnail_4.webp') }}" alt="Step 1"
                                                                            class="w-full h-auto object-cover rounded-xl mb-4">
                                                                        <div class="flex items-center text-left mb-2">
                                                                            <span class="text-3xl font-extrabold text-[#1e3a8a] mr-2">3</span>
                                                                            <span class="text-xl font-bold text-[#1e3a8a]">Quotation Phase</span>
                                                                        </div>
                                                                        <p class="text-gray-700 ">
                                                                            After going through phases 1. and 2. a detailed quotation of our services will be presented.
                                                                            (vacuum pumps and/or
                                                                            compressors, piping accessories, etc.).
                                                                        </p>
                                                                    </li>
                                                                    <!-- Step 4 -->
                                                                    <li class="splide__slide flex flex-col justify-start bg-white ">
                                                                        <img src="{{ asset('images/Becker_Central_System_6_Steps_Thumbnail_5.webp') }}" alt="Step 1"
                                                                            class="w-full h-auto object-cover rounded-xl mb-4">
                                                                        <div class="flex items-center text-left mb-2">
                                                                            <span class="text-3xl font-extrabold text-[#1e3a8a] mr-2">4</span>
                                                                            <span class="text-xl font-bold text-[#1e3a8a]">4. Project Phase (after order
                                                                                placement)</span>
                                                                        </div>
                                                                        <p class="text-gray-700 ">
                                                                            If the quotation is accepted, the realization phase begins. There, among other things,
                                                                            installation drawings are
                                                                            created, and the vacuum pumps and compressors are installed.
                                                                        </p>
                                                                    </li>
                                                                    <!-- Step 5 -->
                                                                    <li class="splide__slide flex flex-col justify-start bg-white ">
                                                                        <img src="{{ asset('images/Becker_Central_System_6_Steps_Thumbnail_6.webp') }}" alt="Step 1"
                                                                            class="w-full h-auto object-cover rounded-xl mb-4">
                                                                        <div class="flex items-center text-left mb-2">
                                                                            <span class="text-3xl font-extrabold text-[#1e3a8a] mr-2">5</span>
                                                                            <span class="text-xl font-bold text-[#1e3a8a]">Commissioning</span>
                                                                        </div>
                                                                        <p class="text-gray-700 ">
                                                                            Congratulations! One last check, and you are ready to go! We will setup the central vacuum
                                                                            system configured
                                                                            specifically to your needs.
                                                                        </p>
                                                                    </li>
                                                                    <!-- Step 6 -->
                                                                    <li class="splide__slide flex flex-col justify-start bg-white ">
                                                                        <img src="{{ asset('images/Becker_Central_System_6_Steps_Thumbnail_7.webp') }}" alt="Step 1"
                                                                            class="w-full h-auto object-cover rounded-xl mb-4">
                                                                        <div class="flex items-center text-left mb-2">
                                                                            <span class="text-3xl font-extrabold text-[#1e3a8a] mr-2">6</span>
                                                                            <span class="text-xl font-bold text-[#1e3a8a]">Service</span>
                                                                        </div>
                                                                        <p class="text-gray-700 ">
                                                                            And if something does go wrong, we are there for you! We assure you of an optimal offer of
                                                                            maintenance contracts and a
                                                                            worldwide warranty for repairs and spare parts.
                                                                        </p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="max-w-7xl mx-auto my-16 px-4">
                                                            <h2 class="text-2xl md:text-3xl font-bold text-black mb-8">ADVANTAGES</h2>
                                                            <div class="space-y-2">
                                                                <!-- Item 1: Closed by default, with border bottom -->
                                                                <div class="rounded-lg p-4 border-b border-gray-200" data-aos="fade-up" data-aos-delay="100">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left focus:outline-none group"
                                                                        onclick="toggleAdvantage(0)">
                                                                        <span class="text-lg font-semibold text-[#1e3a8a] group-hover:underline">IMPROVE SYSTEM
                                                                            EFFICIENCY</span>
                                                                        <span class="text-3xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="advantage-content-0" class="mt-2 hidden">
                                                                        <p class="text-black">
                                                                            Our central pneumatic systems are always optimised for your specific requirements. Each
                                                                            system is designed and configured especially for the requirements of the given application.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- Item 2 -->
                                                                <div class="rounded-lg p-4 border-b border-gray-200" data-aos="fade-up" data-aos-delay="150">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left focus:outline-none group"
                                                                        onclick="toggleAdvantage(1)">
                                                                        <span class="text-lg font-semibold text-[#1e3a8a] group-hover:underline">No heat or noise
                                                                            emission in production area</span>
                                                                        <span class="text-3xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="advantage-content-1" class="mt-2 hidden">
                                                                        <p class="text-black">
                                                                            In production facilities, workplaces are being subjected to ever more stringent noise and
                                                                            heat emission regulations. In
                                                                            centralised pneumatic systems, there is no longer a need for separate vacuum pumps and
                                                                            compressors. Employees are
                                                                            subjected to minimum levels of heat, noise and oil mist.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- Item 3 -->
                                                                <div class="rounded-lg p-4 border-b border-gray-200" data-aos="fade-up" data-aos-delay="200">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left focus:outline-none group"
                                                                        onclick="toggleAdvantage(2)">
                                                                        <span class="text-lg font-semibold text-[#1e3a8a] group-hover:underline">Lower energy
                                                                            requirements for air conditioning systems</span>
                                                                        <span class="text-3xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="advantage-content-2" class="mt-2 hidden">
                                                                        <p class="text-black">
                                                                            Eliminating the many separate pumps leads to a significant reduction in convection heat.
                                                                            Thus, air conditioning systems
                                                                            are subjected to lower loads and consume less energy. By removing the exhaust outlets (and
                                                                            the accompanying oil mist)
                                                                            from the production area, the air quality is greatly improved in the production area.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- Item 4 -->
                                                                <div class="rounded-lg p-4 border-b border-gray-200" data-aos="fade-up" data-aos-delay="250">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left focus:outline-none group"
                                                                        onclick="toggleAdvantage(3)">
                                                                        <span class="text-lg font-semibold text-[#1e3a8a] group-hover:underline">Energy savings using
                                                                            VARIAIR Controller+</span>
                                                                        <span class="text-3xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="advantage-content-3" class="mt-2 hidden">
                                                                        <p class="text-black">
                                                                            The Becker VARIAIR Controller+ is the ideal controller solution for VARIAR Central Systems
                                                                            (VACS), Central Systems and
                                                                            Tank mounted vacuum systems.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- Item 5 -->
                                                                <div class="rounded-lg p-4 border-b border-gray-200" data-aos="fade-up" data-aos-delay="300">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left focus:outline-none group"
                                                                        onclick="toggleAdvantage(4)">
                                                                        <span class="text-lg font-semibold text-[#1e3a8a] group-hover:underline">Central maintenance
                                                                            area</span>
                                                                        <span class="text-3xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="advantage-content-4" class="mt-2 hidden">
                                                                        <p class="text-black">
                                                                            In centralised pneumatic systems, you can inspect and service the pneumatic supplies at a
                                                                            single location. It is much
                                                                            easier to access and inspect these units than to having to travel to each single supply unit
                                                                            for this purpose.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <!-- Item 6 -->
                                                                <div class="rounded-lg p-4 border-b border-gray-200" data-aos="fade-up" data-aos-delay="350">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left focus:outline-none group"
                                                                        onclick="toggleAdvantage(5)">
                                                                        <span class="text-lg font-semibold text-[#1e3a8a] group-hover:underline">Lower maintenance
                                                                            requirements</span>
                                                                        <span class="text-3xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="advantage-content-5" class="mt-2 hidden">
                                                                        <p class="text-black">
                                                                            Plants without a centralised pneumatic supply system typically have multiple vacuum pumps
                                                                            and compressors from multiple
                                                                            manufacturers in production. The many different replacement and wear parts required for each
                                                                            separate system results in
                                                                            drastically increased logistics and becomes expensive for the plant operator. Generally
                                                                            speaking, vacuum pumps and
                                                                            compressors in centralised pneumatic systems are low maintenance and utilise many of the
                                                                            same parts and materials. This
                                                                            restricts the range of required parts to an absolute minimum.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <section id="roots" data-aos="fade-up" data-aos-delay="300">
                                                            <div class="max-w-7xl mx-auto py-12 px-4 flex flex-col md:flex-row gap-8 items-start">
                                                                <!-- Left: Text Content -->
                                                                <div class="flex-1">
                                                                    <h2 class="text-4xl md:text-5xl font-bold text-black mb-2">ROOTS BOOSTER</h2>
                                                                    <h3 class="text-3xl md:text-4xl font-bold text-[#1e3a8a] mb-6">PACKAGES</h3>
                                                                    <p class="text-black  mb-4">
                                                                        The touch-free operating and oil-free compressing roots booster pump represents an efficient
                                                                        solution for pumping stations used in the food packaging industry (primary packaging). The
                                                                        evacuation speed is considerably increased compared to the single vacuum pump integrated into the
                                                                        packaging machine. With its integrated bypass it offers high operational reliability and
                                                                        availability for high-performance packaging processes.
                                                                    </p>
                                                                    <p class="text-black">
                                                                        The roots pump supplements an existing vacuum pump. Together with this backing pump it offers
                                                                        compact partial centralisation. The backing pump used is an oil-lubricated rotary-vane vacuum pump
                                                                        by Becker.
                                                                    </p>
                                                                </div>
                                                                <!-- Right: Image Card -->
                                                                <div class="w-full md:w-80 flex-shrink-0">
                                                                    <div class="bg-[#f7f7f7] rounded-xl border p-4 flex flex-col items-center">
                                                                        <div class="text-lg font-bold text-[#1e3a8a] mb-2 text-center">Roots Booster Packages PS</div>
                                                                        <img src="{{ asset('images/Becker_Roots_Booster_Package_trans.webp') }}" alt="Roots Booster Packages PS"
                                                                            class="w-40 h-32 object-contain mx-auto mb-2">
                                                                        <div class="w-full rounded-b-xl text-center py-3 text-black font-semibold text-base mt-2">
                                                                            500 – 2000 m<sup>3</sup>/h &bull; 50 Hz<br>
                                                                            600 – 2400 m<sup>3</sup>/h &bull; 60 Hz
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>

                                                        <section id="vessel" data-aos="fade-up" data-aos-delay="400">
                                                            <div class="max-w-7xl mx-auto py-12 px-4 flex flex-col md:flex-row gap-8 items-start">
                                                                <!-- Left: Text Content -->
                                                                <div class="flex-1">
                                                                    <h2 class="text-4xl md:text-5xl font-bold text-black mb-2">VACUUM SYSTEMS</h2>
                                                                    <h3 class="text-3xl md:text-4xl font-bold text-[#1e3a8a] mb-6">WITH VESSEL</h3>
                                                                    <p class="text-black mb-4">
                                                                        Whenever a certain vacuum needs to be provided, vacuum systems from Gebr. Becker are employed.
                                                                        Systems for a continuous provisioning generally contain one or several vacuum pumps mounted on a
                                                                        vessel.
                                                                    </p>
                                                                    <p class="text-black mb-4">
                                                                        Vessels are available in the sizes 90, 250, 500, 750, 1000 and 1500 litres in horizontal versions.
                                                                        They are hot-dip galvanised internally and externally. For the automatic regulation of the vacuum
                                                                        level, the systems are equipped with an electrical cabinet. It includes a transformer for power
                                                                        supply of the pressure switch, time relay, On/Off switch, main switch, operation and fault indicator
                                                                        as well as operating hours counter. A suction filter, shut-off valves and a condensate drain are
                                                                        also included in the ready-for-connection delivery. Furthermore, all systems are designed so that
                                                                        they can easily be equipped with additional accessories such as separators, ball valves, etc.
                                                                    </p>
                                                                    <p class="text-black">
                                                                        If vacuum provisioning has already been arranged for or is not required, the pumps may also be
                                                                        consolidated in a space-saving rack system. For instance, a medicine rack can be equipped with 3 dry
                                                                        running vacuum pumps from the VTLF series, secretion separators and electrical cabinet. In addition
                                                                        to even bigger oil-lubricated vacuum pumps, 2000 litre vessels can also be used for centralised
                                                                        systems. The pumps and vessels are then installed separately. The highly flexible Becker vacuum
                                                                        system can thus always be optimally integrated in the customer application!
                                                                    </p>
                                                                </div>
                                                                <!-- Right: Image and Caption -->
                                                                <div class="w-full md:w-96 flex-shrink-0 flex flex-col items-center">
                                                                    <img src="{{ asset('images/Becker_Vacuum_System_with_Vessel_VT_4.40.webp') }}" alt="VT 4.40 on vessel"
                                                                        class="w-full max-w-xs object-contain mb-2">
                                                                    <div class="text-[#1e3a8a] font-semibold text-base text-center">
                                                                        <a href="#" class="underline">VT 4.40</a> in sound proof box SH 19 on vessel incl. electrical
                                                                        cabinet
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>

                                                        <!-- D and L Systems Grid -->
                                                        <div class="bg-[#f7f7f7] py-10 px-4">
                                                            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                                                                <!-- D Systems -->
                                                                <div>
                                                                    <div class="text-2xl font-bold text-[#1e3a8a] mb-2">D Systems</div>
                                                                    <div class="mb-2">
                                                                        <a href="#" class="text-[#1e3a8a] underline">Dry running vacuum pumps</a>
                                                                        <span class="text-black"> (VT, VX, VTLF &amp; VVXLF) are used here. This allows a vacuum of up
                                                                            to 90 % to be achieved.</span>
                                                                    </div>
                                                                    <div class="border rounded-lg bg-white p-4 flex flex-col items-center max-w-xs">
                                                                        <div class="font-bold text-[#1e3a8a] mb-2">D1/D2/D3</div>
                                                                        <img src="{{ asset('images/Becker_D2_Vacuum_System_with_Tank_trans.webp') }}" alt="D1/D2/D3"
                                                                            class="w-64 h-auto object-contain mb-2">
                                                                        <div class="text-black text-center text-base">
                                                                            16 – 488 m<sup>3</sup>/h &bull; 50 Hz<br>
                                                                            19 – 552 m<sup>3</sup>/h &bull; 60 Hz
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- L Systems -->
                                                                <div>
                                                                    <div class="text-2xl font-bold text-[#1e3a8a] mb-2">L Systems</div>
                                                                    <div class="mb-2">
                                                                        <a href="#" class="text-[#1e3a8a] underline">Oil-lubricated vacuum pumps</a>
                                                                        <span class="text-black"> (U 4. &amp; U 5.) are used here. This allows a vacuum of up to 99.9 %
                                                                            to be achieved.</span>
                                                                    </div>
                                                                    <div class="border rounded-lg bg-white p-4 flex flex-col items-center max-w-xs">
                                                                        <div class="font-bold text-[#1e3a8a] mb-2">L1/L2/L3</div>
                                                                        <img src="{{ asset('images/Becker_L3_Vacuum_System_with_Tank_trans.webp') }}" alt="L1/L2/L3"
                                                                            class="w-64 h-full object-contain mb-2">
                                                                        <div class="text-black text-center text-base">
                                                                            18 – 900 m<sup>3</sup>/h &bull; 50 Hz<br>
                                                                            21 – 1080 m<sup>3</sup>/h &bull; 60 Hz
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- VARIAIR CONTROLLER+ Section -->
                                                        <section id="controller" data-aos="fade-up" data-aos-delay="500">
                                                            <div class="bg-white py-12 px-4">
                                                                <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-8">
                                                                    <div class="flex-1">
                                                                        <h2 class="text-4xl md:text-5xl font-bold text-black mb-2">VARIAIR CONTROLLER+</h2>
                                                                        <h3 class="text-3xl md:text-4xl font-bold text-[#1e3a8a] mb-6">FOR SYSTEMS SOLUTIONS</h3>
                                                                        <p class="text-black">
                                                                            The controller is easily adjustable to individual requirements. The VARIAIR Controller+ is a
                                                                            sustainable technology and solution to control and monitor air supply systems. Vacuum and
                                                                            pressure pumps, equipped with or without Becker frequency converter technology (VARIAIR Units),
                                                                            can merge into user-friendly complete systems. Different types of pumps, for instance side
                                                                            channel blowers and rotary vane pumps, can be combined and tailored to suit a specific need as a
                                                                            VARIAIR Central System.
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex-shrink-0 flex flex-col items-center">
                                                                        <img src="{{ asset('images/Becker_Logo_VARIAIR_Controller_.webp') }}" alt="VARIAIR Controller+"
                                                                            class="w-64 max-w-full object-contain mb-2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        </section>

                                                        <div class="max-w-4xl mx-auto my-16 px-4">
                                                            <h2 class="text-2xl md:text-3xl font-bold text-black mb-8 text-center">DISCOVER THE</h2>
                                                            <div class="space-y-2">
                                                                <!-- Efficiency (open by default) -->
                                                                <div class="border-b border-gray-200">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left py-2 focus:outline-none group"
                                                                        onclick="toggleDiscover(0)">
                                                                        <span class="text-xl font-semibold text-[#1e3a8a] group-hover:underline">EFFICIENCY</span>
                                                                        <span class="text-2xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="discover-content-0" class="mt-2 block">
                                                                        <ul class="text-black divide-y divide-gray-200">
                                                                            <li class="py-2">Full support and integration of VARIAIR Units</li>
                                                                            <li class="py-2">Sensor guided control for up to 8 pressure levels</li>
                                                                            <li class="py-2">Increase of service life due to balanced run time of each pump</li>
                                                                            <li class="py-2">Improved energy efficiency when bundled into a system</li>
                                                                            <li class="py-2">Reduced service costs</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- Customization -->
                                                                <div class="border-b border-gray-200">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left py-2 focus:outline-none group"
                                                                        onclick="toggleDiscover(1)">
                                                                        <span class="text-xl font-semibold text-[#1e3a8a] group-hover:underline">CUSTOMIZATION</span>
                                                                        <span class="text-2xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="discover-content-1" class="mt-2 hidden">
                                                                        <ul class="text-black divide-y divide-gray-200">
                                                                            <li class="py-2">Simple upgrade capability due to modular component design</li>
                                                                            <li class="py-2">Easy integration of customer specific parts and components</li>
                                                                            <li class="py-2">Customizable graphical user interface e.g. customer logo</li>
                                                                            <li class="py-2">Easy implementation of additional application specific features</li>
                                                                            <li class="py-2">Fieldbus and Ethernet options available</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- Advantages -->
                                                                <div class="border-b border-gray-200">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left py-2 focus:outline-none group"
                                                                        onclick="toggleDiscover(2)">
                                                                        <span class="text-xl font-semibold text-[#1e3a8a] group-hover:underline">ADVANTAGES</span>
                                                                        <span class="text-2xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="discover-content-2" class="mt-2 hidden">
                                                                        <ul class="text-black divide-y divide-gray-200">
                                                                            <li class="py-2">Suitable for all systems; retrofitting is possible</li>
                                                                            <li class="py-2">Optimized operation for each specific application</li>
                                                                            <li class="py-2">Intuitive operating interface</li>
                                                                            <li class="py-2">Consistent software design and hardware for numerous types of systems</li>
                                                                            <li class="py-2">Support of various languages and units of measurements</li>
                                                                            <li class="py-2">Overall control and monitoring of the controller via customer network
                                                                                possible</li>
                                                                            <li class="py-2">Logging and diagnostic tool</li>
                                                                            <li class="py-2">Reduction of wear due to bundling of all pumps</li>
                                                                            <li class="py-2">Manual operation mode</li>
                                                                            <li class="py-2">Interactive assistance and demonstration of maintenance procedures</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- Features -->
                                                                <div class="border-b border-gray-200">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left py-2 focus:outline-none group"
                                                                        onclick="toggleDiscover(3)">
                                                                        <span class="text-xl font-semibold text-[#1e3a8a] group-hover:underline">FEATURES</span>
                                                                        <span class="text-2xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="discover-content-3" class="mt-2 hidden">
                                                                        <ul class="text-black divide-y divide-gray-200">
                                                                            <li class="py-2">VARIAIR Controller+ with 7" or 10.1" Touchscreen or without display</li>
                                                                            <li class="py-2">All components UL/CSA listed</li>
                                                                            <li class="py-2">Protection class according to EN60529, Touchscreen (front side) IP65</li>
                                                                            <li class="py-2">Maintenance free, no hard disk, fan or battery</li>
                                                                            <li class="py-2">All components available worldwide</li>
                                                                            <li class="py-2">Various types of digital and analog modules available</li>
                                                                            <li class="py-2">Fieldbus and Ethernet options available</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- The Becker Solutions -->
                                                                <div class="border-b border-gray-200">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left py-2 focus:outline-none group"
                                                                        onclick="toggleDiscover(4)">
                                                                        <span class="text-xl font-semibold text-[#1e3a8a] group-hover:underline">THE BECKER
                                                                            SOLUTIONS</span>
                                                                        <span class="text-2xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="discover-content-4" class="mt-2 hidden">
                                                                        <ul class="text-black divide-y divide-gray-200">
                                                                            <li class="py-2">The Becker VARIAIR Controller+ is the ideal controller solution for:
                                                                                <ul class="list-disc ml-6 mt-2">
                                                                                    <li>VARIAR Central Systems (VACS)</li>
                                                                                    <li>Central systems</li>
                                                                                    <li>Tank mounted vacuum systems</li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="py-2">The interchangeability of old Becker systems is possible.</li>
                                                                            <li class="py-2">The following products can be integrated:
                                                                                <ul class="list-disc ml-6 mt-2">
                                                                                    <li>Dry running rotary vane pumps</li>
                                                                                    <li>Oil lubricated rotary vane pumps</li>
                                                                                    <li>Screw vacuum pumps</li>
                                                                                    <li>Claw pumps</li>
                                                                                    <li>Side channel blowers</li>
                                                                                    <li>Radial blowers</li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!-- Typical Applications -->
                                                                <div class="border-b border-gray-200">
                                                                    <button type="button"
                                                                        class="flex justify-between items-center w-full text-left py-2 focus:outline-none group"
                                                                        onclick="toggleDiscover(5)">
                                                                        <span class="text-xl font-semibold text-[#1e3a8a] group-hover:underline">TYPICAL
                                                                            APPLICATIONS</span>
                                                                        <span class="text-2xl text-[#1e3a8a] font-bold">+</span>
                                                                    </button>
                                                                    <div id="discover-content-5" class="mt-2 hidden">
                                                                        <ul class="text-black divide-y divide-gray-200">
                                                                            <li class="py-2">Vacuum packaging for the food industry</li>
                                                                            <li class="py-2">Vacuum supported hold-down CNC router tables for the wood working industry
                                                                            </li>
                                                                            <li class="py-2">Handling, separation and transportation of paper for the printing industry
                                                                            </li>
                                                                            <li class="py-2">Handling (pick and place) of electronic components in clean room
                                                                                environments</li>
                                                                            <li class="py-2">Aspiration applications for the medical and dental industry</li>
                                                                            <li class="py-2">Manufacturing and packaging of cigarettes for the tobacco industry</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="max-w-6xl mx-auto py-12 px-4">
                                                            <div id="gallery-splide" class="splide">
                                                                <div class="splide__track">
                                                                    <ul class="splide__list">
                                                                        @foreach([
        ['img' => 'images/Becker_VARIAIR_Controller__Touchdisplay.webp', 'title' => 'Touch Display'],
        ['img' => 'images/Becker_VARIAIR_KombiTool_for_VARIAIR_Central_System_with_SV_and_KVT_pumps.webp', 'title' => 'VACS'],
        ['img' => 'images/Becker_VARIAIR_KombiTool_for_Central_System_with_VADS_pumps.webp', 'title' => 'VADS Central System'],
        ['img' => 'images/Becker_VARIAIR_KombiTool_for_Vacuum_System_with_Tank.webp', 'title' => 'Vacuum System With Tank'],
        ['img' => 'images/Becker_VARIAIR_KombiTool_Feldbus-_und_Industrial_Ethernet-Anbindung.webp', 'title' => 'Fieldbus & Ethernet System'],
    ] as $item)
                                                                               <li      class="splide__slide group relative overflow-hidden rounded-xl shadow-lg">
                                                                                                                                    <img src="{{ asset($item['img']) }}" alt="{{ $item['title'] }}"
                                                                                                                                            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105" />
                                                                                                                                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                                                                                                                        <span class="text-white text-2xl font-bold px-4 py-2 rounded">{{ $item['title'] }}</span>
                                                                                                                                        </div>
                                                                                                                                </li>
                                                                        @endforeach
                                                                </ul>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                @include('partials.banner-section')
                                                @include('partials.contact-section')
                                                <!-- Splide CSS -->
                                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
                                                <!-- Splide JS -->
                                                <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function () {
                                                        new Splide('#steps-splide', {
                                                            type: 'slide',
                                                            perPage: 2,
                                                            gap: '2rem',
                                                            pagination: false,
                                                            arrows: true,
                                                            breakpoints: {
                                                                768: {
                                                                    perPage: 1,
                                                                },
                                                            },
                                                        }).mount();
                                                    });
                                                </script>
                                                <!-- Add AOS JS and init -->
                                                <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function () {
                                                        AOS.init({
                                                            once: true,
                                                            duration: 800,
                                                        });
                                                    });
                                                </script>
                                                <script>
                                                    function toggleAdvantage(idx) {
                                                        for (let i = 0; i < 6; i++) {
                                                            const content = document.getElementById('advantage-content-' + i);
                                                            if (i === idx) {
                                                                content.classList.toggle('hidden');
                                                                content.classList.toggle('block');
                                                            } else {
                                                                    content.classList.add('hidden');
                                                                content.classList.remove('block');
                                                            }
                                                        }
                                                    }
                                                </script>
                                                <script>
                                                    function toggleDiscover(idx) {
                                                        for (let i = 0; i < 6; i++) {
                                                            const content = document.getElementById('discover-content-' + i);
                                                            if (i === idx) {
                                                                content.classList.toggle('hidden');
                                                                content.classList.toggle('block');
                                                            } else {
                                                                    content.classList.add('hidden');
                                                                content.classList.remove('block');
                                                            }
                                                        }
                                                    }
                                                </script>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function () {
                                                        new Splide('#gallery-splide', {
                                                            type: 'loop',
                                                            perPage: 3,
                                                            gap: '1.5rem',
                                                            breakpoints: {
                                                                1024: { perPage: 2 },
                                                                640: { perPage: 1 },
                                                                },
                                                                pagination: false,
                                                                arrows: true,
                                                            }).mount();
                                                        });
                                                    </script>
@endsection