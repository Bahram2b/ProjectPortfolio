<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Login</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('backend/css/login.css')}}" rel="stylesheet" />


</head>

<body>
<div id="container">
    <div id="logo_bar">
        {{--        <img id="logo" src="" alt="logo"> --}}
        <span></span>
    </div>
    <div id="form_box">
        <form action="{{ route('login') }}" id="contact_form" method="post">
            @csrf
            <p id="form_heading">Admin Login</p>
            <input type="email"  name="email" placeholder="Enter Email" required=""><br />
            <input   type="password" placeholder="Enter Password" name="password" required=""><br />
            <input type="checkbox" id="checkbox"><label for="checkbox" style="color:white; font-size:15px;">Remember Me</label><br />
            <input type="submit" ><br />
            <a href="{{ route('password.request') }}" style="color:white; font-size:15px;">Forget Password</a>   <br> <br>
        </form>
    </div>
</div>

</body>

</html>










