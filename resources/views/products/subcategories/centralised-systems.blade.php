@extends('layouts.app')

@section('content')
    @include('components.breadcrumbs', ['breadcrumbs' => $breadcrumbs])

    <div class="bg-gradient-to-br from-[#F6F5F2] to-white min-h-screen pt-6">
        <div class="max-w-7xl mx-auto py-16 px-4 flex flex-col items-start " data-aos="fade-up" data-aos-duration="800">
            <h1 class="text-5xl my-12 text-[#234039] leading-tight ">
                {{ $subcategory->name }}
            </h1>
            @if($subcategory->image)
                <img src="{{ asset('storage/' . $subcategory->image) }}" alt="{{ $subcategory->name }}"
                    class="w-full h-64 object-cover mb-8 rounded-lg shadow-md">
            @endif

            @if($subcategory->description)
                <div class="mb-8 text-lg leading-relaxed text-gray-700">
                    {!! $subcategory->description !!}
                </div>
            @endif
            <div class="w-full mt-4">
                @if($products->isEmpty())
                    <p>No products found for this subcategory.</p>
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
                                    <a href="{{ route('products.show', $product->slug) }}"
                                        class="text-blue-500 hover:underline">View
                                        Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('partials.contact-section')
@endsection
