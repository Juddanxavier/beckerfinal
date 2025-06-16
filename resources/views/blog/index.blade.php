@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-br from-[#F6F5F2] to-white ">
        <div class="max-w-7xl mx-auto py-16 px-4 flex flex-col items-start " data-aos="fade-up" data-aos-duration="800">

            <h1 class="text-4xl md:text-5xl my-8 text-[#234039] leading-tight ">
                Blogs <span class="text-[#1e3a8a]">and Insight</span>
            </h1>

        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($blogs as $blog)
                    <div class="bg-white rounded-lg border overflow-hidden flex flex-col h-full">
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                class="w-full h-72 object-cover rounded-4xl">
                        @else
                            <img src="{{ asset('images/homepage/pipes.jpg') }}" alt="Placeholder Image"
                                class="w-full h-72 object-cover rounded-4xl">
                        @endif
                        <div class="p-6 flex flex-col flex-grow">
                            <h2 class="font-bold text-xl mb-2 leading-tight text-gray-900">
                                <a href="{{ route('blog.show', $blog) }}"
                                    class="hover:text-blue-700 transition-colors duration-200 capitalize">
                                    {{ $blog->title }}
                                </a>
                            </h2>
                            <p class="text-gray-700 text-base flex-grow mb-2">
                                {!! Str::limit($blog->content, 120) !!}
                            </p>
                            <div class="flex items-center justify-between text-sm text-gray-600 mt-auto">
                                <span>By {{ $blog->author->name }}</span>
                                <span>{{ $blog->created_at->format('M d, Y') }}</span>
                            </div>
                            <a href="{{ route('blog.show', $blog) }}"
                                class="block w-fit text-center mt-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-200 font-semibold px-2">
                                Read More
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-600">No blog posts found. Please check back later!</p>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
    @include('partials.contact-section')
@endsection