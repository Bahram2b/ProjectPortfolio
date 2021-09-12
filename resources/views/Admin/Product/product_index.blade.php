@extends('Admin.AdminMaster')

@section('admin')

    <div class="sl-mainpanel p-5">


        <div class="sl-pagebody">
            <div class="sl-page-title mb-5">
                <h3 class="text-center font-weight-bold perfont">لیست محصولات</h3>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">
                    <a href="{{route('Product.Create')}}" class="btn btn-sm btn-success p-2" style="float: right;">اضافه کردن محصول</a>
                </h6>


                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-15p text-right">کد محصول</th>
                            <th class="wd-15p text-right">اسم محصول</th>
                            <th class="wd-15p text-right">عکس</th>
                            <th class="wd-15p text-right">دسته بندی</th>
                            <th class="wd-15p text-right">موجودی</th>
                            <th class="wd-15p text-right">وضعیت</th>
                            <th class="wd-20p text-right">عملیات</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $row)
                            <tr>
                                <td>{{ $row->product_code }}</td>
                                <td>{{ $row->product_name }}</td>

                                <td> <img src="{{ URL::to($row->image_one) }}" height="50px;" width="50px;"> </td>
                                <td>{{ $row->category_name }}</td>
                                <td>{{ $row->product_quantity }}</td>
                                <td>
                                    @if($row->status == 1)
                                        <span class="badge badge-success">فعال</span>
                                    @else
                                        <span class="badge badge-danger">غیر فعال</span>
                                    @endif

                                </td>



                                <td>
                                    <a href="{{ URL::to('edit/product/'.$row->id) }} " class="btn btn-sm btn-info" title="edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{ URL::to('delete/product/'.$row->id) }}" class="btn btn-sm btn-danger" title="delete" id="delete"><i class="fa fa-trash"></i></a>

                                    <a href="{{ URL::to('view/product/'.$row->id) }}" class="btn btn-sm btn-warning" title="Show"><i class="fa fa-eye"></i></a>


                                    @if($row->status == 1)
                                        <a href="{{ URL::to('inactive/product/'.$row->id) }}" class="btn btn-sm btn-danger" title="Inactive" ><i class="fa fa-thumbs-down"></i></a>
                                    @else
                                        <a href="{{ URL::to('active/product/'.$row->id) }}" class="btn btn-sm btn-info" title="Active" ><i class="fa fa-thumbs-up"></i></a>
                                    @endif



                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->




        </div><!-- sl-mainpanel -->





@endsection
