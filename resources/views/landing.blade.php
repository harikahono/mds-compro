@extends('components.layouts.app')

@section('content')
    @include('components.header')

    <main>
        @include('components.sections.hero')
        @include('components.sections.logos')
        @include('components.sections.dedicated')
        @include('components.sections.portfolio')
        @include('components.sections.testimonials')
        @include('components.sections.services')
        @include('components.sections.team')
        @include('components.sections.partner')
    </main>

    @include('components.footer')
@endsection