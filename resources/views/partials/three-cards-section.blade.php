<!-- resources/views/partials/three-cards-section.blade.php -->

<section class="py-16" data-aos="fade-up" data-aos-duration="1000">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">

            {{-- Card 1 (Left) --}}
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="0">
                <div
                    class="group bg-[#F6F5F2] rounded-3xl p-8 h-full flex flex-col justify-between hover:bg-[#1e3a8a] hover:text-white transition-colors duration-200 cursor-pointer relative">
                    <div>
                        <span
                            class="text-xs text-gray-600 group-hover:text-white uppercase p-2 rounded-3xl outline outline-1 outline-gray-400 mb-4">Quality
                            Management</span>
                        <h3 class="text-xl  text-gray-800 group-hover:text-white mt-4 mb-4 leading-tight font-bold">
                            We Prioritize Quality
                        </h3>
                        <div class="flex justify-end absolute top-8 right-8 z-10">
                            <a href="{{ route('about') }}"
                                class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow group-hover:bg-white transition-colors duration-200">
                                {{-- Arrow Icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-auto">
                        {{-- Image Placeholder --}}
                        <div class="mt-6 rounded-lg overflow-hidden">
                            <img src="{{ asset('images/homepage/Additive-Manufacturing.jpg') }}" alt="Placeholder Image"
                                class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2 (Middle - Green) --}}
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="100">
                <div
                    class="group bg-[#1e3a8a] rounded-3xl p-8 h-full flex flex-col justify-between text-white cursor-pointer">
                    <div>
                        {{-- Image Placeholder --}}
                        <div class="rounded-lg overflow-hidden mb-6">
                            <img src="{{ asset('images/homepage/becker-pumps-1951.jpg') }}" alt="Placeholder Image"
                                class="w-full h-auto object-cover">
                        </div>
                        <span
                            class="text-xs text-white group-hover:text-white uppercase p-2 rounded-3xl outline outline-1 outline-gray-400 mb-4">Company
                            History</span>
                        <h3 class="text-xl mt-4 mb-4 leading-tight font-bold">A History of Innovation
                        </h3>
                    </div>
                    <div class="mt-auto flex justify-end">
                        <a href="{{ route('about') }}"
                            class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow group-hover:bg-white transition-colors duration-200">
                            {{-- Arrow Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 3 (Right) --}}
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                <div
                    class="group bg-[#F6F5F2] rounded-3xl p-8 h-full flex flex-col justify-between hover:bg-[#1e3a8a] text-white transition-colors duration-200 cursor-pointer relative">
                    <div>
                        <span
                            class="text-xs text-gray-600 group-hover:text-white uppercase p-2 rounded-3xl outline outline-1 outline-gray-400 mb-4">Becker
                            Worldwide</span>
                        <h3 class="text-xl text-[#08122A] group-hover:text-white mt-4 mb-4 leading-tight font-bold">
                            A Global Brand</h3>
                        <div class="flex justify-end absolute top-6 right-8 z-10">
                            <a href="{{ route('about') }}"
                                class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow group-hover:bg-[green-700] transition-colors duration-200">
                                {{-- Arrow Icon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-auto">
                        {{-- Image Placeholder --}}
                        <div class="mt-6 rounded-lg overflow-hidden">
                            <img src="{{ asset('images/homepage/Medical-Technology.jpg') }}" alt="Placeholder Image"
                                class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>