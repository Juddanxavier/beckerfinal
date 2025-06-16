@extends('layouts.app')

@section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">


                        <h2 class="text-4xl md:text-5xl font-normal text-gray-900 mt-8 mb-4 leading-tight">{{ $blog->title }}
                        </h2>
                        <p class="text-sm text-gray-600 mb-6">Published on {{ $blog->created_at->format('M d, Y') }} by
                            {{ $blog->author->name }}
                        </p>

                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-72 object-cover rounded-4xl">
                        @else
                            <img src="{{ asset('images/homepage/pipes.jpg') }}" alt="Placeholder Image"
                                class="w-full h-72 object-cover rounded-4xl">
                        @endif
    <div class="prose max-w-none mt-12 leading-loose">
        {!! $blog->content !!}
    </div>

    @include('blog._related-posts', ['relatedBlogs' => $relatedBlogs])

    <div class="mt-8">
        <a href="{{ route('blog.index') }}"
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
            Back to Blog Posts
        </a>
    </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.contact-section')
@endsection
