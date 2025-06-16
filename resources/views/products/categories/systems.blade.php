@extends('layouts.app')

@section('content')

    <div class="container mx-auto px-4 py-8 mt-6">
        <h1 class="text-4xl font-bold mb-8">{{ $category->name }}</h1>

        @if($category->image)
            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                class="w-full h-64 object-cover mb-8 rounded-lg shadow-md">
        @endif

        @if($category->description)
            <div class="mb-8 text-lg leading-relaxed text-gray-700">
                {!! $category->description !!}
            </div>
        @endif

        @if($products->isEmpty())
            <p>No products found for this category.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($products as $product)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-48 object-cover">
                        @endif
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                            <p class="text-gray-600 text-sm mb-4">{!! Str::words($product->description, 20) !!}</p>
                            <a href="{{ route('products.show', $product->slug) }}" class="text-blue-500 hover:underline">View
                                Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
