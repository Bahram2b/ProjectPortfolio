@extends('Admin.AdminMaster')

@section('admin')

    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h3>ویرایش دسته بندی</h3>

            </div><!-- sl-page-title -->




            <div class="table-wrapper">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ url('update/category/'.$category->id) }}">
                    @csrf
                    <div class="modal-body pd-20 p-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان</label>
                            <input type="text" class="form-control col-3" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $category->category_name }}" name="category_name">

                        </div>




                        <button type="submit" class="btn btn-info">ویرایش</button>
                    </div><!-- modal-body -->




                </form>


            </div><!-- table-wrapper -->
        </div><!-- card -->




    </div><!-- sl-mainpanel -->





@endsection
