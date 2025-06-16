<div class="mt-12 bg-gray-50 p-6 rounded-lg shadow-sm">
    <h3 class="text-2xl font-bold text-gray-800 mb-6">Related Posts</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($relatedBlogs as $relatedBlog)
            <div class="bg-white rounded-lg shadow-none overflow-hidden border border-gray-200">
                <a href="{{ route('blog.show', $relatedBlog) }}">
                    @if ($relatedBlog->image)
                        <img class="w-full h-40 object-cover rounded-t-lg" src="{{ asset('storage/' . $relatedBlog->image) }}"
                            alt="{{ $relatedBlog->title }}">
                    @else
                        <img class="w-full h-40 object-cover rounded-t-lg"
                            src="https://via.placeholder.com/640x360?text=No+Image" alt="Placeholder Image">
                    @endif
                </a>
                <div class="p-4">
                    <h4 class="font-bold text-lg mb-2 leading-tight">
                        <a href="{{ route('blog.show', $relatedBlog) }}"
                            class="hover:text-blue-700 transition-colors duration-200">
                            {{ $relatedBlog->title }}
                        </a>
                    </h4>
                    <p class="text-sm text-gray-600 mb-2">By {{ $relatedBlog->author->name }} on
                        {{ $relatedBlog->created_at->format('M d, Y') }}
                    </p>
                    <a href="{{ route('blog.show', $relatedBlog) }}"
                        class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold text-sm transition-colors duration-200">
                        Read More
                        <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>