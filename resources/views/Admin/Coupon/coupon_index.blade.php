@extends('admin.AdminMaster')
@section('admin')
    <div class="sl-mainpanel">


        <div class="sl-pagebody p-5">
            <div class="sl-page-title">
                <h4>لیست تخفیف ها</h4>

            </div><!-- sl-page-title -->
            <br>
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">
                    <a href="#" class="btn btn-sm btn-warning mt-5" style="float: right;" data-toggle="modal" data-target="#modaldemo3">کد تخفیف جدید</a>
                </h6>
                <br>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr class="text-right">
                            <th class="text-right">ردیف</th>
                            <th class="text-right">اسم</th>
                            <th class="text-right">درصد تخفیف</th>
                            <th class="text-right">تاریخ</th>
                            <th class="text-right">عملیات</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($coupon as $key=>$row)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $row->coupon }}</td>

                                <td>{{ $row->discount }} %</td>
                                <td>{{ $row->created_at }}</td>
                                <td>
                                    <a href="{{ URL::to('Edit/Coupon/'.$row->id) }} " class="btn btn-sm btn-info">ویرایش</a>
                                    <a href="{{ URL::to('Delete/Coupon/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">حذف</a>
                                </td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->




        </div><!-- sl-mainpanel -->



        <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">اضافه کردن زیر دسته بندی</h6>
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
                    <form method="post" action="{{ route('Coupon_Store') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="coupon">عنوان</label>
                                <input type="text" class="form-control col-5" id="coupon" aria-describedby="emailHelp" name="coupon" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">درصد تخفیف</label>
                                    <input type="text" class="form-control col-5" id="discount" aria-describedby="emailHelp" name="discount" >

                                </div>

                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">اضافه</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">خروج</button>
                        </div>
                        <!-- modal-body -->

                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->



@endsection
