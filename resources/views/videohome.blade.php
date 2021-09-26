@extends('layouts.homeMaster')

@section('title', 'Videos')

@section('header')
    @parent
@include('homePartials.videoheader')
@endsection

{{--@section('sidemenu')--}}
{{--    @parent--}}


{{--@endsection--}}
{{--@section('scripts')--}}
{{--    @parent--}}
{{--@include('homePartials.videoscripts')--}}

{{--@endsection--}}


@section('home_content')
    @include('homePartials.videoportfolio')
@endsection
