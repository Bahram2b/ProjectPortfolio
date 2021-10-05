
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
        <form action="{{ route('password.email') }}" id="contact_form" method="post">
            @csrf
            <p id="form_heading">Forget Password</p>
            <input id="email"  type="email" placeholder="Enter your Email address" name="email" ><br />

            <input type="submit" ><br />

        </form>
    </div>
</div>

</body>

</html>


