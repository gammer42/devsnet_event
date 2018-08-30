@extends('ux_interface.layout.master')


@section('content')

    @include('ux_interface.partial.header')
    @include('ux_interface.partial.slider')
    @include('ux_interface.partial.feature')
    @include('ux_interface.partial.another_slider')
    @include('ux_interface.partial.team_people')
    @include('ux_interface.partial.get_in_touch')
    @include('ux_interface.partial.map')

@endsection