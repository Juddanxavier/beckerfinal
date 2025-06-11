<!-- resources/views/partials/premium-service-section.blade.php -->

<section class="py-24 bg-gray-100" data-aos="fade-up" data-aos-duration="1000">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-16 items-center">
            <!-- Left Column: Text Content -->
            <div class="md:col-span-2 text-base text-gray-700 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                <h2 class="text-4xl md:text-4xl mb-6" data-aos="fade-up" data-aos-delay="150">Premium Service</h2>
                <p class="mb-6" data-aos="fade-up" data-aos-delay="200">
                    For us, a business relationship doesn't end with the purchase of an industrial pump for air
                    transportation or vacuum generation. We offer a broad range of services, including installation,
                    vacuum pump servicing, compressor maintenance, repair, and spare parts. Quick assistance,
                    professional dedication, and comprehensive availability of original spare parts help enhance your
                    system efficiency, ensure long uptime, and minimise maintenance costs.
                </p>
                <p data-aos="fade-up" data-aos-delay="250">
                    For over a century, customer satisfaction has been our top priority. Trust the globally recognised
                    vacuum pump manufacturer.
                </p>
                <div class="mt-8" data-aos="zoom-in" data-aos-delay="300">
                    <a href="#"
                        class="inline-block bg-[#1e3a8a] text-white font-semibold py-3 px-8 rounded-full hover:bg-[#2563eb] transition">
                        Explore service offerings
                    </a>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="md:col-span-3" data-aos="fade-left" data-aos-delay="400">
                {{-- Image: Becker Service Van --}}
                <img src="{{ asset('images/homepage/beckervan.jpg') }}" alt="Becker Service Van"
                    class="rounded-4xl w-full h-auto object-cover">
            </div>
        </div>
    </div>
</section>
