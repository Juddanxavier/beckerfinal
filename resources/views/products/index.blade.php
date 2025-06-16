@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 mt-6">
        <h1 class="text-4xl font-bold mb-8">All Products</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($categories as $category)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2"><a href="{{ route('products.by-category', $category->slug) }}"
                                class="text-blue-500 hover:underline">{{ $category->name }}</a></h2>
                        @if($category->description)
                            <p class="text-gray-600 text-sm mb-4">{!! Str::words($category->description, 20) !!}</p>
                        @endif
                        @if($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                class="w-full h-48 object-cover mt-2">
                        @endif
                        <h3 class="text-lg font-medium mt-4 mb-2">Subcategories:</h3>
                        <ul class="list-disc list-inside">
                            @foreach($category->subcategories as $subcategory)
                                <li><a href="{{ route('products.by-subcategory', $subcategory->slug) }}"
                                        class="text-gray-700 hover:underline">{{ $subcategory->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="text-3xl font-bold mt-12 mb-8">Individual Products</h2>

        @if($products->isEmpty())
            <p>No individual products found.</p>
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
