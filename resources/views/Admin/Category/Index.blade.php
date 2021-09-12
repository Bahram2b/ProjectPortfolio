
@extends('admin.AdminMaster')
@section('admin')
<section class="container-fluid p-5">
    <div class="sl-mainpanel">
{{--    @if (session('success'))--}}
{{--        <div class="alert alert-success alert-dismissible fade show  flex-row-reverse" role="alert">--}}
{{--            <strong>{{session('success')}}</strong>--}}
{{--            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--        </div>--}}
{{--    @endif--}}

<div class="row">

    <div class="col-8">
                <div class="sl-pagebody">
                        <div class="table-wrapper ">
                            <table id="datatable1" class="table display responsive nowrap ">
                                <thead>
                                <tr>
                                    <th class="wd-15p text-right">ردیف</th>
                                    <th class="wd-15p text-right">نام دسته بندی</th>
                                    <th class="wd-15p text-right">ادمین</th>
                                    <th class="wd-15p text-right">تاریخ</th>
                                    <th class="wd-20p text-right">عملیات</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $key=>$row)
                                    <tr>
{{--                                        <td>{{ $key +1 }}</td>--}}

                                        <td>{{ $category->firstItem()+$loop->index }}</td>
                                        <td>{{ $row->category_name }}</td>
                                        <td>{{ $row->user->name}}</td>
                                        <td>{{ $row->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{ URL::to('edit/category/'.$row->id) }} " class="btn btn-sm btn-info">ویرایش</a>
                                            <a href="{{ URL::to('delete/category/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">حذف</a>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{$category->links()}}
                        </div><!-- table-wrapper -->
                    </div><!-- card -->

    </div>
    <div class="col-2">

        <form class="row g-3" action="{{ route('store.category') }}" method="post">
            @csrf
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden">دسته بندی جدید</label>
                <input type="text" class="form-control" name="category_name" placeholder="دسته بندی">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">ایجاد</button>
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    </div>









    </div>
    </section>

@endsection
