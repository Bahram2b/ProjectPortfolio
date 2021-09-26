<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
{{--        <link rel="stylesheet" type="text/css" href="{{'frontend/landing/css/landing.css'}}">--}}
<!--===============================================================================================-->
    <!-- Fonts -->

    <!-- Styles -->

    {{--    <link rel="stylesheet" type="text/css" href="{{'frontend/css/bootstrap.min.css'}}">--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{'frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css'}}">--}}
    <link rel="stylesheet" type="text/css" href="{{'frontend/landing/css/landing.css'}}">
</head>
<body>
<div class="container">
    <section class="screen left tiles">

{{--        <img src="frontend/landing/img/left.jpg" />--}}

        <div class="info">

            <button>
                <a href="{{route('Photo.Portfolio')}}" class="button">Edited photos</a>
            </button>
        </div>
    </section>
    <section class="screen right">
        <div class="info">
{{--            <h1 class="white-wine">White Wines</h1>--}}
            <button>
                <a href="{{route('Video.Portfolio')}}" class="button">Edited Videos</a>
            </button>
        </div>
    </section>
</div>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}
<!--===============================================================================================-->
{{--<script>window.jQuery || document.write('<script src="{{'js/vendor/jquery-1.11.2.min.js'}}"><\/script>')</script>--}}
<!--===============================================================================================-->
{{--<script src="{{'frontend/js/vendor/bootstrap.min.js'}}"></script>--}}
{{--<script src="{{'frontend/js/plugins.js'}}"></script>--}}
<script src="{{'frontend/landing/js/landing.js'}}"></script>
</body>
</html>
