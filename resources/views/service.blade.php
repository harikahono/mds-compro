@extends('components.layouts.app')

@section('content')
    @include('components.header')

    <main>
        @include('components.sections.hero-service')
        @include('components.sections.ratings')
        @include('components.sections.service-detail')
        @include('components.sections.full')
        @include('components.sections.logos')
        @include('components.sections.landing-testimonials')
    </main>

    @include('components.footer')
@endsection