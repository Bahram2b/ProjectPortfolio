@extends('layouts.app')
@section('admin')
    <div class="sl-mainpanel">


        <div class="sl-pagebody p-5">
            <div class="sl-page-title">
                <h4>لیست عکس ها</h4>

            </div><!-- sl-page-title -->
            <br>
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">
                    <a href="#" class="btn btn-sm btn-warning mt-5" style="float: right;" data-toggle="modal" data-target="#modaldemo3">اضافه کردن عکس جدید</a>
                </h6>
                <br>

                <div class="table-wrapper">
                    <table id="datatable1" class="table table-sm">
                        <thead>
                        <tr class="text-right">
                            <th class="text-right">ردیف</th>
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
                                <td>{{ $photo->firstItem()+$loop->index }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->category }}</td>

                                <td height="50px;" width="160px;"> <img src="{{ URL("backend/img/photos/originals/".$row->image) }}" style="max-height:120px " > </td>
                                <td>{{ $row->description }}</td>
                                <td>{{ $row->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ URL::to('edit/brand/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{ URL::to('delete/photo/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                </td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    {{$photo->links()}}
                </div><!-- table-wrapper -->
            </div><!-- card -->




        </div><!-- sl-mainpanel -->



        <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">اضافه کردن عکس</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

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
                        <div class="modal-body pd-20">
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
                                <input type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="description" name="description">

                            </div>


                            <div class="form-group">
                                <label for="image">اسلاید</label>
                                <input type="file" class="form-control" aria-describedby="emailHelp" placeholder="اسلاید" name="image">

                            </div>



                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">اضافه</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">خروج</button>
                        </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->



@endsection
