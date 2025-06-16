<section class="py-16 font-sans bg-gradient-to-b from-[#F8F7F4] to-white" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8 mt-12">
            <div class="flex-1">
                <h2 class="text-4xl md:text-5xl mb-6 font-bold">
                    <span class="text-black">Premium</span>
                    <span class="text-[#1e3a8a]">Service</span>
                </h2>
                <p class="text-lg text-[#234039] mb-8 max-w-2xl">
                    With customer-specific solutions, a wide range of services and fast and comprehensive availability
                    of original spare
                    parts, BECKER increases the efficiency of your systems, ensures long service lives and minimises
                    your maintenance costs.

                </p>

            </div>
            <div class="flex-1 flex justify-end">
                <a href="#"
                    class="inline-flex items-center bg-[#1e3a8a] text-white text-lg font-semibold px-8 py-3 rounded-full shadow hover:bg-[#004a6b] hover:text-white transition-colors">
                    Free Consultation
                    {{-- <span class="ml-3 bg-white rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#1e3a8a]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span> --}}
                </a>
            </div>
        </div>
        <!-- Video Thumbnail with Lightbox -->
        <div class="w-full mt-12 flex flex-col md:flex-row gap-8 justify-center">
            <!-- First Video Thumbnail -->
            <div x-data="{ open: false }" class="flex-1 flex justify-center">
                <img src="https://img.youtube.com/vi/6oThaYjgn9c/maxresdefault.jpg" alt="Video Thumbnail"
                    class="w-full max-w-2xl rounded-[48px] cursor-pointer shadow-lg transition-transform hover:scale-105"
                    @click="open = true" />
                <!-- Lightbox Modal -->
                <div x-show="open" x-transition
                    class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50"
                    style="display: none;">
                    <div class="relative w-full max-w-4xl aspect-video">
                        <button @click="open = false" class="absolute top-2 right-2 text-white text-3xl z-10"
                            aria-label="Close">&times;</button>
                        <iframe x-show="open" :src="open ? 'https://www.youtube.com/embed/6oThaYjgn9c?autoplay=1' : ''"
                            class="w-full h-full rounded-[12px]" frameborder="0" allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- Second Video Thumbnail -->
            <div x-data="{ open: false }" class="flex-1 flex justify-center">
                <img src="https://img.youtube.com/vi/UpIuMQkDRDs/maxresdefault.jpg" alt="Video Thumbnail 2"
                    class="w-full max-w-2xl rounded-[48px] cursor-pointer shadow-lg transition-transform hover:scale-105"
                    @click="open = true" />
                <!-- Lightbox Modal -->
                <div x-show="open" x-transition
                    class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50"
                    style="display: none;">
                    <div class="relative w-full max-w-4xl aspect-video">
                        <button @click="open = false" class="absolute top-2 right-2 text-white text-3xl z-10"
                            aria-label="Close">&times;</button>
                        <iframe x-show="open" :src="open ? 'https://www.youtube.com/embed/UpIuMQkDRDs?autoplay=1' : ''"
                            class="w-full h-full rounded-[12px]" frameborder="0" allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-black mb-2 ">Our Services</h2>
        <h3 class="text-4xl md:text-5xl font-bold text-[#1e3a8a] mb-10 ">Vacuum Pump Repair & Service</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Card 1 -->
            <a href="/services/spare-parts"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="0">
                <img src="{{ asset('images/services/Becker_Original_Spare_Parts.webp') }}" alt="Becker spare parts"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Becker spare parts
                </div>
            </a>
            <!-- Card 2 -->
            <a href="/services/in-house-service"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="50">
                <img src="{{ asset('images/services/Becker_In-House_Service.webp') }}" alt="In-house service"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    In-house service
                </div>
            </a>
            <!-- Card 3 -->
            <a href="/services/field-service"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/services/Becker_Field_Service.webp') }}" alt="Field service"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Field service
                </div>
            </a>
            <!-- Card 4 -->
            <a href="/services/commissioning"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="150">
                <img src="{{ asset('images/services/Becker_Commissioning_Service.webp') }}" alt="Commissioning"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Commissioning
                </div>
            </a>
            <!-- Card 5 -->
            <a href="/services/inspection"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/services/Becker_Inspection_Service.webp') }}" alt="Inspection"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Inspection
                </div>
            </a>
            <!-- Card 6 -->
            <a href="/services/maintenance"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="250">
                <img src="{{ asset('images/services/Becker_Maintenance_Service.webp') }}" alt="Maintenance"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Maintenance
                </div>
            </a>
            <!-- Card 7 -->
            <a href="/services/repair"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('images/services/Becker_Repair_Service.webp') }}" alt="Repair"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Repair
                </div>
            </a>
            <!-- Card 8 -->
            <a href="/services/general-overhaul"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="350">
                <img src="{{ asset('images/services/Becker_General_Overhaul_Service.webp') }}" alt="General overhaul"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    General overhaul
                </div>
            </a>
            <!-- Card 9 -->
            <a href="/services/technical-advice"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="400">
                <img src="{{ asset('images/services/Becker_Technical_Advice_Service.webp') }}" alt="Technical advice"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Technical advice
                </div>
            </a>
            <!-- Card 10 -->
            <a href="/services/rental-devices"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="450">
                <img src="{{ asset('images/services/Becker_Rental_Device_Service.webp') }}" alt="Rental devices"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Rental devices
                </div>
            </a>
            <!-- Card 11 -->
            <a href="/services/replacement"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('images/services/Becker_Replacement_Service.webp') }}" alt="Replacement"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Replacement
                </div>
            </a>
            <!-- Card 12 -->
            <a href="/services/service-agreements"
                class="group bg-white rounded-xl shadow hover:shadow-xl transition-shadow overflow-hidden cursor-pointer block"
                data-aos="fade-up" data-aos-delay="550">
                <img src="{{ asset('images/services/Becker_Service_Agreements.webp') }}" alt="Service agreements"
                    class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
                <div class="bg-[#1e3a8a] text-white text-center py-3 text-lg font-semibold">
                    Service agreements
                </div>
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-[#f7f7f7]">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-extrabold text-[#1e3a8a] mb-8" data-aos="fade-up" data-aos-delay="0">
            Frequently
            Asked Questions
        </h2>
        <div x-data="{ selected: null }" class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="rounded-2xl border border-gray-200 bg-white transition-all duration-300" data-aos="fade-up"
                data-aos-delay="100">
                <button @click="selected === 1 ? selected = null : selected = 1"
                    class="w-full flex justify-between items-center text-left text-[#1e3a8a] font-semibold text-lg py-4 px-6 focus:outline-none transition-colors">
                    HOW CAN I ORDER REQUIRED SPARE PARTS?
                    <span class="text-2xl transition-transform" :class="selected === 1 ? 'rotate-45' : ''">+</span>
                </button>
                <div x-show="selected === 1" x-transition class="px-6 pb-4 text-[#234039] text-base">
                    You can order required spare parts by contacting our customer service or through our online portal.
                </div>
            </div>
            <!-- FAQ Item 2 -->
            <div class="rounded-2xl border border-gray-200 bg-white transition-all duration-300" data-aos="fade-up"
                data-aos-delay="200">
                <button @click="selected === 2 ? selected = null : selected = 2"
                    class="w-full flex justify-between items-center text-left text-[#1e3a8a] font-semibold text-lg py-4 px-6 focus:outline-none transition-colors">
                    WHY IS THE USE OF ORIGINAL PARTS SO IMPORTANT?
                    <span class="text-2xl transition-transform" :class="selected === 2 ? 'rotate-45' : ''">+</span>
                </button>
                <div x-show="selected === 2" x-transition class="px-6 pb-4 text-[#234039] text-base">
                    Original parts ensure the best performance, safety, and longevity of your equipment.
                </div>
            </div>
            <!-- FAQ Item 3 -->
            <div class="rounded-2xl border border-gray-200 bg-white transition-all duration-300" data-aos="fade-up"
                data-aos-delay="300">
                <button @click="selected === 3 ? selected = null : selected = 3"
                    class="w-full flex justify-between items-center text-left text-[#1e3a8a] font-semibold text-lg py-4 px-6 focus:outline-none transition-colors">
                    HOW CAN I FIND THE RIGHT PARTS FOR MY PUMP?
                    <span class="text-2xl transition-transform" :class="selected === 3 ? 'rotate-45' : ''">+</span>
                </button>
                <div x-show="selected === 3" x-transition class="px-6 pb-4 text-[#234039] text-base">
                    Refer to your pump's manual or contact our support team for assistance in identifying the correct
                    parts.
                </div>
            </div>
            <!-- FAQ Item 4 -->
            <div class="rounded-2xl border border-gray-200 bg-white transition-all duration-300" data-aos="fade-up"
                data-aos-delay="400">
                <button @click="selected === 4 ? selected = null : selected = 4"
                    class="w-full flex justify-between items-center text-left text-[#1e3a8a] font-semibold text-lg py-4 px-6 focus:outline-none transition-colors">
                    WHERE CAN I FIND THE PUMP TYPE / SERIAL NUMBER?
                    <span class="text-2xl transition-transform" :class="selected === 4 ? 'rotate-45' : ''">+</span>
                </button>
                <div x-show="selected === 4" x-transition class="px-6 pb-4 text-[#234039] text-base">
                    The pump type and serial number are usually located on the nameplate attached to your pump.
                </div>
            </div>
            <!-- FAQ Item 5 -->
            <div class="rounded-2xl border border-gray-200 bg-white transition-all duration-300" data-aos="fade-up"
                data-aos-delay="500">
                <button @click="selected === 5 ? selected = null : selected = 5"
                    class="w-full flex justify-between items-center text-left text-[#1e3a8a] font-semibold text-lg py-4 px-6 focus:outline-none transition-colors">
                    DOES BECKER ALSO OFFER MAINTENANCE AND REPAIRS?
                    <span class="text-2xl transition-transform" :class="selected === 5 ? 'rotate-45' : ''">+</span>
                </button>
                <div x-show="selected === 5" x-transition class="px-6 pb-4 text-[#234039] text-base">
                    Yes, Becker offers comprehensive maintenance and repair services for all our products.
                </div>
            </div>
        </div>
    </div>
</section>