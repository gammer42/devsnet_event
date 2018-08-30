@extends('ux_interface.layout.master')

@section('content')

    @include('ux_interface.partial.header')
    @include('ux_interface.partial.service.banner')
    @include('ux_interface.partial.service.feature')
    @include('ux_interface.partial.service.circle_chart')
    @include('ux_interface.partial.service.solution')

@endsection