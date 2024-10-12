@extends('layouts.main')
@section('content')
    @push('nav')
        @include('includes.pagesnav')
    @endpush
    @include('includes.header')
    @push('title')
        About Our Company
    @endpush
    @include('includes.page-banner')
    @include('includes.about')
    @include('includes.our-team')
    @include('includes.our-service')
    @include('includes.subscripe-area')
@endsection
