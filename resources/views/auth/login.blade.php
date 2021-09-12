@extends('layouts.homeMaster')

@section('home_content')



    <div class="contact_form loginmargin">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 loginmargin2 persian perfont" style="border: 1px solid grey; padding: 20px; border-radius: 25px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">ثبت نام</div>

                        <form action="{{ route('register') }}" id="contact_form" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">نام و نام خوانوادگی</label>
                                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Full Name " name="name" required="">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">شماره همراه</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  aria-describedby="emailHelp" placeholder="Enter Your Phone " required="">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">ایمیل</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  aria-describedby="emailHelp" placeholder="Enter Your Email " required="">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">رمز عبور</label>
                                <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Password " name="password" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">تکرار رمز عبور</label>
                                <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Re-Type Password " name="password_confirmation" required="">
                            </div>





                            <div class="contact_form_button">
                                <button type="submit" class="btn btn-info">ثبت نام</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1  persian perfont" style="border: 1px solid grey; padding: 20px; border-radius: 25px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">ورود</div>

                        <form action="{{ route('login') }}" id="contact_form" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">شماره تلفن یا ایمیل</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  aria-describedby="emailHelp"  required="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">رمز عبور</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  aria-describedby="emailHelp" name="password" required="">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror

                            </div>


                            <div class="contact_form_button">
                                <button type="submit" class="btn btn-info">ورود</button>
                            </div>
                        </form>
                        <br>
                        <a href="{{ route('password.request') }}">رمز خود را فراموش کردم</a>   <br> <br>

                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-danger btn-block">ورود با جیمیل  <i class="fab fa fa-google"></i></a>

                    </div>
                </div>










            </div>
        </div>
        <div class="panel"></div>
    </div>












@endsection

