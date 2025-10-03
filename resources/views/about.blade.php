@extends('components.layouts.app')

@section('content')
    @include('components.header')

    <main>
        @include('components.sections.about-detail')
        @include('components.sections.about-year')
        @include('components.sections.about-quotes')
        @include('components.sections.about-diffrent')
        @include('components.sections.about-runtext')
        @include('components.sections.full')
        @include('components.sections.about-join')
        @include('components.sections.about-consument')
        @include('components.sections.about-partner')
        @include('components.sections.about-commenttitle')
        @include('components.sections.landing-testimonials')
    
    </main>

    @include('components.footer')
@endsection