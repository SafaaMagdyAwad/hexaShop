@extends('layouts.main')
@section('content')

@push('navbar')
    page
@endpush
@include('includes.header')
@include('includes.main-banner')
@include('includes.product-area')
@endsection
