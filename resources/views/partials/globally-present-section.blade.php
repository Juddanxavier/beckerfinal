{{-- resources/views/partials/globally-present-section.blade.php --}}
<section class="py-16 bg-white" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
        <!-- Left Column -->
        <div class="md:w-1/2 mb-8 md:mb-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up" data-aos-delay="150">Globally <span
                    class="text-[#1e3a8a]">Present</span></h2>
            <p class="text-base text-[#234039] mb-8" data-aos="fade-up" data-aos-delay="200">With 19 subsidiaries and
                over 40 representatives worldwide, Becker provides comprehensive international coverage and flexible
                support. This ensures fast and efficient on-site assistance, tailored solutions for industrial vacuum
                pump needs, and a high responsiveness to your individual requirements. View our locations:</p>
            <a href="#"
                class="inline-block bg-[#1e3a8a] text-white font-semibold py-3 px-8 rounded-full shadow hover:bg-[#2563eb] transition text-lg"
                data-aos="zoom-in" data-aos-delay="250">View our locations</a>
        </div>
        <!-- Right Column -->
        <div class="md:w-1/2 flex justify-center" data-aos="fade-left" data-aos-delay="300">
            <img src="{{ asset('images/world-map.webp') }}" alt="World Map" class="w-full max-w-lg object-contain" />
        </div>
    </div>
</section>