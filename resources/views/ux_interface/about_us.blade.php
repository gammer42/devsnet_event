@extends('ux_interface.layout.master')

@section('content')

    @include('ux_interface.partial.header')
    @include('ux_interface.partial.about_us.banner')
    @include('ux_interface.partial.about_us.challange')
    @include('ux_interface.partial.about_us.testimonials_slider')
    @include('ux_interface.partial.about_us.we_are_company')

@endsection