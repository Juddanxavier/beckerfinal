@extends('layouts.app')

@section('content')
    <section class="bg-gradient-to-br from-[#F6F5F2] to-white py-16" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto py-16 px-4 flex flex-col items-start ">
            <h1 class="text-5xl my-8 text-[#234039] leading-tight ">
                Contact <span class="text-[#1e3a8a]">Becker India</span>
            </h1>
            <div class="w-full mt-4">
                <img src="{{ asset('images/contact.jpg') }}" alt="Contact Us"
                    class="rounded-3xl w-full object-cover h-[400px] md:h-[500px]" />
            </div>
            <p class="text-base text-[#234039] my-8 w-full md:w-1/2">
                Reach out to our team for all your vacuum pump and air system needs. We're here to provide you with expert
                advice, support, and solutions.
            </p>
        </div>
        <div class="w-full max-w-6xl mx-auto flex flex-col md:flex-row gap-10 items-start">
            <!-- Left: Contact Form -->
            <div class="flex-1 w-full">
                <div class="bg-white p-8 md:p-12 mb-10 md:mb-0">
                    <h3 class="text-3xl font-bold text-[#234039] mb-8 text-center">Send Us a Message</h3>
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        @if(session('success'))
                            <div class="mb-4 p-4 rounded bg-green-100 text-green-800 text-center">{{ session('success') }}</div>
                        @elseif(session('error'))
                            <div class="mb-4 p-4 rounded bg-red-100 text-red-800 text-center">{{ session('error') }}</div>
                        @endif
                        <div class="relative">
                            <select name="title" id="title" required
                                class="peer block w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb] outline-none transition appearance-none">
                                <option value="" disabled selected hidden></option>
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Dr">Dr</option>
                                <option value="Prof">Prof</option>
                            </select>
                            <label for="title"
                                class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-focus:-top-4 peer-focus:text-xs peer-focus:text-[#2563eb] bg-white px-1">Title
                                <span class="text-red-500">*</span></label>
                        </div>
                        <div class="relative">
                            <input type="text" name="name" id="name" required placeholder=" "
                                class="peer block w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb] outline-none transition" />
                            <label for="name"
                                class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-[#2563eb] bg-white px-1">First
                                name and surname <span class="text-red-500">*</span></label>
                        </div>
                        <div class="relative">
                            <input type="text" name="company" id="company" required placeholder=" "
                                class="peer block w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb] outline-none transition" />
                            <label for="company"
                                class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-[#2563eb] bg-white px-1">Company
                                <span class="text-red-500">*</span></label>
                        </div>
                        <div class="relative">
                            <input type="text" name="address" id="address" placeholder=" "
                                class="peer block w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb] outline-none transition" />
                            <label for="address"
                                class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-[#2563eb] bg-white px-1">Address</label>
                        </div>
                        <div class="relative">
                            <input type="text" name="city" id="city" required placeholder=" "
                                class="peer block w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb] outline-none transition" />
                            <label for="city"
                                class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-[#2563eb] bg-white px-1">City
                                <span class="text-red-500">*</span></label>
                        </div>
                        <div class="relative">
                            <input type="text" name="nation" id="nation" placeholder=" "
                                class="peer block w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb] outline-none transition" />
                            <label for="nation"
                                class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-[#2563eb] bg-white px-1">Nation/State</label>
                        </div>
                        <div class="relative">
                            <input type="text" name="phone" id="phone" required placeholder=" "
                                class="peer block w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb] outline-none transition" />
                            <label for="phone"
                                class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-[#2563eb] bg-white px-1">Telephone
                                <span class="text-red-500">*</span></label>
                        </div>
                        <div class="relative">
                            <input type="email" name="email" id="email" required placeholder=" "
                                class="peer block w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb] outline-none transition" />
                            <label for="email"
                                class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-[#2563eb] bg-white px-1">Email
                                <span class="text-red-500">*</span></label>
                        </div>
                        <div class="relative">
                            <textarea id="message" name="message" rows="4" required placeholder=" "
                                class="peer block w-full rounded-lg border border-gray-300 bg-transparent px-4 py-3 focus:border-[#2563eb] focus:ring-2 focus:ring-[#2563eb] outline-none transition resize-none"></textarea>
                            <label for="message"
                                class="absolute left-4 top-3 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-4 peer-focus:text-xs peer-focus:text-[#2563eb] bg-white px-1">Your
                                message <span class="text-red-500">*</span></label>
                        </div>
                        <div class="flex items-center mt-2">
                            <input type="checkbox" name="privacy" id="privacy" required class="mr-2 accent-[#2563eb]">
                            <label for="privacy" class="text-gray-700 text-sm font-semibold">I confirm that I accept and
                                agree to the <a href="#" class="underline text-[#2563eb]">Privacy Policy</a></label>
                        </div>
                        <div class="mt-6">
                            <button type="submit"
                                class="w-full inline-block bg-[#2563eb] text-white font-semibold py-3 px-8 rounded-full shadow hover:bg-[#1e3a8a] transition text-xl">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Right: Info & Map -->
            <div class="flex-1 w-full flex flex-col gap-8">
                <div class="bg-[#f9fafb] rounded-xl  p-8 mb-4">
                    <h2 class="text-xl font-bold text-[#234039] mb-2">Gebr Becker India Vacuum Pumps Pvt. Ltd.</h2>
                    <p class="text-[#234039] mb-2">
                        Office No.2, Bandal Capital, Near Kothrud Depot, Paud Road,<br>
                        Kothrud, Pune, Maharashtra, INDIA, PIN 411038
                    </p>
                    <p class="mb-2"><span class="font-semibold">Phone:</span> <a href="tel:+918956439335"
                            class="text-[#2563eb] hover:underline">+91 8956439335</a></p>
                    <p class="mb-2"><span class="font-semibold">Email:</span> <a href="mailto:info@becker-india.com"
                            class="text-[#2563eb] hover:underline">info@becker-india.com</a></p>
                </div>
                <div class="rounded-3xl overflow-hidden shadow-lg">
                    <iframe
                        src="https://www.google.com/maps?q=Office+No.2,+Bandal+Capital,+Near+Kothrud+Depot,+Paud+Road,+Kothrud,+Pune,+Maharashtra,+411038,+India&output=embed"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 bg-white" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-4xl mx-auto px-4">


            <div class="mb-12">
                <h3 class="text-xl font-bold text-[#234039] mb-4">Regional Contacts (India)</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-2xl shadow text-left">
                        <thead>
                            <tr>
                                <th class="py-3 px-4 text-[#2563eb]">Region</th>
                                <th class="py-3 px-4 text-[#2563eb]">Name</th>
                                <th class="py-3 px-4 text-[#2563eb]">Contact Number</th>
                                <th class="py-3 px-4 text-[#2563eb]">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <td class="py-2 px-4">North</td>
                                <td class="py-2 px-4">Deepak Kumar</td>
                                <td class="py-2 px-4"><a href="tel:+918956621608" class="text-[#234039] hover:underline">+91
                                        89566 21608</a></td>
                                <td class="py-2 px-4"><a href="mailto:deepak@becker-india.com"
                                        class="text-[#234039] hover:underline">deepak@becker-india.com</a></td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="py-2 px-4">Central (Gujarat, M.P, Rajasthan)</td>
                                <td class="py-2 px-4">Reejo Cherian</td>
                                <td class="py-2 px-4"><a href="tel:+918956439341" class="text-[#234039] hover:underline">+91
                                        89564 39341</a></td>
                                <td class="py-2 px-4"><a href="mailto:reejo@becker-india.com"
                                        class="text-[#234039] hover:underline">reejo@becker-india.com</a></td>
                            </tr>
                            <tr class="bg-white">
                                <td class="py-2 px-4">West (Maharashtra, Goa)</td>
                                <td class="py-2 px-4">Rudhir Bopche</td>
                                <td class="py-2 px-4"><a href="tel:+918956408839" class="text-[#234039] hover:underline">+91
                                        89564 08839</a></td>
                                <td class="py-2 px-4"><a href="mailto:rudhir@becker-india.com"
                                        class="text-[#234039] hover:underline">rudhir@becker-india.com</a></td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="py-2 px-4">South</td>
                                <td class="py-2 px-4">S.Venkatesan</td>
                                <td class="py-2 px-4"><a href="tel:+918956439342" class="text-[#234039] hover:underline">+91
                                        89564 39342</a></td>
                                <td class="py-2 px-4"><a href="mailto:venkatesh@becker-india.com"
                                        class="text-[#234039] hover:underline">venkatesh@becker-india.com</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mb-12">
                <h3 class="text-xl font-bold text-[#234039] mb-4">Other Countries</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-2xl shadow text-left">
                        <thead>
                            <tr>
                                <th class="py-3 px-4 text-[#2563eb]">Country</th>
                                <th class="py-3 px-4 text-[#2563eb]">Name</th>
                                <th class="py-3 px-4 text-[#2563eb]">Contact Number</th>
                                <th class="py-3 px-4 text-[#2563eb]">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white">
                                <td class="py-2 px-4">Bangladesh</td>
                                <td class="py-2 px-4">Lokesh Surana</td>
                                <td class="py-2 px-4"><a href="tel:+918956439338" class="text-[#234039] hover:underline">+91
                                        89564 39338</a></td>
                                <td class="py-2 px-4"><a href="mailto:lokesh@becker-india.com"
                                        class="text-[#234039] hover:underline">lokesh@becker-india.com</a></td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="py-2 px-4">Sri Lanka</td>
                                <td class="py-2 px-4">Anuradha Ghatge</td>
                                <td class="py-2 px-4"><a href="tel:+918956439337" class="text-[#234039] hover:underline">+91
                                        89564 39337</a></td>
                                <td class="py-2 px-4"><a href="mailto:anuradha@becker-india.com"
                                        class="text-[#234039] hover:underline">anuradha@becker-india.com</a></td>
                            </tr>
                            <tr class="bg-white">
                                <td class="py-2 px-4">Nepal</td>
                                <td class="py-2 px-4">Anuradha Ghatge</td>
                                <td class="py-2 px-4"><a href="tel:+918956439337" class="text-[#234039] hover:underline">+91
                                        89564 39337</a></td>
                                <td class="py-2 px-4"><a href="mailto:anuradha@becker-india.com"
                                        class="text-[#234039] hover:underline">anuradha@becker-india.com</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>




        </div>
    </section>
@endsection
