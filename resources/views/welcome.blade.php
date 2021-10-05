<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Morteza Jelokhani Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}
    <script src="{{asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{'frontend/landing/css/landing.css'}}">
    <script>
        $(window).on('load', function () {
            $(".load").fadeOut("slow");
        });
    </script>
    <!--===============================================================================================-->
{{--        <link rel="stylesheet" type="text/css" href="{{'frontend/landing/css/landing.css'}}">--}}
<!--===============================================================================================-->
    <!-- Fonts -->

    <!-- Styles -->

    {{--    <link rel="stylesheet" type="text/css" href="{{'frontend/css/bootstrap.min.css'}}">--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{'frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css'}}">--}}

</head>
<body>
<style>

    .load {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .spinner {
        animation: rotator 1.4s linear infinite;
    }
    @keyframes rotator {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(270deg);
        }
    }
    .path {
        stroke-dasharray: 187;
        stroke-dashoffset: 0;
        transform-origin: center;
        animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
    }
    @keyframes colors {
        0% {
            stroke: #4285f4;
        }
        25% {
            stroke: #de3e35;
        }
        50% {
            stroke: #f7c223;
        }
        75% {
            stroke: #1b9a59;
        }
        100% {
            stroke: #4285f4;
        }
    }
    @keyframes dash {
        0% {
            stroke-dashoffset: 187;
        }
        50% {
            stroke-dashoffset: 46.75;
            transform: rotate(135deg);
        }
        100% {
            stroke-dashoffset: 187;
            transform: rotate(450deg);
        }
    }

</style>
<div class="load">
    <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
</div>
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
