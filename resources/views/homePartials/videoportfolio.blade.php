<!-- Home -->
<div class="parallax-content baner-content" id="home">
    <div class="container">
        <div class="first-content">
            <h1>Morteza Jelokhani</h1>
            <span><em>Video Portfolio</em> 2021</span>
            <div class="primary-button">
                {{--                <a href="#services">Discover More</a>--}}
                <a href="">Portraits</a>
                <a href={{route('Dashboard')}}>Photo Manipulations </a>
                <a href="">Product Photographs</a>
            </div>
        </div>
    </div>
</div>
<!-- Home -->

<!-- manipulation -->
<div class="manipulation-content" id="our-story">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials" class="owl-carousel owl-theme">
                    @foreach($manipulation as $row)
                        <div class="item">
                            <div class="testimonials-item">

                                <a href="{{'backend/img/photos/originals/'.$row->image}}" data-lightbox="image-1"><img src="{{'backend/img/photos/thumbnails/'.$row->thumbnail}}" alt=""></a>
                                <div class="text-content">
                                    <h4>{{$row->title}}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- manipulation end -->

<!-- portrait -->
<div class=" portrait-content" id="portrait">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials1" class="owl-carouselv owl-theme">

                        @foreach($clip as $row)
                            <div class="item">
                                <div class="testimonials-item">
                                <div class="videolightbox-thumb" data-lb-content={{$row->link}} data-lb-content-type="video" style="background-image:url({{'backend/img/clips/thumbnails/'.$row->thumbnail}})">
                                    <div class="videolightbox-thumb-details">
                                        <img class="videolightbox-button bg-transparent" src="{{asset('frontend/img/play(2).png')}}" height="100" width="100" alt="">
                                    </div>
                                    <div class="lightbox-video-details">This is some test text describing what this particular video happens to be about.</div>
                                </div>

                                <div class="text-content">
                                    <h4>{{$row->title}}</h4>
                                </div>

                            </div>

                            </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- portrait -->

<!-- portfolio -->
<div class="product-content" id="product">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials2" class="owl-carousel owl-theme">
                    @foreach($product as $row)
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="{{'backend/img/photos/originals/'.$row->image}}" data-lightbox="image-1"><img src="{{'backend/img/photos/thumbnails/'.$row->thumbnail}}" alt=""></a>
                                <div class="text-content">
                                    <h4>{{$row->title}}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- portfolio -->
