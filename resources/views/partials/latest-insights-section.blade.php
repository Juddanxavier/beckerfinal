<!-- resources/views/partials/latest-insights-section.blade.php -->

<section class="py-16" data-aos="fade-up" data-aos-duration="1000">
    <div class="container mx-auto px-4 max-w-screen-xl ">
        <div class="text-center mb-12" data-aos="fade-up" data-aos-delay="100">
            <span class="inline-block bg-gray-200 text-gray-700 text-xs font-semibold px-3 py-1 rounded-full mb-4"
                data-aos="fade-in" data-aos-delay="150">INSIGHTS</span>
            <h2 class="text-4xl md:text-5xl text-[#23403A] font-semibold mb-4" data-aos="fade-up" data-aos-delay="200">
                Our Latest Insights</h2>
            <p class="text-lg text-gray-600" data-aos="fade-up" data-aos-delay="250">Proprietary data, expert analysis
                and bold thinking for leaders<br>who want
                to achieve the extraordinary.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Placeholder Card 1 -->
            <div class="bg-[#f8f7f5] rounded-3xl overflow-hidden flex flex-col md:flex-row" data-aos="fade-up"
                data-aos-delay="300">
                <div class="md:w-1/2">
                    <img src="{{ asset('images/homepage/pipes.jpg') }}" alt="Service 1"
                        class="w-full h-72 object-cover rounded-4xl">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-semibold text-gray-500 mb-2 block">Repairs</span>
                        <h3 class="text-lg font-semibold text-[#23403A] mb-4">How to Replace the Vanes in Your Vacuum
                            Pump
                        </h3>
                    </div>
                    <div class="text-right">
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 group-hover:bg-white transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Placeholder Card 2 -->
            <div class="bg-[#f8f7f5] rounded-3xl overflow-hidden flex flex-col md:flex-row" data-aos="fade-up"
                data-aos-delay="400">
                <div class="md:w-1/2">
                    {{-- Placeholder Image --}}
                    <img src="{{ asset('images/homepage/pipes.jpg') }}" alt="Service 1"
                        class="w-full h-72 object-cover rounded-4xl">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-semibold text-gray-500 mb-2 block">Service</span>
                        <h3 class="text-lg font-semibold text-[#23403A] mb-4">Common Problems with Vacuum Pump Parts +
                            Solutions</h3>
                    </div>
                    <div class="text-right">
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 group-hover:bg-white transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="500">
            <div class="mt-8">
                <a href="#"
                    class="inline-block bg-[#1e3a8a] text-white font-semibold py-3 px-8 rounded-full hover:bg-[#2563eb] transition"
                    data-aos="zoom-in" data-aos-delay="550">
                    More Insights
                </a>
            </div>
        </div>

    </div>
</section>
