@extends('ux_interface.layout.master')

@section('content')

    @include('ux_interface.partial.header')
    @include('ux_interface.partial.element.banner')
    @include('ux_interface.partial.element.button')
    @include('ux_interface.partial.element.progress')
    @include('ux_interface.partial.element.circle_chart')
    @include('ux_interface.partial.element.milestones')
    @include('ux_interface.partial.element.another_banner')

@endsection