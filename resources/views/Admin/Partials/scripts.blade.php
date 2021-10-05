
<!-- CORE PLUGINS-->

<script src="{{asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
<!-- Drobdown header working-->
{{--<script src="{{asset('backend/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>--}}
<!-- Drobdown header working-->
<script src="{{asset('backend/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('backend/js/app.min.js')}}" type="text/javascript"></script>
{{--    <script src="{{asset('v3.3.7/js/bootstrap.min.js')}}" type="text/javascript"></script>--}}
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script>
    $(function() {
        //Take the data from the TR during the event button
        $('table').on('click', 'button.editingTRbutton',function (ele) {
            //the <tr> variable is use to set the parentNode from "ele
            var tr = ele.target.parentNode.parentNode;

            //I get the value from the cells (td) using the parentNode (var tr)
            var id = tr.cells[0].textContent;
            var title = tr.cells[1].textContent;
            var category = tr.cells[2].textContent;
            var image = tr.cells[3].textContent;
            var description = tr.cells[4].textContent;
            // var phone = tr.cells[4].textContent;
            // var level = tr.cells[5].textContent;

            //Prefill the fields with the gathered information
            $('h5.modal-title').html('ویرایش عکس : '+title);
            $('#edittitle').val(title);
            $("#editcategory").val(category).attr('Portrait', 'Photo Manipulation','Product Photography');

            $('#editimage').val(image);
            $('#editdescription').val(description);
            // $('#editPhone').val(phone);
            // $('#editId').val(id);
            // $("#editLevel").val(level).attr('selected', 'selected');

            //If you need to update the form data and change the button link
            $("form#ModalForm").attr('action', 'update/'+id);
            $("a#saveModalButton").attr('href','update/'+id);
        });
    });
</script>

{{--    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>--}}

{{--    <!-- PAGE LEVEL PLUGINS-->--}}
{{--    <script src="{{asset('backend/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('backend/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('backend/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('backend/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>--}}
<!-- CORE SCRIPTS-->

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
