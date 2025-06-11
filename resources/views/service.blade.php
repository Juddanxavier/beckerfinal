@extends('layouts.app')

@section('content')
    <section data-aos="fade-up" data-aos-duration="1000">
        @include('partials.service-section')
    </section>
    @include('partials.banner-section')
    @include('partials.contact-section')
@endsection
