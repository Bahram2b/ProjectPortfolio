<!-- Home -->
<div class="parallax-content baner-content" id="home">
    <div class="container">
        <div class="first-content">
            <h1>Morteza Jelokhani</h1>
            <span><em>Portfolio</em> 2021</span>
            <div class="primary-button">
                {{--                <a href="#services">Discover More</a>--}}
                <a href="/landing">Portraits</a>
                <a href="/landing">Photo Manipulations </a>
                <a href="/landing">Product Photographs</a>
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
                <div id="owl-testimonials3" class="owl-carousel owl-theme">
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
                <div id="owl-testimonials" class="owl-carousel owl-theme">
                    @foreach($portraits as $row)
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


