

@extends('layouts.main')
@section('content')
    @push('nav')
        @include('includes.pagesnav')
    @endpush
    @include('includes.header')
    @push('title')
    Single Product Page
    @endpush
@include('includes.page-banner')
    @include('includes.product-area')
@endsection
