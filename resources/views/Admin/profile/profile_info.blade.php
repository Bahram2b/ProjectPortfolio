@extends('admin.AdminMaster')
@section('admin')
    <!--Section: profile info-->
    <section class="mb-5 text-center p-5">

        <h3>اطلاعات پروفایل</h3>

        <form action="{{route('profile.update')}}" method="post"  class=" perfont persian" enctype="multipart/form-data">
            @csrf
            <img id="showImage" src="{{ (!empty($user->profile_photo_path))?url('upload/user_images/'.$user->profile_photo_path):(asset('upload/no_image.png')) }}" class="img-circle" width="85px"  alt="">
{{--           @if(!empty($user->profile_photo_path))--}}
{{--                <img id="showimage" src="{{Auth::user()->profile_photo_url}}" class="img-circle" width="85px"  alt="">--}}
{{--            @else--}}
{{--                <img id="showimage" src="{{asset('upload/no_image.png')}}" class="img-circle" width="85px"  alt="">--}}
{{--            @endif--}}

            <div class="mb-3">
                <label for="imager" class="form-label">عکس پروفایل</label>
                <input class="form-control form-control-sm col-2" id="imager" name="profile_photo_path" type="file">
            </div>

            <div class="md-form md-outline">
                <label data-error="wrong"  data-success="right" for="name">نام</label>
                <input type="text" id="name" value="{{$user->name}}" name="name" class="form-control col-5">
            </div>
            <div class="md-form md-outline">
                <label data-error="wrong" data-success="right" for="email">ایمیل</label>
                <input type="text" id="email" name="email" value="{{$user->email}}" class="form-control col-5">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-4">بروزرسانی</button>

        </form>

{{--        <script type="text/javascript">--}}
{{--            $(document).ready(function(){--}}
{{--                $('#imager').change(function(e){--}}
{{--                    var reader = new FileReader();--}}
{{--                    reader.onload= function(e){--}}
{{--                        $('#showImage').attr('src',e.target.result);--}}
{{--                    }--}}
{{--                    reader.readAsDataURL(e.target.files['0']);--}}
{{--                });--}}

{{--            })--}}

{{--        </script>--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#showImage').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

            $("#imager").change(function() {
                readURL(this);
            });
        </script>
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

    <!--Section: profile info-->
@endsection
