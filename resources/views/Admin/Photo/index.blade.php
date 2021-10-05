@extends('layouts.app')
@section('admin')


    <section class="container">




    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        اضافه کردن عکس جدید
    </button>
{{--<div class="btn   btn-adn  mt-5">--}}
{{--    <a href="#" class="text-decoration-none font-bold"  data-toggle="modal" data-target="#modaldemo3">اضافه کردن عکس جدید</a>--}}

{{--</div>--}}


                <div class="table-wrapper">

                    <table   class="table table-dark table-striped table-hover table"  >
                        @csrf
                        <thead>
                        <tr class="text-center">
                            <th class="text-right" >ردیف</th>
                            <th class="text-right">اسم</th>
                            <th class="text-right">دسته بندی</th>
                            <th class="text-right">عکس</th>
                            <th class="text-right">توضیحات</th>
                            <th class="text-right">تاریخ</th>
                            <th class="text-right">عملیات</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($photo as $key=>$row)
                            <tr>
{{--                                <td class="text-center">{{ $photo->firstItem()+$loop->index }}</td>--}}
                                <td class="text-center">{{$row->id }}</td>
                                <td class="text-center">{{ $row->title }}</td>
                                <td class="text-center">{{ $row->category }}</td>
{{--                                <td class="text-center hidden">{{ $row->image }}</td>--}}

                                <td height="50px;" width="160px;" class="text-center"> <img src="{{ URL("backend/img/photos/originals/".$row->image) }}" style="max-height:120px " > </td>
                                <td>{{ $row->description }}</td>
                                <td class="text-center">{{ $row->created_at->diffForHumans() }}</td>
                                <td class="text-center">
                                   <button class="btn btn-sm btn-info editingTRbutton" type="button"  data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                    <a href="{{ URL::to('delete/photo/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                </td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    {{$photo->links()}}
                </div><!-- table-wrapper -->


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافه کردن عکس <جدید></جدید></h5>
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
                        <form method="post" action="{{route('Photo.Store')}}" enctype="multipart/form-data" >
                            @csrf
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="title" name="title">
                        <label for="category">دسته بندی</label>
                        <select id="category" name="category">
                            <option value="Portrait">Portrait</option>
                            <option value="Photo Manipulation">Photo Manipulation</option>
                            <option value="Product Photography">Product Photography</option>
                        </select><br>
                        <label for="description">توضیحات</label>
                        <input type="text" class="form-control" id="description" aria-describedby="emailHelp" value="This is the description of the " name="description">

                    </div>


                    <div class="form-group">
                        <label for="image">عکس</label>
                        <input type="file" class="form-control" aria-describedby="emailHelp" placeholder="اسلاید" name="image">

                    </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
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
                                <option value="Portrait">Portrait</option>
                                <option value="Photo Manipulation">Photo Manipulation</option>
                                <option value="Product Photography">Product Photography</option>
                            </select>
                            <div class="form-group">
                                <label for="description">description</label>
                                <input type="text" name="description" class="form-control" id="editdescription" placeholder="description">
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

