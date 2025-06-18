@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-br from-[#F6F5F2] to-white min-h-screen pt-6">



        <div class="max-w-7xl mx-auto py-16 px-4 flex flex-col items-start " data-aos="fade-up" data-aos-duration="800">

            <h1 class="text-4xl md:text-5xl my-8 text-black font-bold leading-tight ">
                Download <span class="text-[#1e3a8a]">Brochures</span>
            </h1>
            <div class="w-full my-4">
                <img src="{{ asset('images/Becker_About.jpg') }}" alt="Financial Well-Being"
                    class="rounded-3xl w-full object-cover h-[400px] md:h-[400px] mb-12" />
            </div>
            <form method="GET" action="{{ route('downloads.index') }}" class="w-full flex flex-col md:flex-row items-center gap-4 mb-8">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search downloads..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-200" />
                <button type="submit"
                    class="px-6 py-2 bg-[#1e3a8a] text-white font-semibold rounded-full hover:bg-[#2563eb] transition">
                    Search
                </button>
            </form>
            @if($downloads->isEmpty())
                <p class="text-center text-gray-600">No downloadable brochures available at the moment.</p>
            @else
                <ul class="w-full divide-y divide-gray-300 rounded-lg bg-white">
                    @foreach($downloads as $download)
                        <li class="flex flex-col md:flex-row items-start md:items-center justify-between p-6 rounded-lg border" data-aos="fade-up">
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center space-x-2 mb-2">
                                    <span class="text-lg font-semibold text-gray-800 capitalize">{{ $download->title }}</span>
                                    <span class="text-xs text-gray-400 flex items-center gap-1">
                                        <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <rect x="3" y="3" width="18" height="18" rx="2" fill="#fff" stroke="#ef4444" stroke-width="2"/>
                                            <path d="M8 16V8h1.5a2 2 0 0 1 0 4H8m4 4v-8m3 8v-8h2a2 2 0 0 1 0 4h-2" stroke="#ef4444" stroke-width="1.5"/>
                                        </svg>
                                        {{ basename($download->file_path) }}
                                    </span>
                                    <span class="text-xs text-gray-400 space-x-4">
                                        @php
        $disk = Illuminate\Support\Facades\Storage::disk('public');
        if ($disk->exists($download->file_path)) {
            $bytes = $disk->size($download->file_path);
            if ($bytes >= 1048576) {
                echo number_format($bytes / 1048576, 2) . ' MB';
            } elseif ($bytes >= 1024) {
                echo number_format($bytes / 1024, 2) . ' KB';
            } else {
                echo $bytes . ' B';
            }
        } else {
            echo 'N/A';
        }
                                        @endphp
                                    </span>
                                </div>
                                @if($download->description)
                                    <p class="text-gray-600 text-base mt-1">{{ $download->description }}</p>
                                @endif
                            </div>
                            <div class="flex flex-col items-start mt-4 md:mt-0 md:ml-6">
                                <a href="{{ route('downloads.download', $download->id) }}"
                                    class="inline-flex items-center px-5 py-2 bg-[#1e3a8a] text-white font-semibold rounded-full hover:bg-[#2563eb] transition">
                                    <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 10v6m0 0l-3-3m3 3l3-3m-8 7h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Download
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="w-full flex justify-center mt-10">
                    {{ $downloads->links('vendor.pagination.tailwind') }}
                </div>
            @endif
        </div>

    </div>


        </div>
    </div>
    @include('partials.banner-section')
    @include('partials.contact-section')
@endsection