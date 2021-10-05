
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Table Edit Delete Mysql Data using Tabledit Plugin in Laravel</title>


    <script src="{{asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/jquery.tabledit.js')}}" type="text/javascript"></script>
    <script src="" type="text/javascript"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('js/v3.3.7/css/bootstrap.min.css')}}" />



</head>
<body>
<div class="container">
    <br />
    <h3 align="center">Live Table Edit Delete with jQuery Tabledit in Laravel</h3>
    <br />



                @csrf
                <table id="editable" class="table  table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>category</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($photo as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->category }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>


    </div>
</div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){

        $.ajaxSetup({
            headers:{
                'X-CSRF-Token' : $("input[name=_token]").val()
            }
        });

        $('#editable').Tabledit({
            url:'{{ route("Photo.Edit") }}',
            dataType:"json",
            columns:{
                identifier:[0, 'id'],
                editable:[[1, 'title'], [2, 'Category', '{"1":"Male", "2":"Female"}']]
            },
            restoreButton:false,
            onSuccess:function(data, textStatus, jqXHR)
            {
                if(data.action == 'delete')
                {
                    $('#'+data.id).remove();
                }
            }
        });

    });
</script>
