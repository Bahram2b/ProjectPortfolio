


@auth()
@section('styles')
    @include('admin.Partials.styles')
@show

<!-- START HEADER-->

   @php( $userphoto = Auth::user()->profile_photo_path)

@section('header')
@include('admin.Partials.Header')
@show
<!-- END HEADER-->
@endauth
<body class="fixed-navbar">
<div class="page-wrapper">
    <!-- START SIDEBAR-->
    @auth()
@section('sidebar')
@include('admin.Partials.Sidebar')
@show
@endauth
<!-- END SIDEBAR-->
    <!-- START PAGE CONTENT-->
    <div class="content-wrapper">
        <div class="page-content fade-in-up ">
    @yield('admin')
        </div>
    </div>
    <!-- END PAGE CONTENT-->

    <!-- Footer-->
    <footer class="page-footer">
            <div class="font-13">  Copyright <b>2B Develop</b> - 2021 © </div>
            <a class="px-4" href="#" target="_blank"></a>
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
    <!-- Footer-->
    <!-- scripts-->
    @section('scripts')
     @include('admin.Partials.scripts')
    @show
    <!-- scripts-->
</div>
</body>

</html>

