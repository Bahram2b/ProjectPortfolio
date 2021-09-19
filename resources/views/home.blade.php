{{--@extends('layouts.homeMaster')--}}
{{--<!-- Photo contents  -->--}}
{{--@section('home_content')--}}

{{--<!-- Photo contents End -->--}}

{{--@endsection--}}

@extends('layouts.homeMaster')

@section('title', 'Photo')

@section('sidemenu')
    @parent


@endsection

@section('home_content')
    @include('homePartials.photoportfolio')
@endsection
