@extends('admin.AdminMaster')
@section('admin')
    <!--Section: Block Content-->
    <section class="mb-5 text-center p-5">

        <h3>تغییر رمز عبور</h3>

        <form action="{{route('password.update')}}" method="post"  class=" perfont persian">
        @csrf
            <div class="md-form md-outline">
                <label data-error="wrong"  data-success="right" for="current_password">رمز عبور</label>
                <input type="password" id="current_password"  name="current_password" class="form-control col-5">

            </div>
            <div class="md-form md-outline">
                <label data-error="wrong" data-success="right" for="password">رمز عبور جدید</label>
                <input type="password" id="password" name="password" class="form-control col-5">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="md-form md-outline">
                <label data-error="wrong" data-success="right" for="password_confirmation">تکرار رمز عبور</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control col-5">
                @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-4">تغییر رمز عبور</button>

        </form>

        <div class="d-flex justify-content-between align-items-center mb-2">


        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show  flex-row-reverse" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show  flex-row-reverse" role="alert">
                <strong>{{session('error')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </section>

    <!--Section: Block Content-->
@endsection
