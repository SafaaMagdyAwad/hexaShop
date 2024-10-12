


@extends('layouts.main')
@section('content')
    @push('nav')
        @include('includes.pagesnav')
    @endpush
    @include('includes.header')
    @push('title')
    Products
    @endpush
@include('includes.page-banner')
    @include('includes.products-area')
@endsection



