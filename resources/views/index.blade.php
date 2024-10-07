@extends('layouts.main')
@section('content')

@push('navbar')
    index
@endpush
@include('includes.header')
@include('includes.main-banner')
@include('includes.men-area')
@include('includes.women-area')
@include('includes.kids-area')
@include('includes.explore-area')
@include('includes.social-area')
@include('includes.subscripe-area')
@endsection
   