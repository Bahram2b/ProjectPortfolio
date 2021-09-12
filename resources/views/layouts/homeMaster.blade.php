<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

    <link rel="icon" type="image/png" href="{{'frontend/images/icons/favicon.png'}}"/>
    <link rel="stylesheet" type="text/css" href="{{'frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css'}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{'frontend/css/bootstrap.min.css'}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{'frontend/css/hero-slider.css'}}">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{'frontend/css/templatemo-main.css'}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{'frontend/css/owl-carousel.css'}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--===============================================================================================-->
{{--    <link rel="stylesheet" type="text/css" href="{{'frontend/vendor/css-hamburgers/hamburgers.min.css'}}">--}}
{{--    <!--===============================================================================================-->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'frontend/vendor/animsition/css/animsition.min.css'}}">--}}
{{--    <!--===============================================================================================-->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'frontend/vendor/select2/select2.min.css'}}">--}}
{{--    <!--===============================================================================================-->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'frontend/vendor/daterangepicker/daterangepicker.css'}}">--}}
{{--    <!--===============================================================================================-->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'frontend/vendor/slick/slick.css'}}">--}}
{{--    <!--===============================================================================================-->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'frontend/vendor/MagnificPopup/magnific-popup.css'}}">--}}
{{--    <!--===============================================================================================-->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'frontend/vendor/perfect-scrollbar/perfect-scrollbar.css'}}">--}}
{{--    <!--===============================================================================================-->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'frontend/css/util.css'}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{'frontend/css/main.css'}}">--}}
{{--    <!--===============================================================================================-->--}}
    <script src="{{'frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'}}"></script>
</head>
<body>
{{--<body class="animsition">--}}

<!-- Header -->
{{--@include('homePartials.header')--}}
<!-- End Header -->
<!-- Cart -->



@yield('home_content')

<!-- Footer -->
{{--@include('homePartials.footer')--}}


<!-- Back to top -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="primary-button">
                    <a href="#home">Back To Top</a>
                </div>
                <ul>
                    <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
                <p>Copyright &copy; 2021 Mory studio

                    - Design: <a rel="nofollow noopener" href="#"><em>Mory studio</em></a></p>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--===============================================================================================-->
<script>window.jQuery || document.write('<script src="{{'js/vendor/jquery-1.11.2.min.js'}}"><\/script>')</script>
<!--===============================================================================================-->
<script src="{{'frontend/js/vendor/bootstrap.min.js'}}"></script>
<script src="{{'frontend/js/plugins.js'}}"></script>
<!--===============================================================================================-->
<script src="{{'frontend/js/main.js'}}"></script>
<!--===============================================================================================-->
<script>
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
</script>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>

</body>
</html>
