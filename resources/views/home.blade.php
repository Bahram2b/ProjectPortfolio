@extends('layouts.homeMaster')
<!-- Slider -->
@section('home_content')

{{--@include('homePartials.slider')--}}

{{--<!-- Banner -->--}}
{{--@include('homePartials.Trend')--}}


{{--<!-- Product -->--}}
{{--@include('homePartials.product')--}}
{{--<!-- End Product -->--}}

<!--
Vanilla Template
https://templatemo.com/tm-526-vanilla
-->




<div class="parallax-content baner-content" id="home">
    <div class="container">
        <div class="first-content">
            <h1>Morteza Jelokhani</h1>
            <span><em>Portfolio</em> 2021</span>
            <div class="primary-button">
{{--                <a href="#services">Discover More</a>--}}
                <a href="/landing">Discover More</a>
            </div>
        </div>
    </div>
</div>


<div class="service-content" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-text">
                    <h4>More About Vanilla</h4>
                    <div class="line-dec"></div>
                    <p>Vanilla is free HTML CSS template with Bootstrap v4.2.1 and you can apply this theme for your sites.
                        Please share our <a rel="nofollow" href="#">website</a> to your friends or collegues. Thank you.</p>
                    <ul>
                        <li>-  Praesent porta urna id eros</li>
                        <li>-  Curabitur consectetur malesuada</li>
                        <li>-  Nam pretium imperdiet enim</li>
                        <li>-  Sed viverra arcu non nisi efficitur</li>
                    </ul>
                    <div class="primary-button">
                        <a href="#portfolio">Learn More About Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>Classic Modern Design</h4>
                            <div class="line-dec"></div>
                            <p>Sed lacinia ligula est, at venenatis ex iaculis quis. Morbi sollicitudin nulla eget odio pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>Unique &amp; Creative Ideas</h4>
                            <div class="line-dec"></div>
                            <p>Sed lacinia ligula est, at venenatis ex iaculis quis. Morbi sollicitudin nulla eget odio pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>Effective Team Work</h4>
                            <div class="line-dec"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia ligula est, at venenatis ex iaculis quis.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>Fast Support 24/7</h4>
                            <div class="line-dec"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia ligula est, at venenatis ex iaculis quis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="parallax-content projects-content" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="owl-testimonials" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonials-item">
                            <a href="frontend/img/1st-big-item.jpg" data-lightbox="image-1"><img src="frontend/img/1st-item.jpg" alt=""></a>
                            <div class="text-content">
                                <h4>Awesome Note Book</h4>
                                <span>$18.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-item">
                            <a href="frontend/img/2nd-big-item.jpg" data-lightbox="image-1"><img src="frontend/img/2nd-item.jpg" alt=""></a>
                            <div class="text-content">
                                <h4>Antique Decoration Photo</h4>
                                <span>$27.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-item">
                            <a href="frontend/img/3rd-big-item.jpg" data-lightbox="image-1"><img src="frontend/img/3rd-item.jpg" alt=""></a>
                            <div class="text-content">
                                <h4>Work Hand Bag</h4>
                                <span>$36.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-item">
                            <a href="frontend/img/4th-big-item.jpg" data-lightbox="image-1"><img src="frontend/img/4th-item.jpg" alt=""></a>
                            <div class="text-content">
                                <h4>Smart Watch</h4>
                                <span>$45.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-item">
                            <a href="frontend/img/5th-big-item.jpg" data-lightbox="image-1"><img src="frontend/img/5th-item.jpg" alt=""></a>
                            <div class="text-content">
                                <h4>PC Tablet Draw</h4>
                                <span>$63.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-item">
                            <a href="frontend/img/6th-big-item.jpg" data-lightbox="image-1"><img src="frontend/img/6th-item.jpg" alt=""></a>
                            <div class="text-content">
                                <h4>Healthy Milkshake</h4>
                                <span>$77.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-item">
                            <a href="frontend/img/2nd-big-item.jpg" data-lightbox="image-1"><img src="frontend/img/2nd-item.jpg" alt=""></a>
                            <div class="text-content">
                                <h4>Antique Decoration Photo</h4>
                                <span>$84.50</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-item">
                            <a href="frontend/img/1st-big-item.jpg" data-lightbox="image-1"><img src="frontend/img/1st-item.jpg" alt=""></a>
                            <div class="text-content">
                                <h4>Awesome Notes Book</h4>
                                <span>$96.75</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="tabs-content" id="our-story">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="wrapper">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <img src="frontend/img/1st-tab.jpg" alt="">
                            <p>Please do not re-distribute our template ZIP file on your template collection sites. You can make a screenshot and a link back to our website. This template can be used for personal or commercial purposes by end-users.</p>
                        </div>
                        <div id="tab2">
                            <img src="frontend/img/2nd-tab.jpg" alt="">
                            <p>Aliquam eu ultrices risus, sed condimentum diam. Duis risus nulla, elementum vitae nisi a, ornare maximus nisl. Morbi et vehicula est. Cras at vulputate justo. Cras eu nulla metus. Ut et pretium velit. Pellentesque at neque tristique dui tempor venenatis.</p>
                        </div>
                        <div id="tab3">
                            <img src="frontend/img/3rd-tab.jpg" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia ligula est, at venenatis ex iaculis quis. Morbi sollicitudin nulla eget odio pellentesque, sed cursus diam iaculis.</p>
                        </div>
                        <div id="tab4">
                            <img src="frontend/img/4th-tab.jpg" alt="">
                            <p>Duis risus nulla, elementum vitae nisi a, ornare maximus nisl. Morbi et vehicula est. Cras at vulputate justo. Cras eu nulla metus. Ut et pretium velit. Pellentesque at neque tristique.</p>
                        </div>
                    </section>
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                        <li><a href="#tab1" class="active">2008 - 2014</a></li>
                        <li><a href="#tab2">2014 - 2016</a></li>
                        <li><a href="#tab3">2016 - 2019</a></li>
                        <li><a href="#tab4">2019 - Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="parallax-content contact-content" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                    <div class="row">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map">
                    <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection

