@extends('components.layouts.app')

@section('content')
    @include('components.header')

    <main>
        @include('components.sections.blog-hero')
        @include('components.sections.blog-main')
    </main>

    @include('components.footer')
@endsection