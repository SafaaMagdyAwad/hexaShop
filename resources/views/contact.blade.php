@extends('layouts.main')
@section('content')
    @push('nav')
        @include('includes.pagesnav')
    @endpush
    @include('includes.header')
    @include('includes.main-banner')
    
    @include('includes.contact-area')
    @include('includes.subscripe-area')
@endsection
