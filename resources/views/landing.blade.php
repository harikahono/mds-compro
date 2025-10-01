@extends('components.layouts.app')

@section('content')
    @include('components.header')

    <main>
        @include('components.sections.landing-hero')
        @include('components.sections.logos')
        @include('components.sections.landing-dedicated')
        @include('components.sections.landing-portfolio')
        @include('components.sections.landing-testimonials')
        @include('components.sections.landing-services')
        @include('components.sections.landing-team')
        @include('components.sections.landing-partner')
    </main>

    @include('components.footer')
@endsection