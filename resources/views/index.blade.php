@extends('layouts.template')

@section('content')
    @include('sliders.sliders')

    @include('searchForm.index.form')

    @include('index.about-us')

    @include('index.last-cars')
@endsection
