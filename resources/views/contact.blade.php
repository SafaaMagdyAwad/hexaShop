@extends('layouts.main')
@section('content')
    @push('nav')
        @include('includes.pagesnav')
    @endpush
    @include('includes.header')
    @push('title')
    Contact Us
    @endpush
@include('includes.page-banner')
    @include('includes.contact-area')
    @include('includes.subscripe-area')
@endsection
