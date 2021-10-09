<div class="parallax-content baner-content" id="home">
    <div class="container">
        <div class="first-content">
            <h1 class="mb-2">Morteza Jelokhani</h1><br>
            <span class="mb-5"><em>@yield('portfolio','Photos') Portfolio</em> 2021</span>
            <div class="primary-button mt-4">
                {{--                <a href="#services">Discover More</a>--}}
                <a href="#sec-1">@yield('but-1','Portraits')</a>
                <a href="#sec-2">@yield('but-2','Photo Manipulations') </a>
                <a href="#sec-3">@yield('but-3','Product Photographs')</a>
                <a href={{route('Dashboard')}}>Dashboard</a>
                <a href={{route('Photo.Portfolio')}}>Photo Portfolio</a>
                <a href={{route('Video.Portfolio')}}>Video Portfolio</a>
            </div>
        </div>
    </div>
</div>
