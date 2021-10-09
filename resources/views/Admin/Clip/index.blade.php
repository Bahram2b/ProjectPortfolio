@extends('layouts.app')
@section('admin')


    <section class="container ">




        <button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add new Video
        </button>
        {{--<div class="btn   btn-adn  mt-5">--}}
        {{--    <a href="#" class="text-decoration-none font-bold"  data-toggle="modal" data-target="#modaldemo3">اضافه کردن عکس جدید</a>--}}

        {{--</div>--}}




            <table   class="table table-dark table-striped table-hover table border-dark-1"  >
                @csrf
                <thead >
                <tr class="text-center orange">
                    <th class="text-right" >No.</th>
                    <th class="text-right">Title</th>
                    <th class="text-right">Category</th>
                    <th class="text-right">Image</th>
                    <th class="text-right">Description</th>
                    <th class="text-right">Youtube Link</th>
                    <th class="text-right">Added on</th>
                    <th class="text-right"><i class="fa fa-edit"></i></th>

                </tr>
                </thead>
                <tbody class="text-center">
                @foreach($clip as $key=>$row)
                    <tr>
                                                        <td class="text-center">{{ $clip->firstItem()+$loop->index }}</td>
                        <td class="hidden">{{$row->id }}</td>
                        <td class="">{{ $row->title }}</td>
                        <td class="mr-3">{{ $row->category }}</td>
                        <td height="50px;" width="160px;" class="text-center"> <img src="{{ URL("backend/img/clips/thumbnails/".$row->thumbnail) }}" style="max-height:120px " > </td>
                        {{--                                <td class="text-center hidden">{{ $row->image }}</td>--}}
                        <td>{{Str::limit($row->description, 40)}}</td>
                        <td>{{Str::limit($row->link,30)  }}</td>


                        <td class="">{{ $row->created_at->diffForHumans() }}</td>
                        <td class="">
                            <button class="btn btn-sm btn-info editingTRbutton" type="button"  data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                            <a href="{{ URL::to('delete/clip/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                        </td>

                    </tr>
                @endforeach


                </tbody>
            </table>
            {{$clip->links()}}
      <!-- table-wrapper -->


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title main-title-bold" id="exampleModalLabel">Adding a new Video </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{route('Clip.Store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="title" name="title">
                                <label for="category">Category</label>
                                <select id="category" name="category">
                                    <option value="Broll">B-rolls</option>
                                    <option value="Product">Products</option>
                                    <option value="Motion">Motions</option>
                                </select><br>
                                <label for="description">description</label>

                                <input type="text" class="form-control" id="description" aria-describedby="emailHelp" value="This is the description of the " name="description">
                                <label for="link">link</label>
                                <input type="text" class="form-control" id="link" aria-describedby="emailHelp" value="Youtube Embed video link " name="link">

                            </div>


                            <div class="form-group">
                                <label for="thumbnail">عکس</label>
                                <input type="file" class="form-control"   name="thumbnail">

                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->
        <!-- modal edit table-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="" method="GET" enctype="multipart/form-data"  method="POST" id="ModalForm">
                            {{csrf_field()}}
                            <input type="hidden" id="editId" value="">
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" name="title" class="form-control" id="edittitle" placeholder="title">
                            </div>
                            {{--                        <img src="{{ URL("backend/img/photos/originals/".$row->image) }}" id="editimage" style="max-height:120px " >--}}
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="editcategory" name="category">
                                    <option value="Broll">B-rolls</option>
                                    <option value="Product">Products</option>
                                    <option value="Motion">Motions</option>
                                </select>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control" id="editdescription" >

                                    <label for="link">link</label>
                                    <input type="text" class="form-control" id="editlink"   name="link">
                                </div>
                                {{--                            <label for="image">عکس</label>--}}
                                {{--                            <input type="text"  name="image" class="form-control" id="editimage"  >--}}

                            </div>
                            {{--<!--                        --><?php--}}
                            {{--//                        $random = $_POST["editimage"];--}}
                            {{--//                        echo $random;--}}
                            {{--//                        ?>--}}
                            <div class="modal-footer">
                                <a  class="btn btn-secondary" data-dismiss="modal">Close</a>
                                <button type="submit"  id="saveModalButton" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal edit table-->
    </section>
@endsection
@section('scripts')
    @parent

<script>
    $(function() {
        //Take the data from the TR during the event button
        $('table').on('click', 'button.editingTRbutton',function (ele) {
            //the <tr> variable is use to set the parentNode from "ele
            var tr = ele.target.parentNode.parentNode;

            //I get the value from the cells (td) using the parentNode (var tr)
            var id = tr.cells[1].textContent;
            var title = tr.cells[2].textContent;
            var category = tr.cells[3].textContent;
            // var image = tr.cells[3].textContent;
            var description = tr.cells[5].textContent;
            var link = tr.cells[6].textContent;
            // var level = tr.cells[5].textContent;

            //Prefill the fields with the gathered information
            $('h5.modal-title').html('ویرایش : '+title);
            $('#edittitle').val(title);
            $("#editcategory").val(category).attr('Broll', 'Product','Motion');

            // $('#editimage').val(image);
            $('#editdescription').val(description);
            $('#editlink').val(link);
            // $('#editPhone').val(phone);
            // $('#editId').val(id);
            // $("#editLevel").val(level).attr('selected', 'selected');

            //If you need to update the form data and change the button link
            $("form#ModalForm").attr('action', 'clipupdate/'+id);
            $("a#saveModalButton").attr('href','update/'+id);
        });
    });
</script>
@endsection
