
@php
    $userphoto = Auth::user()->profile_photo_path;
@endphp

<!-- START HEADER-->
@include('admin.Partials.Header')
<!-- END HEADER-->
<body class="fixed-navbar">

<div class="page-wrapper">

    <!-- START SIDEBAR-->
@include('admin.Partials.Sidebar')
<!-- END SIDEBAR-->
    <!-- START PAGE CONTENT-->

    <div class="content-wrapper">

        <div class="page-content fade-in-up ">
<div class="container">
    @yield('admin')
</div>
    </div>
        <!-- END PAGE CONTENT-->
        <footer class="page-footer">
            <div class="font-13">  Copyright <b>2B Develop</b> - 2021 © </div>
            <a class="px-4" href="#" target="_blank"></a>
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>

</div>



<!-- CORE PLUGINS-->



<script src="{{asset('backend/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{--    <!-- PAGE LEVEL PLUGINS-->--}}
{{--    <script src="{{asset('backend/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('backend/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('backend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('backend/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>--}}
<!-- CORE SCRIPTS-->
<script src="{{asset('backend/js/app.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
{{--    <script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>--}}




{{--    <!-- PAGE LEVEL SCRIPTS-->--}}
{{--    <script src="{{asset('backend/js/scripts/dashboard_1_demo.js')}}" type="text/javascript"></script>--}}
<script>

    @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"
    toastr.options.positionClass = 'toast-bottom-left';
    switch(type){

        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
{{--    <script>--}}
{{--        $(document).on("click", "#delete", function(e){--}}
{{--            e.preventDefault();--}}
{{--            var link = $(this).attr("href");--}}
{{--            swal({--}}
{{--                title: "آیا از حذف مطمعن هستید؟",--}}
{{--                text: "پس از پاک کردن امکان بازگشت اطلاعات وجود ندارد",--}}
{{--                icon: "warning",--}}
{{--                buttons: true,--}}
{{--                dangerMode: true,--}}
{{--            })--}}
{{--                .then((willDelete) => {--}}
{{--                    if (willDelete) {--}}
{{--                        window.location.href = link;--}}
{{--                    } else {--}}
{{--                        swal("اطلاعات پاک نشده اند");--}}
{{--                    }--}}
{{--                });--}}
{{--        });--}}
{{--    </script>--}}
</body>

</html>

