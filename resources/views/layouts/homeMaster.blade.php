<!DOCTYPE html>
<html lang="en">
<head>
    @section('header')
@include('homePartials.headerstylesheets')
    @show
</head>
<body>

{{--<body class="animsition">--}}

<!-- Header -->
{{----}}
<!-- End Header -->
<!-- Cart -->
<!-- Sidebar menu -->
@section('sidemenu')
    @include('homePartials.sidemenu')
@show

<!-- Sidebar menu End-->
<!-- Home content-->
<!-- Home Baner-->
@section('baner')
    @include('homePartials.baner')
@show

<!-- Home Baner-->
@yield('home_content')
<!-- Home content End-->

<!-- Footer -->
@include('homePartials.footer')
{{--@include('homePartials.instafooter')--}}
<!-- Footer End-->

<!-- Back to top -->


@section('scripts')
    @include('homePartials.scripts')
@show


</body>
</html>
