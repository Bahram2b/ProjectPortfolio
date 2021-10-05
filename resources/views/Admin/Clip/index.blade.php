@extends('layouts.app')
@section('admin')







    <div class="btn   btn-adn  mt-5">
        <a href="#" class="text-decoration-none font-bold"  data-toggle="modal" data-target="#modaldemo3">اضافه کردن ویدیو</a>

    </div>


    <div class="table-wrapper">
        <table id="datatable1" class="table table-dark table-striped table-hover table">
            <thead>
            <tr class="text-center">
                <th class="text-right">ردیف</th>
                <th class="text-right">اسم</th>

                <th class="text-right">عکس</th>
                <th class="text-right">لینک</th>
                {{--                            <th class="text-right">توضیحات</th>--}}
                <th class="text-right">تاریخ</th>
                <th class="text-right">عملیات</th>

            </tr>
            </thead>
            <tbody>
            @foreach($clip as $key=>$row)
                <tr>
                    <td class="text-center">{{ $clip->firstItem()+$loop->index }}</td>
                    <td class="text-center">{{ $row->title }}</td>


                    <td height="50px;" width="160px;" class="text-center"> <img src="{{ URL("backend/img/clips/thumbnails/".$row->thumbnail) }}" style="max-height:120px " > </td>
                    <td class="text-center">{{ $row->link }}</td>
                    {{--                                <td>{{ $row->description }}</td>--}}
                    <td class="text-center">{{ $row->created_at->diffForHumans() }}</td>
                    <td class="text-center">
                                                            <a href="{{ URL::to('edit/brand/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                        <a href="{{route('Clip.Destroy', $row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                    </td>

                </tr>
            @endforeach


            </tbody>
        </table>
        {{$clip->links()}}
    </div><!-- table-wrapper -->









    <!-- LARGE MODAL -->
    <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">اضافه کردن ویدیو</h6>
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
                <form method="post" action="{{route('Clip.Store')}}" enctype="multipart/form-data" >
                    @csrf
                    <div class="modal-body pd-20">
                        <div class="form-group">
                            <label for="title">عنوان</label>
                            <input type="text" class="form-control" id="title"  placeholder="title" name="title">
                            <label for="title">Embed link یوتیوب</label>
                            <input type="text" class="form-control" id="link"  placeholder="Embed youtube video link" name="link">
                            <label for="description">توضیحات</label>
                            <input type="text" class="form-control" id="description"  placeholder="Description" name="description">

                        </div>


                        <div class="form-group">
                            <label for="thumbnail">Thumbnail picture</label>
                            <input type="file" class="form-control" aria-describedby="emailHelp" placeholder="Thumbnail image" name="thumbnail">

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
