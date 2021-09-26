/*

Vanilla Template

https://templatemo.com/tm-526-vanilla

*/

jQuery(document).ready(function($) {

	'use strict';

    var top_header = $('.parallax-content');
    top_header.css({'background-position':'center center'}); // better use CSS

    $(window).scroll(function () {
    var st = $(this).scrollTop();
    top_header.css({'background-position':'center calc(50% + '+(st*.5)+'px)'});
    });


    $('body').scrollspy({
        target: '.fixed-side-navbar',
        offset: 200
    });

      // smoothscroll on sidenav click

    $('.tabgroup > div').hide();
        $('.tabgroup > div:first-of-type').show();
        $('.tabs a').click(function(e){
          e.preventDefault();
            var $this = $(this),
            tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
            others = $this.closest('li').siblings().children('a'),
            target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();

    })

    var owl = $("#owl-testimonials");
    var owl2 = $("#owl-testimonials2");
    var owl3 = $("#owl-testimonials3");

      owl.owlCarousel({

        pagination : true,
        paginationNumbers: false,
        autoPlay: 6000, //Set AutoPlay to 3 seconds
        items : 4, //10 items above 1000px browser width
        itemsDesktop : [1000,3], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,2], // betweem 900px and 601px
        itemsTablet: [600,1], //2 items between 600 and 0
        itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

    });
    owl2.owlCarousel({

        pagination : true,
        paginationNumbers: false,
        autoPlay: 6000, //Set AutoPlay to 3 seconds
        items : 4, //10 items above 1000px browser width
        itemsDesktop : [1000,3], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,2], // betweem 900px and 601px
        itemsTablet: [600,1], //2 items between 600 and 0
        itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

    });
    owl3.owlCarousel({

        pagination : true,
        paginationNumbers: false,
        autoPlay: 6000, //Set AutoPlay to 3 seconds
        items : 4, //10 items above 1000px browser width
        itemsDesktop : [1000,3], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,2], // betweem 900px and 601px
        itemsTablet: [600,1], //2 items between 600 and 0
        itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

    });
    $('.owl-carouselv').owlCarousel({
        items:4,
        merge:true,
        loop:true,
        margin:30,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })
    var videolightboxHTML = '<div class="videolightbox">' +
        '<div class="videolightbox-inner">' +
        '<div class="lb-content">Loading...' +
        '</div>' +
        '</div>' +
        '</div>';

    $("body").on("click", ".videolightbox-button", function() {
        var contentURL = $(this).parents(".videolightbox-thumb").attr("data-lb-content");
        var contentType = $(this).parents(".videolightbox-thumb").attr("data-lb-content-type");

        if (contentType === "video") {
            var contentHTML = '<div class="video-wrapper"><iframe width="1280" height="720" src="'+contentURL+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';

            $("html").prepend(videolightboxHTML);
            $(".videolightbox").animate({
                opacity: 1
            }, 200, function() {
                // Animation complete.
                $(".lb-content").html(contentHTML);
            });

        }
    });

// handle clicking dark part of lighbox to cancel
    $("html").on("click", ".videolightbox-inner", function(){
        $(".videolightbox").animate({
            opacity: 0
        }, 200, function() {
            // Animation complete.
            $(".videolightbox").remove();
        });

    });



});
