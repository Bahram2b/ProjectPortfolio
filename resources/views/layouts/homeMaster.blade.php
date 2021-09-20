<!DOCTYPE html>
<html lang="en">
<head>
    @section('header')
@include('homePartials.header')
    @show
</head>
<body>
{{--<body class="animsition">--}}

<!-- Header -->
{{----}}
<!-- End Header -->
<!-- Cart -->
<!-- Sidebar menu -->
@section('sidemenu')
    @include('homePartials.sidemenu')
@show

<!-- Sidebar menu End-->
<!-- Home content-->

@yield('home_content')
<!-- Home content End-->

<!-- Footer -->
@include('homePartials.footer')
{{--@include('homePartials.instafooter')--}}
<!-- Footer End-->

<!-- Back to top -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--===============================================================================================-->
<script>window.jQuery || document.write('<script src="{{'js/vendor/jquery-1.11.2.min.js'}}"><\/script>')</script>
<!--===============================================================================================-->
<script src="{{'frontend/js/vendor/bootstrap.min.js'}}"></script>
<script src="{{'frontend/js/plugins.js'}}"></script>
<script src="{{'frontend/js/land.js'}}"></script>
<!--===============================================================================================-->
<script src="{{'frontend/js/main.js'}}"></script>
{{--<!--===============================================================================================-->--}}
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
