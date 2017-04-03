jQuery(document).ready(function($) {
    "use strict"; 
	// init superfish menu
	jQuery('ul.sf-menu-without-arrow').superfish({
		delay: 250,                            // delay on mouseout
        animation: {opacity:'show',height:'show'},  // fade-in and slide-down animation
        speed: 'fast',                          // faster animation speed
        cssArrows: false
	});


    // responsive-menu
    jQuery('.menu-trigger .trigger').on('click', function(event) {
        event.preventDefault();
        jQuery('body').addClass('responsive-menu-opened');
        jQuery('.responsive-menu-wrapper').addClass('open');
    });

    jQuery('.responsive-menu-close').on('click', function(event) {
        event.preventDefault();
        jQuery('body').removeClass('responsive-menu-opened');
        jQuery('.responsive-menu-wrapper').removeClass('open');
    });
    // end responsive menu scripts
    // home v1 gallery slider
    if (jQuery('#home-v1-gallery-slider').length) {
        jQuery('#home-v1-gallery-slider .gallery-slider').owlCarousel({
            items: 4,
            // Responsive Settings
            itemsDesktop: [1200, 4],
            itemsDesktopSmall: [991, 3],
            itemsTablet: [600, 2],
            itemsTabletSmall: [560, 1],
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v1-gallery-slider .owl-next').on("click", function(){
            jQuery('#home-v1-gallery-slider .gallery-slider').trigger('owl.next');
        })
        jQuery('#home-v1-gallery-slider .owl-prev').on("click", function(){
            jQuery('#home-v1-gallery-slider .gallery-slider').trigger('owl.prev');
        });
    }
    // home v1 trainer slider
    if (jQuery('#home-v1-trainer-slider').length) {
        jQuery('#home-v1-trainer-slider .trainer-slider').owlCarousel({
            items: 4,
            // Responsive Settings
            itemsDesktop: false,
            itemsDesktopSmall: [991, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: [600, 1],
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v1-trainer-slider .owl-next').on("click", function(){
            jQuery('#home-v1-trainer-slider .trainer-slider').trigger('owl.next');
        })
        jQuery('#home-v1-trainer-slider .owl-prev').on("click", function(){
            jQuery('#home-v1-trainer-slider .trainer-slider').trigger('owl.prev');
        });
    }

    // blog slider
    if (jQuery('#blog-slider-v1').length) {
        jQuery('#blog-slider-v1 .blog-slider').owlCarousel({
            items: 3,
            // Responsive Settings
            itemsDesktop: false,
            itemsDesktopSmall: [991, 2],
            itemsTablet: [600, 1],
            itemsTabletSmall: false,
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#blog-slider-v1 .owl-next').on("click", function(){
            jQuery('#blog-slider-v1 .blog-slider').trigger('owl.next');
        })
        jQuery('#blog-slider-v1 .owl-prev').on("click", function(){
            jQuery('#blog-slider-v1 .blog-slider').trigger('owl.prev');
        });
    }

    // product slider
    if (jQuery('#new-products').length) {
        jQuery('#new-products .product-slider').owlCarousel({
            items: 4,
            // Responsive Settings
            itemsDesktop: false,
            itemsDesktopSmall: [991, 2],
            itemsTablet: [600, 1],
            itemsTabletSmall: false,
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#new-products .owl-next').on("click", function(){
            jQuery('#new-products .product-slider').trigger('owl.next');
        })
        jQuery('#new-products .owl-prev').on("click", function(){
            jQuery('#new-products .product-slider').trigger('owl.prev');
        });
    }
    // home v1 testimonial slider
    if (jQuery('#home-v1-testimonial-slider').length) {
        jQuery('#home-v1-testimonial-slider').owlCarousel({
            singleItem: true,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: true,
            mouseDrag: true,
            touchDrag: true
        });
    }
    // our mission slider
    if (jQuery('#our-mission-slider').length) {
        jQuery('#our-mission-slider').flexslider({
            animation: "slide",
            directionNav: false,
            slideshow: false
        });
    }
    // home v2 gallery slider
    if (jQuery('#home-v2-gallery-slider').length) {
        jQuery('#home-v2-gallery-slider .gallery-slider').owlCarousel({
            items: 3,
            // Responsive Settings
            itemsDesktop: false,
            itemsDesktopSmall: [991, 2],
            itemsTablet: [600, 1],
            itemsTabletSmall: false,
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v2-gallery-slider .owl-next').on("click", function(){
            jQuery('#home-v2-gallery-slider .gallery-slider').trigger('owl.next');
        })
        jQuery('#home-v2-gallery-slider .owl-prev').on("click", function(){
            jQuery('#home-v2-gallery-slider .gallery-slider').trigger('owl.prev');
        });
    }
    // home v2 trainer slider
    if (jQuery('#home-v2-trainer-slider').length) {
        jQuery('#home-v2-trainer-slider .trainer-slider').owlCarousel({
            items: 4,
            // Responsive Settings
            itemsDesktop: false,
            itemsDesktopSmall: [991, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: [600, 1],
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v2-trainer-slider .owl-next').on("click", function(){
            jQuery('#home-v2-trainer-slider .trainer-slider').trigger('owl.next');
        })
        jQuery('#home-v2-trainer-slider .owl-prev').on("click", function(){
            jQuery('#home-v2-trainer-slider .trainer-slider').trigger('owl.prev');
        });
    }
    // home v2 testimonial slider style 2
    if (jQuery('#home-v2-testimonial-slider').length) {
        jQuery('#home-v2-testimonial-slider .testimonial-slider').owlCarousel({
            singleItem: true,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: true,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v2-testimonial-slider .owl-next').on("click", function(){
            jQuery('#home-v2-testimonial-slider .testimonial-slider').trigger('owl.next');
        })
        jQuery('#home-v2-testimonial-slider .owl-prev').on("click", function(){
            jQuery('#home-v2-testimonial-slider .testimonial-slider').trigger('owl.prev');
        });
    }
    // anything-slider
    if (jQuery('#home-v2-anything-slider').length) {
        jQuery('#home-v2-anything-slider .anything-slider').owlCarousel({
            singleItem: true,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: true,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v2-anything-slider .owl-next').on("click", function(){
            jQuery('#home-v2-anything-slider .anything-slider').trigger('owl.next');
        })
        jQuery('#home-v2-anything-slider .owl-prev').on("click", function(){
            jQuery('#home-v2-anything-slider .anything-slider').trigger('owl.prev');
        });
    }
    // count
    if (jQuery('.counter').length) {
        var waypoint = new Waypoint({
            element: document.getElementsByClassName('counter'),
            handler: function(direction) {
                jQuery('.counter').countTo();
                this.destroy();
            },
            offset: 'bottom-in-view'
        });
    }
    // bootstrap select
    jQuery('.language-switcher').selectpicker({
        width: 'fit',
        showIcon: false
    });

    jQuery('.brick-selectpicker').selectpicker({
        width: 'fit'
    });

    // simple flex slider
    if (jQuery('#home-v3-simple-flex-slider-1').length) {
        jQuery('#home-v3-simple-flex-slider-1').flexslider({
            animation: "slide",
            directionNav: true,
            controlNav: false,
            slideshow: false,
            prevText: '',
            nextText: ''
        });
    }

    // simple owlCarousel
    if (jQuery('#home-v3-simple-owl-slider').length) {
        jQuery('#home-v3-simple-owl-slider .simple-owl-slider').owlCarousel({
            singleItem: true,
            stopOnHover: true,
            slideSpeed: 400,
            pagination: true,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v3-simple-owl-slider .owl-next').on("click", function(){
            jQuery('#home-v3-simple-owl-slider .simple-owl-slider').trigger('owl.next');
        })
        jQuery('#home-v3-simple-owl-slider .owl-prev').on("click", function(){
            jQuery('#home-v3-simple-owl-slider .simple-owl-slider').trigger('owl.prev');
        });
    }

    // home v3 gallery slider
    if (jQuery('#home-v3-gallery-slider').length) {
        jQuery('#home-v3-gallery-slider .gallery-slider').owlCarousel({
            items: 5,
            // Responsive Settings
            itemsDesktop: [1700, 3],
            itemsDesktopSmall: [991, 3],
            itemsTablet: [600, 2],
            itemsTabletSmall: [560, 1],
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v3-gallery-slider .owl-next').on("click", function(){
            jQuery('#home-v3-gallery-slider .gallery-slider').trigger('owl.next');
        })
        jQuery('#home-v3-gallery-slider .owl-prev').on("click", function(){
            jQuery('#home-v3-gallery-slider .gallery-slider').trigger('owl.prev');
        });
    }

    // anything-slider-v2
    if (jQuery('#home-v3-anything-slider').length) {
        jQuery('#home-v3-anything-slider .anything-slider-v2').owlCarousel({
            singleItem: true,
            stopOnHover: true,
            slideSpeed: 400,
            pagination: true,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v3-anything-slider .owl-next').on("click", function(){
            jQuery('#home-v3-anything-slider .anything-slider-v2').trigger('owl.next');
        })
        jQuery('#home-v3-anything-slider .owl-prev').on("click", function(){
            jQuery('#home-v3-anything-slider .anything-slider-v2').trigger('owl.prev');
        });
    }

    // blog post advance slider
    if (jQuery('#home-v3-blog-post-slider-1').length) {
        jQuery('#home-v3-blog-post-slider-1').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            fade: true,
            asNavFor: '#home-v3-blog-post-slider-2',
            appendArrows: jQuery('#home-v3-blog-post-slider-nav'),
            prevArrow: '<i class="fa fa-chevron-left prev"></i>',
            nextArrow: '<i class="fa fa-chevron-right next"></i>'
        });
    }

    if (jQuery('#home-v3-blog-post-slider-2').length) {
        jQuery('#home-v3-blog-post-slider-2').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '#home-v3-blog-post-slider-1',
            dots: false,
            arrows: true,
            centerMode: true,
            focusOnSelect: true,
            vertical: true,
            centerPadding: '0',
            appendArrows: jQuery('#home-v3-blog-post-slider-thumbs-nav'),
            prevArrow: '<i class="fa fa-chevron-left arrow prev"></i>',
            nextArrow: '<i class="fa fa-chevron-right arrow next"></i>',
            responsive: [
                {
                    breakpoint: 1800,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    }

   
    // dropdown cart
    if (jQuery('#dropdown-cart-wrapper').length) {
        jQuery(document).on("click", function(){
            jQuery("#dropdown-cart-wrapper").removeClass('open');
        });

        jQuery('.search-wrapper .dropdown-handler').on("click", function(){
            jQuery("#dropdown-cart-wrapper").removeClass('open');
        });

        // open the form
        jQuery('#dropdown-cart-wrapper .cart-handler').on('click', function(event) {
            event.preventDefault();
            jQuery(this).parent().toggleClass('open');
        });

        /* Clicks within the input field won't make
           it past the dropdown itself */
        jQuery("#dropdown-cart-wrapper").on("click", function(e){
            e.stopPropagation();
        });
    }

    // dropdown cart
    if (jQuery('#dropdown-cart-wrapper').length) {
        // open the form
        jQuery('.cart-n-search .mini-shop').on('click', function(event) {
            event.preventDefault();
            jQuery(this).parent().toggleClass('open');
        });
    }

    // dropdown search form
    if (jQuery('#hidden-search-form').length) {
        jQuery(document).on("click", function(){
            jQuery("#hidden-search-form").removeClass('open');
        });

        jQuery('.cart-wrapper .cart-handler').on("click", function(){
            jQuery("#hidden-search-form").removeClass('open');
        });

        // open the form
        jQuery('#hidden-search-form .dropdown-handler').on('click', function(event) {
            event.preventDefault();
            jQuery(this).parent().toggleClass('open');
        });

        /* Clicks within the input field won't make
           it past the dropdown itself */
        jQuery("#hidden-search-form").on("click", function(e){
            e.stopPropagation();
        });
    }

    // home v4 gallery slider
    if (jQuery('#home-v4-gallery-slider').length) {
        jQuery('#home-v4-gallery-slider .gallery-slider').owlCarousel({
            items: 2,
            // Responsive Settings
            itemsDesktop: false,
            itemsDesktopSmall: [991, 1],
            itemsTablet: false,
            itemsTabletSmall: false,
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v4-gallery-slider .owl-next').on("click", function(){
            jQuery('#home-v4-gallery-slider .gallery-slider').trigger('owl.next');
        })
        jQuery('#home-v4-gallery-slider .owl-prev').on("click", function(){
            jQuery('#home-v4-gallery-slider .gallery-slider').trigger('owl.prev');
        });
    }

    // home v4 trainer slider
    if (jQuery('#home-v4-trainer-slider').length) {
        jQuery('#home-v4-trainer-slider .trainer-slider').owlCarousel({
            items: 5,
            // Responsive Settings
            itemsDesktop: [1350, 3],
            itemsDesktopSmall: [1199, 3],
            itemsTablet: [991, 2],
            itemsTabletSmall: [600, 1],
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v4-trainer-slider .owl-next').on("click", function(){
            jQuery('#home-v4-trainer-slider .trainer-slider').trigger('owl.next');
        })
        jQuery('#home-v4-trainer-slider .owl-prev').on("click", function(){
            jQuery('#home-v4-trainer-slider .trainer-slider').trigger('owl.prev');
        });
    }

    // home v4 video slider
    if (jQuery('#home-v4-video-slider').length) {
        jQuery('#home-v4-video-slider .video-slider').owlCarousel({
            items: 4,
            // Responsive Settings
            itemsDesktop: [1350, 3],
            itemsDesktopSmall: false,
            itemsTablet: [991, 2],
            itemsTabletSmall: [767, 1],
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v4-video-slider .owl-next').on("click", function(){
            jQuery('#home-v4-video-slider .video-slider').trigger('owl.next');
        })
        jQuery('#home-v4-video-slider .owl-prev').on("click", function(){
            jQuery('#home-v4-video-slider .video-slider').trigger('owl.prev');
        });
    }

    // home v5 gallery slider
    if (jQuery('#home-v5-gallery-slider').length) {
        jQuery('#home-v5-gallery-slider .gallery-slider').owlCarousel({
            items: 5,
            // Responsive Settings
            itemsDesktop: [1700, 4],
            itemsDesktopSmall: [1199, 3],
            itemsTablet: [991, 2],
            itemsTabletSmall: [false],
            itemsMobile: [600, 1],
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v5-gallery-slider .owl-next').on("click", function(){
            jQuery('#home-v5-gallery-slider .gallery-slider').trigger('owl.next');
        })
        jQuery('#home-v5-gallery-slider .owl-prev').on("click", function(){
            jQuery('#home-v5-gallery-slider .gallery-slider').trigger('owl.prev');
        });
    }

    // home v5 trainer slider
    if (jQuery('#home-v5-trainer-slider').length) {
        jQuery('#home-v5-trainer-slider .trainer-slider').owlCarousel({
            items: 4,
            // Responsive Settings
            itemsDesktop: [1350, 3],
            itemsDesktopSmall: [1199, 3],
            itemsTablet: [991, 2],
            itemsTabletSmall: [600, 1],
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v5-trainer-slider .owl-next').on("click", function(){
            jQuery('#home-v5-trainer-slider .trainer-slider').trigger('owl.next');
        })
        jQuery('#home-v5-trainer-slider .owl-prev').on("click", function(){
            jQuery('#home-v5-trainer-slider .trainer-slider').trigger('owl.prev');
        });
    }

    // home-v5-blog-slider
    if (jQuery('#home-v5-blog-slider').length) {
        jQuery('#home-v5-blog-slider .blog-slider-style-2').owlCarousel({
            items: 2,
            // Responsive Settings
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsTabletSmall: [600, 1],
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#home-v5-blog-slider .owl-next').on("click", function(){
            jQuery('#home-v5-blog-slider .blog-slider-style-2').trigger('owl.next');
        })
        jQuery('#home-v5-blog-slider .owl-prev').on("click", function(){
            jQuery('#home-v5-blog-slider .blog-slider-style-2').trigger('owl.prev');
        });
    }

    // home-v11-menu
    jQuery('ul.sf-menu-with-arrow').superfish({
        delay: 250,                            // delay on mouseout
        animation: {opacity:'show',height:'show'},  // fade-in and slide-down animation
        speed: 'fast',                          // faster animation speed
        cssArrows: true
    });

    // featured product slider
    if (jQuery('#featured-products').length) {
        jQuery('#featured-products .product-slider').owlCarousel({
            items: 4,
            // Responsive Settings
            itemsDesktop: false,
            itemsDesktopSmall: [991, 2],
            itemsTablet: [600, 1],
            itemsTabletSmall: false,
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#featured-products .owl-next').on("click", function(){
            jQuery('#featured-products .product-slider').trigger('owl.next');
        })
        jQuery('#featured-products .owl-prev').on("click", function(){
            jQuery('#featured-products .product-slider').trigger('owl.prev');
        });
    }

    jQuery(document).on('click', '.yamm .dropdown-menu', function(e) {
        e.stopPropagation();
    });

    jQuery(document).on('click', '.yamm .sub-menu', function(e) {
        e.stopPropagation();
    });


    jQuery(function(){
        jQuery('.responsive-menu').slicknav({label: '',prependTo:'.menu-trigger'});
    });
    // ddslick
    if (jQuery().ddslick) {
        jQuery('.woocommerce .orderby').ddslick({
            width: '230px',
            background: 'transparent'
        });
        jQuery('.woocommerce .productsperpage').ddslick({
            width: '230px',
            background: 'transparent'
        });
        jQuery('.woocommerce .choosecategory').ddslick({
            width: '230px',
            background: 'transparent'
        });

        // single-product
        jQuery('.woocommerce .select-color').ddslick({
            width: '170px',
            background: 'transparent'
        });
        jQuery('.woocommerce .select-size').ddslick({
            width: '90px',
            background: 'transparent'
        });
    }

    if (jQuery().TouchSpin) {
        jQuery('.product-quantity').TouchSpin({
            verticalbuttons: true
        });

        jQuery('.touchspin-cart').TouchSpin({
            verticalbuttons: true
        });
    }

    // product-images-slider
    if (jQuery('#product-images-slider').length) {
        jQuery('#product-images-slider').flexslider({
            animation: "slide",
            directionNav: true,
            controlNav: false,
            slideshow: false,
            prevText: '',
            nextText: ''
        });
    }

    // mixitup
    if (jQuery().mixItUp) {
        jQuery('.gallery-filters').mixItUp();
    }

    // our-team-slider
    if (jQuery('#our-team-slider').length) {
        jQuery('#our-team-slider .trainer-slider').owlCarousel({
            items: 4,
            // Responsive Settings
            itemsDesktop: false,
            itemsDesktopSmall: [991, 2],
            itemsTablet: [600, 1],
            itemsTabletSmall: false,
            itemsMobile: false,
            stopOnHover: true,
            // End Responsive Settings
            slideSpeed: 400,
            pagination: false,
            mouseDrag: true,
            touchDrag: true
        });

        jQuery('#our-team-slider .owl-next').on("click", function(){
            jQuery('#our-team-slider .trainer-slider').trigger('owl.next');
        })
        jQuery('#our-team-slider .owl-prev').on("click", function(){
            jQuery('#our-team-slider .trainer-slider').trigger('owl.prev');
        });
    }

    // team-member-details-slider
    if (jQuery('#team-member-images-slider').length) {
        jQuery('#team-member-images-slider').flexslider({
            animation: "slide",
            directionNav: true,
            controlNav: false,
            slideshow: false,
            prevText: '',
            nextText: ''
        });
    }

    // coming soon
    if (jQuery().countdown) {
        if (jQuery('#entry-interval').length) {
            jQuery('#entry-interval').countdown({until: 8640000, format: 'dHMS'});
        }
    }

    // single-product
    if (jQuery().ddslick) {
        jQuery('.select-city').ddslick({
            width: '200px',
            background: 'transparent'
        });
    }

    // BMI Calculator
    if (jQuery().ddslick) {
        jQuery('.bmi-ddslick-pant-size').ddslick({
            // width: '470px',
            background: '#fff'
        });
        jQuery('.bmi-ddslick-weight-goal').ddslick({
            // width: '470px',
            background: '#fff'
        });
        jQuery('.bmi-ddslick-activity-level').ddslick({
            // width: '470px',
            background: '#fff'
        });
    }

    // tooltipster
    if (jQuery().tooltipster) {
        jQuery('.activity-level-tooltip').tooltipster({
            content: jQuery('<div class="text-center a-l-h-t"><h4 class="colored">ACTIVITY LEVEL</h4><div class="level"><span class="colored">Not Active:</span> A desk job and little or no regular exercise</div><div class="level"><span class="colored">Lightly Active:</span> 1-3 hours/week of light exercise.</div><div class="level"><span class="colored">Very Active:</span> 5-6 hours/week of strenuous exercise.</div></div>'),
            theme: 'brick-tooltipster-default',
            trigger: 'hover',
            maxWidth: 288
        });
    }

    // bmi calculator
    jQuery('.bmi-gender-btn').on('click', function(event) {
        event.preventDefault();
        jQuery('.bmi-gender-btn').removeClass('active');
        jQuery(this).addClass('active');
    });

    // single gallery image slider
    if (jQuery().thumbchanger) {
        jQuery('.image-area').thumbchanger({
            mainImageArea: '#single-gallery-main-images',
            trigger:       'click',
            easing:        'linear',
            animateTime:   300,
            fixHeight:     true,
            onload: true
        });
    }

    // shop view
    jQuery('.choose-view').on('click', 'a', function(event) {
        event.preventDefault();
        var next_view = jQuery(this).attr('data-view'),
            prev_view = jQuery(this).find('a.active').attr('data-view');

        jQuery('.woocommerce ul.products').removeClass('grid list').hide();

        jQuery('.choose-view').find('a').removeClass('active');
        jQuery(this).addClass('active');

        jQuery('.woocommerce ul.products').addClass(next_view).fadeIn('slow');
    });

    // prettyphoto
    if (jQuery().prettyPhoto) {
        jQuery("a[data-rel='prettyPhoto']").prettyPhoto({
            social_tools: ''
        });
    }

    // color switcher
    jQuery('.color-switcher-wrapper .trigger').on('click', function(event) {
        event.preventDefault();
        jQuery(this).parent().toggleClass('open');
    });

    var windowhref = window.location.href,
        windowLocationArray = windowhref.split('/'),
        windowLocation = windowLocationArray[windowLocationArray.length - 1];

    if (windowLocation.length) {
        jQuery('.homepage-list select option').each(function(index) {
            if (jQuery(this).val() == windowLocation) {
                jQuery(this).attr('selected', 'selected');
            }
        });
    }

   
});


// run functions after window load
jQuery(window).load(function() {
    "use strict"; 
    jQuery('.preloader').addClass('finished');


    function mapForContactUsPage() {
        var location = {lat: 34.03900468, lng: -118.2427597};
        var map = new google.maps.Map(document.getElementById('contact-us-page-map'), {
            zoom: 12,
            center: location,
            scrollwheel: false
        });

        var contentString = '<div class="table-content info-window-map-content">'+
            '<div class="table-cell"><img src="images/brick-logo.png"></div>'+
            '<div class="table-cell">'+
            '<h4>Brick Gym Address</h4>'+
            '<p>PO Box 16122 Meilo Street Yese <br />Mictoran 8007 Jordan</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var image = 'images/map-marker-2.png';
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: image
        });
        
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }

    // contact us page map
    if (jQuery('#contact-us-page-map').length) {
        mapForContactUsPage();
    }

   

    // show color switcher
    jQuery('.color-switcher-wrapper').fadeIn('slow');
});


(function($) {
    'use strict';

    //Mobile Detect
    var testMobile;
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    function parallaxInit() {
        testMobile = isMobile.any();
        if (testMobile == null) {
            //Parallax Classes
            jQuery('body .parallax').each(function() {
                jQuery(this).parallax("50%", 0.5);
            });
        }
    }

    if (jQuery().parallax) {
        jQuery(window).bind('load', function() {
            parallaxInit();
        });

        $(window).on('resize', function(e) {
            parallaxInit();
        }, 250);
    }

}(jQuery));