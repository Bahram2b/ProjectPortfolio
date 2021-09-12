@extends('Admin.AdminMaster')

@section('admin')

    <div class="sl-mainpanel">


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h3>ویرایش کد تخفیف</h3>

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
                <form method="post" action="{{ url('Update/Coupon/'.$Coupon->id) }}">
                    @csrf
                    <div class="modal-body pd-20 p-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان</label>
                            <input type="text" class="form-control col-3" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $Coupon->coupon }}" name="coupon">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">درصد تخفیف</label>
                            <input type="text" class="form-control col-3" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $Coupon->discount }}" name="discount">

                        </div>




                        <button type="submit" class="btn btn-info">ویرایش</button>
                    </div><!-- modal-body -->




                </form>


            </div><!-- table-wrapper -->
        </div><!-- card -->




    </div><!-- sl-mainpanel -->





@endsection
