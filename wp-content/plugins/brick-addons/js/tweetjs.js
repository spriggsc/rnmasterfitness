 jQuery(document).ready(function($) {
 // twitter slider
    if (jQuery('#home-v3-tweetie-slider').length) {
        jQuery('#home-v3-tweetie-slider').twittie({
            username: 'themeforest',
            list: 'c-oo-l-e-s-t-nerds-i-know',
            dateFormat: '%b. %d, %Y',
            template: '<div class="tweet">{{tweet}}</div><div class="name">{{user_name}}</div><div class="date">{{date}}</div>',
            count: 10
        }, function () {
            jQuery('#home-v3-tweetie-slider ul').owlCarousel({
                singleItem: true,
                stopOnHover: true,
                slideSpeed: 400,
                pagination: true,
                mouseDrag: true,
                touchDrag: true
            });

            jQuery('#twitter-slider-wrapper .owl-next').on("click", function(){
                jQuery('#home-v3-tweetie-slider ul').trigger('owl.next');
            })
            jQuery('#twitter-slider-wrapper .owl-prev').on("click", function(){
                jQuery('#home-v3-tweetie-slider ul').trigger('owl.prev');
            });
        });
    }
}(jQuery));