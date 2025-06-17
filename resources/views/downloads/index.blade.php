@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-br from-[#F6F5F2] to-white min-h-screen pt-6">
        <div class="max-w-7xl mx-auto py-16 px-4 flex flex-col items-start " data-aos="fade-up" data-aos-duration="800">
            <h1 class="text-4xl font-bold mb-8 text-center">Downloads</h1>

            @if($downloads->isEmpty())
                <p class="text-center text-gray-600">No downloadable brochures available at the moment.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($downloads as $download)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200" data-aos="fade-up">
                            @if($download->thumbnail_path)
                                <img src="{{ asset('storage/' . $download->thumbnail_path) }}" alt="{{ $download->title }} Thumbnail"
                                    class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                                    No Thumbnail
                                </div>
                            @endif
                            <div class="p-6">
                                <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $download->title }}</h2>
                                @if($download->description)
                                    <p class="text-gray-600 text-sm mb-4">{{ $download->description }}</p>
                                @endif
                                <a href="{{ route('downloads.download', $download->id) }}"
                                    class="inline-flex items-center px-4 py-2 bg-[#1e3a8a] text-white font-semibold rounded-full hover:bg-[#2563eb] transition">
                                    Download Brochure
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 10v6m0 0l-3-3m3 3l3-3m-8 7h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    @include('partials.banner-section')
    @include('partials.contact-section')
@endsection