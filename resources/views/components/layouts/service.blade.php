@extends('components.layouts.app')

@section('content')
    @include('components.header')

    <main>
        @include('components.sections.hero-service')
        @include('components.sections.ratings')
        @include('components.sections.service-detail')
        @include('components.sections.ngentot')
        @include('components.sections.logos')
        @include('components.sections.testimonials')
    </main>

    @include('components.footer')
@endsection