<section class="relative md:-mb-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 ">
        <div class="flex flex-col md:flex-row rounded-3xl overflow-hidden bg-[#F6F5F2] shadow-xl w-full">
            <!-- Left Side - Form -->
            <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <span
                    class="inline-block px-4 py-1 rounded-full bg-gray-200 w-fit text-gray-700 text-xs font-semibold mb-4">SCHEDULE
                    CONSULTATION</span>
                <h2 class="text-4xl font-bold text-[#23403A] mb-4">Let's Connect</h2>
                <p class="text-gray-700 mb-8">Connect with our experts for a free consultation and tailored solutions.
                </p>

                <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Your name</label>
                        <input type="text" name="name" id="name" placeholder="e.g. John Smith"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white px-4 py-2">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input type="email" name="email" id="email" placeholder="e.g. john@email.com"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white px-4 py-2">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone number</label>
                        <input type="text" name="phone" id="phone" placeholder="e.g. +1 222 444 66"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white px-4 py-2">
                    </div>
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700">Company name</label>
                        <input type="text" name="company" id="company" placeholder="e.g. Execor"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white px-4 py-2">
                    </div>
                    <div class="md:col-span-2">
                        <label for="message" class="block text-sm font-medium text-gray-700">Your message</label>
                        <textarea id="message" name="message" rows="4" placeholder="Type here ..."
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm bg-white px-4 py-2"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <div class="mt-8">
                            <a href="#"
                                class="inline-block bg-[#1e3a8a] text-white font-semibold py-3 px-8 rounded-full hover:bg-[#2563eb] transition">
                                Schedule a Free Consultation
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Right Side - Image and Call to Action -->
            <div class="w-full md:w-1/2 relative">
                <img src="{{ asset('images/homepage/meeting.jpg') }}" alt="Meeting" class="w-full h-full object-cover">
                <div class="absolute bottom-8 left-8 bg-white rounded-full px-6 py-4 flex items-center shadow-lg">
                    <div class="w-10 h-10 rounded-full bg-[#2563eb] flex items-center justify-center mr-4">
                        {{-- Phone Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.135l-2.596 1.584a1 1 0 00-.796 1.12l.924 3.084a1 1 0 001.113.713l3.084-.924a1 1 0 001.12-.796l1.584-2.596a1 1 0 011.135-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <p class="text-gray-700 text-sm">Call us at <span class="font-semibold">(101) 500 0200</span> or
                        fill out our form, <br />and we'll contact you within one business day.</p>
                </div>
            </div>
        </div>
    </div>
</section>
