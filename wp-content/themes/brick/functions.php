<?php 	
if (!class_exists('TGM_Plugin_Activation') && file_exists( get_template_directory() . '/inc/class-tgm-plugin-activation.php' ) ) {
        require_once(get_template_directory() . '/inc/class-tgm-plugin-activation.php');
    }
require_once(get_template_directory().'/inc/admin/admin-config.php');

require_once(get_template_directory() . '/inc/vc_template.php' );

// Webnus Google Fonts
function brick_google_fonts_url() {
    $fonts_url 		= '';
    $font_families	= array();
    $subsets		= 'latin,latin-ext';

    // Default typography
    if ( 'off' !== _x( 'on', 'Lato font: on or off', 'brick' ) ) {
        $font_families[] = 'Lato:400,300,300italic,400italic,700,900';
    }
    if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'brick' ) ) {
        $font_families[] = 'Playfair+Display:400,700,900';
    }
  

    if ( $font_families ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

    return esc_url( $fonts_url );
}

function brick_theme_scripts() {

	$brick_option  = get_option('brick_option'); 
	$googleapikey = '';
	if (!empty($brick_option['googleapikey'])) {
		$googleapikey = $brick_option['googleapikey'];
	}
	
	// google font
	wp_enqueue_style( 'webnus-google-fonts', brick_google_fonts_url(), array(), null );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.1', 'all');
	wp_enqueue_style( 'superfish', get_template_directory_uri() . '/css/superfish.css', array(), '1.1', 'all');
	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.css', array(), '1.1', 'all');
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.1', 'all');
	wp_enqueue_style( 'touchspin', get_template_directory_uri() . '/css/jquery.bootstrap-touchspin.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'awesome-bootstrap-checkbox', get_template_directory_uri() . '/css/awesome-bootstrap-checkbox.css', array(), '1.1', 'all');
	wp_enqueue_style( 'tooltipster', get_template_directory_uri() . '/css/tooltipster.css', array(), '1.1', 'all');
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', array(), '1.1', 'all');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), '1.1', 'all');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), '1.1', 'all');
	wp_enqueue_style( 'flaticoncss', get_template_directory_uri() . '/css/flaticon.css', array(), '1.1', 'all');
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'brick_style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'brickwaypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'countTo', get_template_directory_uri() . '/js/jquery.countTo.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'select', get_template_directory_uri() . '/js/bootstrap-select.min.js', array ( 'jquery' ), 1.1, true);
	
	wp_enqueue_script( 'ddslick', get_template_directory_uri() . '/js/ddslick.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'brick_googleapis', 'http://maps.google.com/maps/api/js?key='.esc_html( $googleapikey ), array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'touchspin', get_template_directory_uri() . '/js/jquery.bootstrap-touchspin.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jqueryplugin', get_template_directory_uri() . '/js/jquery.plugin.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'tooltipster', get_template_directory_uri() . '/js/jquery.tooltipster.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'unevent', get_template_directory_uri() . '/js/jquery.unevent.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'brick_script', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.1, true);
 
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'brick_theme_scripts' );


add_action( 'widgets_init', 'brick_widgets_init' );
function brick_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Blog Sidebar', 'brick' ),
        'id' => 'sidebarblog',
        'description' => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'brick' ),
        'before_widget' => '<div class="widget sidebarwidget">',
		'after_widget'  => '</div><div class="clearfix"></div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 1', 'brick' ),
		'id'            => 'footer_sidebar_1',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'brick' ),
		'id'            => 'footer_sidebar_2',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'brick' ),
		'id'            => 'footer_sidebar_3',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 4', 'brick' ),
		'id'            => 'footer_sidebar_4',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	 register_sidebar( array(
        'name' => esc_html__( 'Top Cart', 'brick' ),
        'id' => 'topcart',
        'description' => esc_html__( 'Widgets in this area will be shown on top cart dorpdown.', 'brick' ),
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	    ) );
	 register_sidebar( array(
        'name' => esc_html__( 'Currency Switcher', 'brick' ),
        'id' => 'currencyswitcher',
        'description' => esc_html__( 'Widgets in this area will be shown on top cart dorpdown.', 'brick' ),
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	    ) );
	 register_sidebar( array(
        'name' => esc_html__( 'Language Switcher', 'brick' ),
        'id' => 'langswitcher',
        'description' => esc_html__( 'Widgets in this area will be shown on top language dorpdown.', 'brick' ),
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	    ) );
	}

 function brick_global_variables(){
        global $brick_option, $woocommerce, $post, $product,$wp_query, $query_string;
    }


class brick_walker_nav_menu extends Walker_Nav_Menu {
  
// add classes to ul sub-menus
function brick_start_lvl( &$output, $depth = 0, $args = array()) {
    // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        'dropdown-menu',
        ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
        ( $display_depth >=2 ? 'dropdown-menu' : '' ),
        'menu-depth-' . $display_depth
        );
    $class_names = implode( ' ', $classes );
  
    // build html
    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}
  
// add main/sub classes to li's and links
  function brick_start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    global $wp_query;
    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
  
    // depth dependent classes
    $depth_classes = array(
        ( $depth == 0 ? 'dropdown main-menu-item' : 'dropdown sub-menu-item' ),
        ( $depth >=2 ? 'dropdown' : '' ),
        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        'menu-item-depth-' . $depth
    );
    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  
    // passed classes
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
  
    // build html
    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
  
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
  
    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
    );
  
    // build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}
}


function brick_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}



function brick_styles_method() {
	 $brick_option  = get_option('brick_option');  
	 $main_color = '#31bea3';
	 $pageheaderbg = '';
if (isset($brick_option)) {
	$main_color = $brick_option['color_accent'];  

	$pageheaderbg = $brick_option['pagebackground']['url'];
}


$rbghex = brick_hex2rgb($main_color);

    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/css/custom-css.css'
    );
        $main_color = '#31BEA3';
       
         
        $custom_css = '.woocommerce-message:before {
    
    color: '.esc_html($main_color).';
}
        .woocommerce-message {
    border-top-color: '.esc_html($main_color).';
}
        .woocommerce-info:before , .woocommerce ul.products li.product .price {
    color: '.esc_html($main_color).';
}
        .woocommerce-info {
    border-top-color: '.esc_html($main_color).';
}
        a{
	color: '.esc_html($main_color).';
}
.colored {
	color: '.esc_html($main_color).'!important;
}
/*header style 1*/
#header-style-1 .top-bar {
	background-color: '.esc_html($main_color).';
}
#header-style-1 .social-links a:hover {
	color: '.esc_html($main_color).';
}
#header-style-1 .sf-menu li:hover > a,
#header-style-1 .sf-menu li a:hover {
	color: '.esc_html($main_color).';
}
#header-style-1 .sf-menu > li.sfHover > a::before,
#header-style-1 .sf-menu > li > a:hover::before {
	border-top: 5px solid '.esc_html($main_color).';
}
/*header style 1*/

/*header style 2*/
#header-style-2 .main-menu {
	background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.5);
}
#header-style-2 .logo , , .slicknav_menu .slicknav_icon-bar {
	background-color: '.esc_html($main_color).';
}

/*menu
======*/
#header-style-2 .sf-menu > li:hover {
	background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1);
}
#header-style-2 .sf-menu li ul li {
	background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.5);
}
#header-style-2 .sf-menu li ul li:hover {
	background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1);
}
/*header style 2*/

/*revolution slider dots*/
#header-style-2 .zeus .tp-bullet::after {
	background-color: '.esc_html($main_color).';
}
#header-style-2 .zeus .tp-bullet.selected,
#header-style-2 .zeus .tp-bullet:hover,
#header-style-2 .zeus .tp-bullet:focus {
	border-color: '.esc_html($main_color).';
}
/*revolution slider dots*/

/*teaser shortcode styles*/
.teaser .heading::before,
.teaser .heading::after {
	background: '.esc_html($main_color).';
}

/*hover
=======*/
.teaser:hover .heading , .teaser-style-3:hover .icon {
	color: '.esc_html($main_color).';
}
/*teaser shortcode styles*/

/*subscribe form*/
.subscribe.form-wrapper .subscribe-form-btn {
	background-color: '.esc_html($main_color).';
	border-color: '.esc_html($main_color).';
}
/*subscribe form*/

/*carousel with button outside common styles*/
.carousel-with-button-outside .carousel-nav .owl-prev:hover,
.carousel-with-button-outside .carousel-nav .owl-next:hover, .wpcf7-submit {
	background-color: '.esc_html($main_color).';
}
/*carousel with button outside common styles*/

/*trainer slider style 1 styles*/
.trainer-slider-style-1 .trainer-info .social-links a:hover {
	color: '.esc_html($main_color).';
}

/*product slider*/
.product-slider .product .rating .fa.marked {
	color: '.esc_html($main_color).';
}
.product-slider .product .flush-meta .sale {
	background-color: '.esc_html($main_color).';
}
.product-slider .product .price ins , ul.products.grid .product a {
	color: '.esc_html($main_color).';
}
/*product slider*/

/*footer*/
.footer-inverse .copyright a {
	color: '.esc_html($main_color).';
}
/*footer*/

/*teaser-style-2 styles*/
.teaser-style-2 .icon {
	background-color: '.esc_html($main_color).';
}
/*teaser-style-2 styles*/

/*gallery-slider-style-2*/
/*hover
=======*/
.gallery-slider-style-2 .gallery-item:hover .gallery-info span a {
	color: '.esc_html($main_color).';
}
/*gallery-slider-style-2*/

/*trainer slider style 2*/
.trainer-slider-style-2 .trainer-avatar .mask {
	background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.7);
}
.trainer-slider-style-2 .trainer {
	border-color: '.esc_html($main_color).';
}
.trainer-slider-style-2.modified .trainer:hover .trainer-info::after {
	box-shadow: 0 2px 0 '.esc_html($main_color).';
}
/*trainer slider style 2*/

/*testimonial-2*/
.testimonial-2-heading h1 .fa {
	color: '.esc_html($main_color).';
}
.testimonial-slider-style-2 .client-title .name {
	color: '.esc_html($main_color).';
}
/*testimonial-2*/

/*price tables*/
/*featured
==========*/
.price-tables.style-1 .featured .price-n-button {
	background-color: '.esc_html($main_color).';
}
.price-tables.style-1 .featured .price-n-button::before,
.price-tables.style-1 .featured .price-n-button::after {
	border-top-color: '.esc_html($main_color).';
}
.price-tables.style-1 .featured-text-content {
	background-color: '.esc_html($main_color).';
}
.price-tables.style-1 .featured-text-content::before,
.price-tables.style-1 .featured-text-content::after {
	border-bottom: 22px solid '.esc_html($main_color).';
}
.price-tables.style-1 .featured .price-n-button .price-table-btn {
	color: '.esc_html($main_color).';
}

/*hover
=======*/
.price-tables.style-1 .price-table:hover .price-n-button {
	background-color: '.esc_html($main_color).';
}
.price-tables.style-1 .price-table:hover .price-n-button::before,
.price-tables.style-1 .price-table:hover .price-n-button::after {
	border-top-color: '.esc_html($main_color).';
}
.price-tables.style-1 .price-table:hover .price-n-button .price-table-btn {
	color: '.esc_html($main_color).';
}
/*price tables*/

/*anything-slider-v1*/
.anything-slider-v1 .anything-wrapper .anything-large-btn {
	border: 2px solid '.esc_html($main_color).';
	color: '.esc_html($main_color).';
}
.anything-slider-v1 .anything-wrapper .anything-large-btn:hover {
	background-color: '.esc_html($main_color).';
}
/*anything-slider-v1*/

/*contact-widget
================*/
.contact-widget .table-cell.icon {
	color: '.esc_html($main_color).';
}

/*mailing-list
=============*/
.mailing-list .mailing-list-submit-btn {
	background-color: '.esc_html($main_color).';
}

/*header-style-3*/
#header-style-3 .top-bar {
	background-color: '.esc_html($main_color).';
}
#header-style-3 .top-content .left-side .icon {
	color: '.esc_html($main_color).';
}
#header-style-3 .top-content .header-top-widgets:hover > .text,
#header-style-3 .top-content .header-top-widgets:hover > .content > a,
#header-style-3 .top-content .header-top-widgets:hover > .content {
	color: '.esc_html($main_color).';
}
#header-style-3 .top-content .quick-search-icon:hover,
#header-style-3 .top-content .quick-search-input:hover ~ .quick-search-icon,
#header-style-3 .top-content .quick-search-input:focus ~ .quick-search-icon {
	color: '.esc_html($main_color).';
}

/*language switcher
==================*/
.language-switcher .btn {
	color: '.esc_html($main_color).';
}
.language-switcher.open .btn,
.language-switcher.open .btn:hover,
.language-switcher.open .btn:active,
.language-switcher.open .btn:focus,
.language-switcher .btn:hover,
.language-switcher .btn:active,
.language-switcher .btn:focus {
	color: '.esc_html($main_color).';
}
.language:hover .language-switcher .btn .bs-caret .caret::after {
	color: '.esc_html($main_color).';
}

/*main-menu
===========*/
#header-style-3 .sf-menu li:hover > a,
#header-style-3 .sf-menu li a:hover {
	color: '.esc_html($main_color).';
}
#header-style-3 .sf-menu > li.sfHover > a::before,
#header-style-3 .sf-menu > li > a:hover::before {
	border-top: 5px solid '.esc_html($main_color).';
}

/*location n time
=================*/
#header-style-3 .contact-n-time a {
	color: '.esc_html($main_color).';
}
/*header-style-3*/

/*teaser-style-3*/
.teaser-style-3:hover {
	background-color: '.esc_html($main_color).';
}
.teaser-style-3 .icon {
	background-color: '.esc_html($main_color).';
}
/*teaser-style-3*/

/*get started parallax section*/
#get-started h1 {
	color: '.esc_html($main_color).';
}
/*get started parallax section*/

/*our-studio*/
.simple-flex-slider .flex-direction-nav a:hover {
	background-color: '.esc_html($main_color).';
}
/*our-studio*/

/*promo box*/
.promo-box .promo-content .promo-btn:hover {
	background-color: '.esc_html($main_color).';
	border-color: '.esc_html($main_color).';
}
/*promo box*/

/*gallery-slider-style-3*/
.gallery-slider-style-3 .mask {
	background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.7);
}

/*nav
======*/
.gallery-slider-style-3-wrapper .gallery-slider-nav .owl-prev:hover,
.gallery-slider-style-3-wrapper .gallery-slider-nav .owl-next:hover {
	background-color: '.esc_html($main_color).';
}
/*gallery-slider-style-3*/

/*button-styles*/
.btn-large-style-1:hover {
	background-color: '.esc_html($main_color).';
	border-color: '.esc_html($main_color).';
}

.btn-large-style-2 {
	background-color: '.esc_html($main_color).';
	box-shadow: 0 4px #b55b08;
}
.btn-large-style-2:hover {
	box-shadow: 0 2px #b55b08;
}
/*button-styles*/

/*single trainer normal styles*/
.trainer.normal-style:hover .trainer-avatar a {
	border-color: '.esc_html($main_color).';
}
/*single trainer normal styles*/

/*well-button-large.style-2*/
.well-button-large.style-2 {
	background-color: '.esc_html($main_color).';
	border-color: '.esc_html($main_color).';
}
/*well-button-large.style-2*/

/*blog-post-slider-v2-wrapper*/
.blog-post-slider-v2-wrapper-with-nav .nav-container .prev:hover,
.blog-post-slider-v2-wrapper-with-nav .nav-container .next:hover {
	background-color: '.esc_html($main_color).';
}
/*blog-post-slider-v2-wrapper*/

/*tweetie slider*/
.tweetie .tweeter-icon .fa:hover {
	background-color: '.esc_html($main_color).';
	color: #fff;
}
.tweeter-slider a {
	color: '.esc_html($main_color).';
}
/*tweetie slider*/

/*header-style-4*/
#header-style-4 .top-content a:hover {
	color: '.esc_html($main_color).';
}
#header-style-4 .top-content .left-widget:hover .icon,
#header-style-4 .top-content .left-widget:hover .text,
#header-style-4 .top-content .left-widget:hover .content,
#header-style-4 .top-content .left-widget:hover .content a {
	color: '.esc_html($main_color).';
	border-color: '.esc_html($main_color).';
}
#header-style-4 .top-content .header-top-menu > ul > li > a:hover {
	color: '.esc_html($main_color).';
}
#header-style-4 .top-content .brselect > .btn:hover {
	color: '.esc_html($main_color).';
}
#header-style-4 .cart-wrapper a .cart-content {
	color: '.esc_html($main_color).';
}
#header-style-4 .search-wrapper a:hover,
#header-style-4 .search-wrapper.open a {
	color: '.esc_html($main_color).';
}
/*header-style-4*/

/*rev slider for header style 4*/
.slider-large-rounded-button-style-2 {
	background-color: '.esc_html($main_color).';
}
/*rev slider for header style 4*/

/*teaser-style-4*/
.teaser-style-4 .icon {
	border: 2px solid '.esc_html($main_color).';
	color: '.esc_html($main_color).';
}
/*teaser-style-4*/

/*big banner*/
.big-banner .list-style-with-icon-1 li::before {
	background-color: '.esc_html($main_color).';
}
/*big banner*/

/*promo box style-2*/
.promo-box-style-2 .promo-btn {
	background-color: '.esc_html($main_color).';
}
/*promo box style-2*/

/*promo box style-3*/
.promo-box-style-3 .promo-btn:hover {
	background-color: '.esc_html($main_color).';
}
/*promo box style-3*/

/*slogan*/
#slogan .parallax {
	background-color: '.esc_html($main_color).';
}
/*slogan*/

/*trainer-slider-style-3*/
.trainer-slider-style-3 .trainer {
	box-shadow: 0 15px '.esc_html($main_color).';
}
.trainer-slider-style-3 .social-links a:hover {
	color: '.esc_html($main_color).';
}
/*trainer-slider-style-3*/

/*quick contact*/
.quick-contact-submit {
	background-color: '.esc_html($main_color).';
}
.quick-contact input.form-control:hover,
.quick-contact input.form-control:focus,
.quick-contact textarea.form-control:hover,
.quick-contact textarea.form-control:focus {
	border-color: '.esc_html($main_color).';
}
/*quick contact*/

/*header-style-5*/
#header-style-5 .top-content a:hover {
	color: '.esc_html($main_color).';
}
#header-style-5 .top-content .left-widget:hover .icon,
#header-style-5 .top-content .left-widget:hover .content,
#header-style-5 .top-content .left-widget:hover .content a {
	color: '.esc_html($main_color).';
}
#header-style-5 .top-content .brselect > .btn:hover {
	color: '.esc_html($main_color).';
}

/*main-menu
===========*/
#header-style-5 .sf-menu li:hover > a,
#header-style-5 .sf-menu li a:hover {
	color: '.esc_html($main_color).';
}
#header-style-5 .sf-menu > li.sfHover > a,
#header-style-5 .sf-menu > li > a:hover {
	color: '.esc_html($main_color).';
}

/*search form and cart icon
===========================*/
#header-style-5 .search-wrapper .dropdown-handler:hover,
#header-style-5 .search-wrapper.open .dropdown-handler {
	color: '.esc_html($main_color).';
}
/*header-style-5*/

/*teaser-style-5*/
.teaser-style-5:hover .icon {
	background-color: '.esc_html($main_color).';
	border-color: '.esc_html($main_color).';
}
.teaser-style-5 .teaser-content .heading::after {
	background-color: '.esc_html($main_color).';
}
/*teaser-style-5*/

/*list-style-with-icon-2*/
.list-style-with-icon-2 ul li::before {
	color: '.esc_html($main_color).';
}
/*list-style-with-icon-2*/

/*why choose*/
/*small btn
==========*/
.small-btn-colored {
	box-shadow: 0 2px '.esc_html($main_color).';
	background-color: '.esc_html($main_color).';
}
/*why choose*/

/*gallery-slider-style-4*/
/*hover style
=============*/
.gallery-slider-style-4 .gallery-item:hover .mask {
	background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.7);
}

/*nav
=====*/
.full-width-carousel .gallery-style-5-nav .owl-prev:hover,
.full-width-carousel .gallery-style-5-nav .owl-next:hover {
	background-color: '.esc_html($main_color).';
}
/*gallery-slider-style-4*/

/*counter styles*/
.counter-item .image::after {
	background-color: '.esc_html($main_color).';
}
/*counter styles*/

/*counter-item-style-2*/
.counter-item-style-2 .image {
	border: 1px solid '.esc_html($main_color).';
}
.counter-item-style-2:hover .image .inner {
	border-color: '.esc_html($main_color).';
}
/*counter-item-style-2*/

/*blog-posts-list-view*/
.blog-posts-list-view .post-content.hovered h3::after {
	background-color: '.esc_html($main_color).';
}
.blog-posts-list-view .link-to-post {
	background-color: '.esc_html($main_color).';
}

/*hover
=======*/
.blog-slider-style-2 .post-format {
	background-color: '.esc_html($main_color).';
}
/*blog-posts-list-view*/

/*price-table-style-2*/
/*featured
==========*/
.price-tables.style-2 .featured .title,
.price-tables.style-2 .featured .price-table-btn {
	background-color: '.esc_html($main_color).';
}
.price-tables.style-2 .price-table:hover .title,
.price-tables.style-2 .price-table:hover .price-table-btn {
	background-color: '.esc_html($main_color).';
}
/*price-table-style-2*/

/*footer-with-bg*/
.footer-with-bg .with-right-circle::before {
	border: 1px solid '.esc_html($main_color).';
}
@keyframes circleblink {
	0% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1)
	}
	50% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.5)
	}
	100% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1)
	}
}
@-webkit-keyframes circleblink {
	0% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1)
	}
	50% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.5)
	}
	100% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1)
	}
}
@-moz-keyframes circleblink {
	0% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1)
	}
	50% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.5)
	}
	100% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1)
	}
}
@-o-keyframes circleblink {
	0% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1)
	}
	50% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.5)
	}
	100% {
		background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 1)
	}
}
.footer-with-bg .bottom .copyright a {
	color: '.esc_html($main_color).';
}
/*footer-with-bg*/

/*header-style-9*/
#header-style-9 .top-content {
	background-color: '.esc_html($main_color).';
}

/*main-menu
===========*/
#header-style-9 .main-menu .sf-menu > li > a::after {
	border-top: 3px solid '.esc_html($main_color).';
}
#header-style-9 .sf-menu li:hover > a,
#header-style-9 .sf-menu li a:hover {
	color: '.esc_html($main_color).';
}
#header-style-9 .sf-menu > li.sfHover > a,
#header-style-9 .sf-menu > li > a:hover {
	color: '.esc_html($main_color).';
}

/*sub-menu
==========*/
#header-style-9 .main-menu .sub-menu .nav li a:hover {
	background-color: transparent;
	color: '.esc_html($main_color).';
}

/*switcher
==========*/
#header-style-9 .main-menu .sub-menu .switcher .brselect > .btn:hover {
	color: '.esc_html($main_color).';
	border-color: '.esc_html($main_color).';
}

/*mini shop
===========*/
#header-style-9 .main-menu .mini-shop:hover,
#header-style-9 .main-menu .mini-shop:hover .shopping-bag,
#header-style-9 .main-menu .mini-shop:hover .item,
#header-style-9 .main-menu .open .mini-shop,
#header-style-9 .main-menu .open .mini-shop .shopping-bag,
#header-style-9 .main-menu .open .mini-shop .item {
	background-color: '.esc_html($main_color).';
}

/*cart-n-search
==============*/
#header-style-9 .cart-n-search .dropdown-handler:hover {
	background-color: '.esc_html($main_color).';
}
/*header-style-9*/

/*offer-box*/
.offer-box .offer-btn {
	background-color: '.esc_html($main_color).';
}
/*offer-box*/

/*teaser-style-7*/
.teaser-style-7 .icon {
	background-color: '.esc_html($main_color).';
}
/*teaser-style-7*/

/*shop-footer*/
/*about-us widget
=================*/
#shop-footer .social-link-table:hover .icon .fa {
	background-color: '.esc_html($main_color).';
}
.read-more {
	color: '.esc_html($main_color).';
}
.read-more:hover {
	color: '.esc_html($main_color).';
}

/*product-list
==============*/
.widget.products-list .single-product .product-image-wrapper .mask {
	background-color: rgba('.$rbghex[0].', '.$rbghex[0].', '.$rbghex[0].', 0.7);
}
.widget.products-list .single-product .product-info .rating .marked {
	color: '.esc_html($main_color).';
}
.widget.products-list .single-product .product-info .price ins {
	color: '.esc_html($main_color).';
}

/*footer-copyright
=================*/
#shop-footer .footer-copyright .copyright a {
	color: '.esc_html($main_color).';
}
#shop-footer .footer-copyright .footer-menu li a:hover {
	color: '.esc_html($main_color).';
}
/*shop-footer*/

/*header-style-6*/
#header-style-6 .top-content span.content,
#header-style-6 .top-content span.content a {
	color: '.esc_html($main_color).';
}
#header-style-6 .top-content .header-top-menu a:hover,
#header-style-6 .top-content .header-top-menu a:visited,
#header-style-6 .top-content .header-top-menu a:focus {
	color: '.esc_html($main_color).';
}
#header-style-6 .top-content .header-top-menu ul ul li a:hover {
	color: '.esc_html($main_color).';
}
#header-style-6 .top-content .brselect.open > .btn,
#header-style-6 .top-content .brselect > .btn:hover,
#header-style-6 .top-content .brselect > .btn:focus,
#header-style-6 .top-content .brselect > .btn:active {
	color: '.esc_html($main_color).';
}
#header-style-6 .top-content .brselect .dropdown-menu a:hover {
	color: '.esc_html($main_color).';
}

/*yamn menu
===========*/
#header-style-6 .main-menu .yamm .nav > li.open > a,
#header-style-6 .main-menu .yamm .nav > li.dropdown:hover > a,
#header-style-6 .main-menu .yamm .nav > li > a:hover,
#header-style-6 .main-menu .yamm .nav > li > a:focus,
#header-style-6 .main-menu .yamm .nav > li > a:active {
	color: '.esc_html($main_color).';
}
#header-style-6 .main-menu .yamm .nav .yamm-content ul li a:hover {
	color: '.esc_html($main_color).';
}
#header-style-6 .main-menu .search-button:hover,
#header-style-6 .main-menu .search-input:hover ~ .search-button,
#header-style-6 .main-menu .search-input:focus ~ .search-button {
	color: '.esc_html($main_color).';
}

/*mini-cart
===========*/
.cart-wrapper .total .amount {
	color: '.esc_html($main_color).';
}
.cart-wrapper .button:hover {
	background-color: '.esc_html($main_color).';
	border-color: '.esc_html($main_color).';
}
#header-style-6 .main-menu .cart-wrapper .cart-content {
	background-color: '.esc_html($main_color).';
}
/*header-style-6*/

/*header-style-7*/
/*menu
======*/
#header-style-7 .sf-menu > li.active > a {
	box-shadow: 0 3px '.esc_html($main_color).';
}
/*header-style-7*/

/*header-style-8*/
#header-style-8 .top-bar , #mc_embed_signup input[type="submit"] {
	background-color: '.esc_html($main_color).';
}
#header-style-8 .left-widget .top:hover {
	color: '.esc_html($main_color).'!important;
}
#header-style-8 .left-widget .bottom .nav li a:hover,
#header-style-8 .left-widget .bottom .nav li a:focus {
	color: '.esc_html($main_color).';
}
#header-style-8 .right-widget .left-content .top .search-submit:hover,
#header-style-8 .right-widget .left-content .top .search-input:hover ~ .search-submit,
#header-style-8 .right-widget .left-content .top .search-input:focus ~ .search-submit {
	color: '.esc_html($main_color).';
}
#header-style-8 .right-widget .right-content .cart-wrapper.open .cart-handler span,
#header-style-8 .right-widget .right-content .cart-handler:hover span {
	color: '.esc_html($main_color).';
}

/*bootstrap select
==================*/
#header-style-8 .right-widget .brselect.open > .btn,
#header-style-8 .right-widget .brselect > .btn:hover,
#header-style-8 .right-widget .brselect > .btn:focus,
#header-style-8 .right-widget .brselect > .btn:active {
	color: '.esc_html($main_color).';
}

/*menu
======*/
#header-style-8 .main-menu .sf-menu ul li a:hover {
	color: '.esc_html($main_color).';
}
#header-style-8 .sf-menu li:hover > a,
#header-style-8 .sf-menu li a:hover {
	color: '.esc_html($main_color).';
}
#header-style-8 .sf-menu > li.sfHover > a,
#header-style-8 .sf-menu > li > a:hover {
	color: '.esc_html($main_color).';
}
/*header-style-8*/

/*header-style-10*/
#header-style-10 .header-top-widgets .sign-in:hover,
#header-style-10 .header-top-widgets .sign-in:hover a {
	color: '.esc_html($main_color).';
}

/*menu
======*/
#header-style-10 .main-menu .sf-menu ul {
	box-shadow: 0 -3px '.esc_html($main_color).';
}
#header-style-10 .sf-menu > li.active > a::after {
	background-color: '.esc_html($main_color).';
}
/*header-style-10*/

/*mobile-menu*/
.mobile-menu-wrapper .menu-trigger .trigger {
	color: '.esc_html($main_color).';
}
.mobile-menu-wrapper .responsive-menu-wrapper {
	background-color: rgba('.$rbghex[0].', '.$rbghex[1].', '.$rbghex[2].', 0.9);
}
/*mobile-menu*/

/*breadcrumb*/
.breadcrumb-wrapper {
	background-color: '.esc_html($main_color).';
}
/*breadcrumb*/

/*products loop*/
ul.products.grid .product .onsale {
	background-color: '.esc_html($main_color).';
}
ul.products.grid .product .star-rating .marked {
	color: '.esc_html($main_color).';
}
ul.products.grid .product span.price ins {
	color: '.esc_html($main_color).';
}
ul.products.grid .product .quick-view {
	background-color: rgba('.$rbghex[0].', '.$rbghex[1].', '.$rbghex[2].', 0.8);
}
ul.products .product .quick-view{
	background-color: rgba('.$rbghex[0].', '.$rbghex[1].', '.$rbghex[2].', 0.8);
}
ul.products.grid .product .quick-view:hover {
	background-color: rgba('.$rbghex[0].', '.$rbghex[1].', '.$rbghex[2].', 0.8);
}
ul.products .product .quick-view:hover{
	background-color: rgba('.$rbghex[0].', '.$rbghex[1].', '.$rbghex[2].', 0.8);
}
/*list style product
===================*/
ul.products.list .product .onsale {
	background-color: '.esc_html($main_color).';
}
/*products loop*/

/*woocommerce pagination*/
.woocommerce-pagination li .page-numbers:hover {
	background-color: '.esc_html($main_color).';
}
.woocommerce-pagination li .current {
	background-color: '.esc_html($main_color).';
}
.pagination li .page-numbers:hover {
	background-color: '.esc_html($main_color).';
}
.pagination li a:hover {
	background-color: '.esc_html($main_color).';
}
.pagination li .current {
	background-color: '.esc_html($main_color).';
}
/*woocommerce pagination*/

/*single-product*/
.woocommerce .price ins {
	color: '.esc_html($main_color).';
}
.woocommerce .woocs_price_code ins {
	color: '.esc_html($main_color).';
}
.woocommerce .star-rating .marked {
	color: '.esc_html($main_color).';
}
.woocommerce .woocommerce-review-link {
	color: '.esc_html($main_color).';
}
.woocommerce .stock span {
	background-color: '.esc_html($main_color).';
}
.woocommerce .wishlist {
	background-color: '.esc_html($main_color).';
}
.woocommerce .product-details .add-to-cart {
	background-color: '.esc_html($main_color).';
}

/*tabs
=====*/
.woocommerce .woocommerce-tabs ul.tabs > li.active > a {
	background-color: '.esc_html($main_color).' !important;
	color:#fff !important;
}
.woocommerce .shop-table td.product-subtotal,
.woocommerce .shop-table td.product-price {
	color: '.esc_html($main_color).';
}
/*single-product*/

/*shopping cart*/
.woocommerce .shop-table .input-group-btn-vertical .bootstrap-touchspin-down {
	background-color: '.esc_html($main_color).';
}
.woocommerce .shop-table .cart-btn:hover,
.woocommerce .shop-table .cart-btn.active {
	background-color: '.esc_html($main_color).';
}
.woocommerce .shop-table .update .total-shipping .column-2,
.woocommerce .shop-table .update .total-price .column-2 {
	color: '.esc_html($main_color).';
}
.woocommerce .shop-table .update .grand-total .column-2 {
	color: '.esc_html($main_color).';
}
/*shopping cart*/

/*radio*/
.brick-radio-wrapper label::after {
	background-color: '.esc_html($main_color).';
}
/*radio*/

/*checkbox*/
.brick-checkbox-wrapper label::after {
	color: '.esc_html($main_color).';
}
/*checkbox*/

/*checkout*/
.woocommerce.checkout .checkout-header .number.number-colored {
	background-color: '.esc_html($main_color).';
}
.woocommerce.checkout .checkout-header .open {
	background-color: '.esc_html($main_color).';
}
.checkout-btn {
	background-color: '.esc_html($main_color).';
}
.woocommerce.checkout .form-row label.important::after {
	color: '.esc_html($main_color).';
}
.woocommerce.checkout .form-row input[type="text"]:hover,
.woocommerce.checkout .form-row input[type="text"]:focus,
.woocommerce.checkout .form-row input[type="email"]:hover,
.woocommerce.checkout .form-row input[type="email"]:focus,
.woocommerce.checkout .form-row textarea:hover,
.woocommerce.checkout .form-row textarea:focus,
.woocommerce.checkout .form-row select:hover,
.woocommerce.checkout .form-row select:focus {
	border-color: '.esc_html($main_color).';
}
.woocommerce.checkout .lost-password {
	color: '.esc_html($main_color).';
}
/*checkout*/

/*gallery*/
/*hover
=======*/
.gallery-archive-style-6 .gallery-item:hover .gallery-info span a {
	color: '.esc_html($main_color).';
}

/*nav
=====*/
.gallery-filter-nav ul li button:hover,
.gallery-filter-nav ul li button.active {
	background-color: '.esc_html($main_color).';
}
.gallery-filter-view-all-btn {
	background-color: '.esc_html($main_color).';
}
/*gallery*/

/*blog-sidebar*/
.blog-sidebar .widget-title {
	color: '.esc_html($main_color).';
}

/*search-widget
===============*/
.search-widget::before {
	background-color: '.esc_html($main_color).';
}
.search-widget .fa {
	background-color: '.esc_html($main_color).';
	border: 1px solid '.esc_html($main_color).';
}

/*category-widget
================*/
.category-widget .categories li a:hover {
	background-color: '.esc_html($main_color).';
	border-color: '.esc_html($main_color).';
}

/*gallery-widget
===============*/
.gallery-widget .single-item .mask {
	background-color: rgba('.$rbghex[0].', '.$rbghex[1].', '.$rbghex[2].', 0.95);
}

/*tags-widget
=============*/
.tags-widget a:hover {
	background-color: '.esc_html($main_color).';
}
/*blog-sidebar*/

/*single-blog*/
.single-blog .post-format {
	background-color: '.esc_html($main_color).';
}
.single-blog blockquote {
	border-color: '.esc_html($main_color).';
}

/*post-navigation
=================*/
.single-blog .post-navigation a {
	background-color: '.esc_html($main_color).';
}

/*comments
==========*/
.single-blog #comments .hexagon {
	background-color: '.esc_html($main_color).';
}
.single-blog #comments .hexagon::before {
	border-bottom: 15px solid '.esc_html($main_color).';
}
.single-blog #comments .hexagon::after {
	border-top: 15px solid '.esc_html($main_color).';
}
.single-blog #comments ul.comments .single-comment::before {
	background-color: '.esc_html($main_color).';
}
.single-blog #comments ul.comments .single-comment .avatar {
	border: 1px solid '.esc_html($main_color).';
}
.single-blog #comments ul.comments .single-comment .text .top .reply-link a , 
.woocommerce .star-rating span {
	color: '.esc_html($main_color).';
}

/*leave comment form
====================*/
.single-blog .leave-comment .submit input , .comment-form input[type=submit] , .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, 
.woocommerce input.button.alt:hover , .woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt ,
.single_add_to_cart_button.alt , .woocommerce span.onsale{
	background-color: '.esc_html($main_color).' !important;
}

/*hover
======*/
.single-blog .leave-comment .name input:focus,
.single-blog .leave-comment .name input:hover,
.single-blog .leave-comment .email input:focus,
.single-blog .leave-comment .email input:hover,
.single-blog .leave-comment .website input:focus,
.single-blog .leave-comment .website input:hover,
.single-blog .leave-comment .comment textarea:focus,
.single-blog .leave-comment .comment textarea:hover {
	border-color: '.esc_html($main_color).';
}
/*single-blog*/

/*blog-posts 2 column*/
.blog-posts-2-cols .post-format {
	background-color: '.esc_html($main_color).';
}
/*blog-posts 2 column*/

/*blog-posts single column*/
.blog-posts-1-col .post-format {
	background-color: '.esc_html($main_color).';
}
/*blog-posts single column*/

/*classes-archive*/
.classes-archive .single-class .title {
	background-color: '.esc_html($main_color).';
}
.classes-archive .single-class .bottom-line {
	background-color: '.esc_html($main_color).';
}
/*classes-archive*/

/*single-class-detail*/
.single-class-detail .small-title {
	background-color: '.esc_html($main_color).';
}
.single-class-detail .bottom-line {
	background-color: '.esc_html($main_color).';
}
.check-classes {
	background-color: '.esc_html($main_color).';
}
/*single-class-detail*/

/*trainer-slider-style-4*/
.trainer-slider-style-4 .trainer .trainer-info h4::after {
	background-color: '.esc_html($main_color).';
}
/*trainer-slider-style-4*/

/*team-member-details*/
.team-member-details .social-links a:hover {
	background-color: '.esc_html($main_color).';
}
.check-classes.style-2:hover {
	background-color: '.esc_html($main_color).';
}
/*team-member-details*/

/*page-not-found*/
.page-not-found .not-found-btn {
	background-color: '.esc_html($main_color).';
}
/*page-not-found*/

/*coming soon page*/
.coming-soon .notify {
	background-color: '.esc_html($main_color).';
}
.coming-soon .email-input {
	border: 1px solid '.esc_html($main_color).';
}
.coming-soon .submit {
	background-color: '.esc_html($main_color).';
}

/*countdown
===========*/
.countdown-row .countdown-amount {
	color: '.esc_html($main_color).';
}
/*coming soon page*/

/*select locations*/
/*services
==========*/
.location-services .service .fa {
	color: '.esc_html($main_color).';
}
/*select locations*/

/*contact us page*/
.contact-page-detail-bg {
	background-color: '.esc_html($main_color).';
}
.contact-page .colored {
	color: '.esc_html($main_color).' !important;
}
.quick-discuss .form-control:hover,
.quick-discuss .form-control:focus {
	border-color: '.esc_html($main_color).';
}
.location-details-style-2 .separator {
	background-color: '.esc_html($main_color).';
}
/*contact us page*/

/*bmi calculator*/
.man-woman-buttons .bmi-gender-btn.active {
	box-shadow: 0 -4px '.esc_html($main_color).';
}
.bmi-calculator-submit {
	background-color: '.esc_html($main_color).';
}
.bmi-form .tooltipster {
	color: '.esc_html($main_color).';
}
/*bmi calculator*/

/*timetable-plugin*/
/*navigation
============*/
#page-content .tabs_box_navigation.sf-timetable-menu .tabs_box_navigation_selected {
	border-color: '.esc_html($main_color).' !important;
}
#page-content .tabs_box_navigation.sf-timetable-menu .tabs_box_navigation_selected {
	background-color: '.esc_html($main_color).' !important
}
#page-content .sf-timetable-menu li ul li a:hover,
#page-content .sf-timetable-menu li ul li.selected a:hover {
	background-color: '.esc_html($main_color).' !important;
}
#page-content .tt_tabs_navigation li a:hover,
#page-content .tt_tabs_navigation li a.selected,
#page-content .tt_tabs_navigation li.ui-tabs-active a {
	border-color: '.esc_html($main_color).' !important;
}
/*event_layout_6
================*/
.event_layout_6 .tt_timetable tbody tr .tt_hours_column {
	background-color: #f5a65d;
}
.event_layout_6 .tt_timetable .event-layout-6.even {
	background-color: '.esc_html($main_color).';
}
.event_layout_6 .tt_timetable .event-layout-6.odd {
	background-color: #f5a65d;
}
.event_layout_6 .tt_timetable .empty.even {
	background-color: '.esc_html($main_color).';
}
.event_layout_6 .tt_timetable .empty.odd {
	background-color: #f5a65d;
}

/*event_layout_7
================*/
.event_layout_7 .tt_timetable tbody tr .colored-bg {
	background-color: '.esc_html($main_color).' !important;
}

/*event_layout_3
================*/
.event_layout_3 .tt_timetable .colored-bg {
	background-color: '.esc_html($main_color).' !important;
}

/*event_layout_4
================*/
.event_layout_4 .tt_timetable .hours {
	color: '.esc_html($main_color).' !important;
}
.event_layout_4 .tt_timetable .colored-bg {
	background-color: '.esc_html($main_color).' !important;
}
/*timetable-plugin*/

/*simple owl slider*/
.simple-owl-slider-wrapper .slider-nav .owl-prev:hover,
.simple-owl-slider-wrapper .slider-nav .owl-next:hover , {
	background-color: '.esc_html($main_color).';
}
/*simple owl slider*/

/*color switcher*/
.color-switcher-wrapper {
	border: 1px solid '.esc_html($main_color).';
}
.color-switcher-wrapper .trigger {
	color: '.esc_html($main_color).';
}
/*color switcher*/

/*blog-slider*/
.blog-slider .blog-post-thumbnail .mask {
	background-color: '.esc_html($main_color).';
}
/*blog-slider*/
';

 wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'brick_styles_method' );  


function brick_breadcrumbs() {

        /* === OPTIONS === */
        $text['home']     = esc_html__('Home','brick'); // text for the 'Home' link
        $text['category'] = esc_html__('Archive by Category "%s"','brick'); // text for a category page
        $text['search']   = esc_html__('Search Results for "%s" Query','brick'); // text for a search results page
        $text['tag']      = esc_html__('Posts Tagged "%s"','brick'); // text for a tag page
        $text['author']   = esc_html__('Articles Posted by %s','brick'); // text for an author page
        $text['404']      = esc_html__('Error 404','brick'); // text for the 404 page

        $show_current   = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show
        $show_on_home   = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
        $show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
        $show_title     = 1; // 1 - show the title for the links, 0 - don't show
        $delimiter      = '<span class="separator"> / </span>'; // delimiter between crumbs
        $before         = '<span class="current">'; // tag before the current crumb
        $after          = '</span>'; // tag after the current crumb
        /* === END OF OPTIONS === */

        global $post;
        $home_link    = esc_url(home_url('/'));
        $link_before  = '<span class="separator">  /  </span><span typeof="v:Breadcrumb"> ';
        $link_after   = '</span> ';
        $link_attr    = ' rel="v:url" property="v:title"';
        $link         = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
        
        if (get_post_type() == 'post' || get_post_type() == 'page') {
            $parent_id    = $parent_id_2 = $post->post_parent;
        }

        $frontpage_id = get_option('page_on_front');

        if (is_home() || is_front_page()) {

            if ($show_on_home == 1) {echo '<a href="' . $home_link . '">' . $text['home'] . '</a>';}

        } else {

            if ($show_home_link == 1) {
                echo '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a>';
            }

            if ( is_category() ) {
                $this_cat = get_category(get_query_var('cat'), false);
                if ($this_cat->parent != 0) {
                    $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
                    if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                    $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                    $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                    if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                    echo wp_kses($cats, array('a'=>array('href'=> array(), 'title'=>array())) );
                }
                if ($show_current == 1) echo wp_kses($before , array('span'=>array('class'=> array())) ) . sprintf($text['category'], single_cat_title('', false)) . $after;

            } elseif ( is_search() ) {
                echo wp_kses($before , array('span'=>array('class'=> array())) ) . sprintf($text['search'], get_search_query()) . $after;

            } elseif ( is_day() ) {
                echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
                echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
                echo wp_kses($before , array('span'=>array('class'=> array())) ) . get_the_time('d') . $after;

            } elseif ( is_month() ) {
                echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
                echo wp_kses($before , array('span'=>array('class'=> array())) ) . get_the_time('F') . $after;

            } elseif ( is_year() ) {
                echo wp_kses($before , array('span'=>array('class'=> array())) ) . get_the_time('Y') . $after;

            } elseif ( is_single() && !is_attachment() ) {
                if ( get_post_type() != 'post' ) {
                    $post_type = get_post_type_object(get_post_type());
                    $slug = $post_type->rewrite;
                    $label = $post_type->labels->singular_name;
                    if ($slug['slug'] == 'product') {
                        global $brick_option;
                        $label     = esc_html__('Shop','brick');
                        if (isset($GLOBALS['brick_option']['shop-title']) && !empty($GLOBALS['brick_option']['shop-title'])){
                            $label = esc_attr($GLOBALS['brick_option']['shop-title']);
                        }
                        echo '<span class="separator"> &nbsp/&nbsp </span><span><a rel="v:url" property="v:title" href="'.get_permalink( woocommerce_get_page_id( 'shop' ) ).'">'.$label.'</a></span>';
                    } else {
                        printf($link, $home_link . $slug['slug'] . '/', $label); 
                    }
                    if ($show_current == 1) echo wp_kses($delimiter , array('span'=>array('class'=> array())) ) . $before . get_the_title() . $after;
                } else {
                    $cat = get_the_category(); $cat = $cat[0];
                    $cats = get_category_parents($cat, TRUE, $delimiter);
                    if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                    $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                    $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                    if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                    echo wp_kses($cats, array('a'=>array('href'=> array(), 'title'=>array())) );
                    if ($show_current == 1)  echo wp_kses($before , array('span'=>array('class'=> array())) ) . get_the_title() . $after;
                }

            } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {

                if (class_exists('brick')){

                    if (is_product_category() || is_product_tag()) {
                        global $brick_option;
                        $label     = esc_html__('Shop','brick');
                        if (isset($GLOBALS['brick_option']['shop-title']) && !empty($GLOBALS['brick_option']['shop-title'])){
                            $label = esc_attr($GLOBALS['brick_option']['shop-title']);
                        }
                        echo '<span class="separator"> &nbsp/&nbsp </span><span><a rel="v:url" property="v:title" href="'.get_permalink( woocommerce_get_page_id( 'shop' ) ).'">'.$label.'</a></span>';
                        echo '<span class="separator">&nbsp /&nbsp </span><span>'.single_cat_title("", false).'</span>';
                    } elseif(is_shop()) {
                        $label     = esc_html__('Shop','brick');
                       echo wp_kses($delimiter , array('span'=>array('class'=> array())) ); echo wp_kses($before , array('span'=>array('class'=> array())) ) . $label . $after;
                    } else {

                        if (is_tax()) {
                           echo wp_kses($before , array('span'=>array('class'=> array())) ) . single_cat_title("", false) . $after;
                        } else {
                            $post_type = get_post_type_object(get_post_type());
                            $slug = $post_type->rewrite;
                            $label = $post_type->labels->singular_name;
                            echo wp_kses($delimiter , array('span'=>array('class'=> array())) );echo wp_kses($before , array('span'=>array('class'=> array())) ) . $label . $after;  
                        }
                    }
                   
                } else {

                    if (is_tax()) {
                       echo wp_kses($before , array('span'=>array('class'=> array())) ) . single_cat_title("", false) . $after;
                    } else {
                        $post_type = get_post_type_object(get_post_type());
                        $slug = $post_type->rewrite;
                        $label = $post_type->labels->singular_name;
                        echo wp_kses($delimiter , array('span'=>array('class'=> array())) );echo wp_kses($before , array('span'=>array('class'=> array())) ) . $label . $after;  
                    }
                    
                }

                
                
            } elseif ( is_attachment() ) {
                $parent = get_post($parent_id);
                $cat = get_the_category($parent->ID); $cat = $cat[0];
                if ($cat) {
                    $cats = get_category_parents($cat, TRUE, $delimiter);
                    $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                    $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                    if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                    echo wp_kses($cats, array('a'=>array('href'=> array(), 'title'=>array())) );
                }
                printf($link, get_permalink($parent), $parent->post_title);
                if ($show_current == 1) echo wp_kses($delimiter , array('span'=>array('class'=> array())) ) . $before . get_the_title() . $after;

            } elseif ( is_page() && !$parent_id ) {
              echo wp_kses($delimiter , array('span'=>array('class'=> array())) );  if ($show_current == 1) echo wp_kses($before , array('span'=>array('class'=> array())) ) . get_the_title() . $after;

            } elseif ( is_page() && $parent_id ) {
                if ($parent_id != $frontpage_id) {
                    $breadcrumbs = array();
                    while ($parent_id) {
                        $page = get_page($parent_id);
                        if ($parent_id != $frontpage_id) {
                            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                        }
                        $parent_id = $page->post_parent;
                    }
                    $breadcrumbs = array_reverse($breadcrumbs);
                    for ($i = 0; $i < count($breadcrumbs); $i++) {
                        echo wp_kses($breadcrumbs[$i], array('a'=>array('href'=> array(), 'title'=>array())) );
                        if ($i != count($breadcrumbs)-1) echo wp_kses($delimiter , array('span'=>array('class'=> array())) );
                    }
                }
                if ($show_current == 1) {
                    if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo wp_kses($delimiter , array('span'=>array('class'=> array())) );
                   echo wp_kses($delimiter , array('span'=>array('class'=> array())) ); echo wp_kses($before , array('span'=>array('class'=> array())) ) . get_the_title() . $after;
                }

            } elseif ( is_tag() ) {
              echo wp_kses($delimiter , array('span'=>array('class'=> array())) );  echo wp_kses($before , array('span'=>array('class'=> array())) ) . sprintf($text['tag'], single_tag_title('', false)) . $after;

            } elseif ( is_author() ) {
                global $author;
                $userdata = get_userdata($author);
             echo wp_kses($delimiter , array('span'=>array('class'=> array())) );   echo wp_kses($before , array('span'=>array('class'=> array())) ) . sprintf($text['author'], $userdata->display_name) . $after;

            } elseif ( is_404() ) {
              echo wp_kses($delimiter , array('span'=>array('class'=> array())) );  echo wp_kses($before , array('span'=>array('class'=> array())) ) . $text['404'] . $after;

            } elseif ( has_post_format() && !is_singular() ) {
              echo wp_kses($delimiter , array('span'=>array('class'=> array())) );  echo get_post_format_string( get_post_format() );
            }

            if ( get_query_var('paged') ) {
                if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
              echo wp_kses($delimiter , array('span'=>array('class'=> array())) );  echo wp_kses($before , array('span'=>array('class'=> array())) ).esc_html__('Page','brick') . ' ' . get_query_var('paged').$after;
                if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
            }

        }

    }






    add_action( 'tgmpa_register', 'brick_register_required_plugins' );
    function brick_register_required_plugins() {

        $plugins = array(

            array(
                'name'      => esc_html__('Contact Form 7', 'brick'),
                'slug'      => 'contact-form-7',
                'required'  => true,
            ),
            array(
                'name'        => esc_html__('Redux Framework', 'brick'),
                'slug'        => 'redux-framework',
                'required'    => true
            ), 
            array(
                'name'      => esc_html__('Envato WordPress Toolkit', 'brick'),
                'slug'      => 'envato-wordpress-toolkit-master',
                'source'    => esc_url('http://jkthemes.net/plugins/common/envato-wordpress-toolkit-master.zip'),
                'required'  => true,
                'force_activation' => false,
                'force_deactivation' => false,
                'external_url' => ''
            ),
            array(
                'name'      => esc_html__('Timetable Responsive Schedule For WordPress', 'brick'),
                'slug'      => 'timetable',
                'source'    => esc_url('http://jkthemes.net/plugins/common/timetable.zip'),
                'required'  => true,
                'force_activation' => false,
                'force_deactivation' => false,
                'external_url' => ''
            ),
            array(
                'name'      => esc_html__('WPBakery Visual Composer', 'brick'),
                'slug'      => 'js_composer',
                'source'    => esc_url('http://jkthemes.net/plugins/common/js_composer.zip'),
                'required'  => true,
                'force_activation' => false,
                'force_deactivation' => false,
                'external_url' => ''
            ),
            array(
                'name'      => esc_html__('Brick add-ons', 'brick'),
                'slug'      => 'brick-addons',
                'source'    =>  esc_url('http://jkthemes.net/plugins/brick/brick-addons.zip'),
                'required'  => true,
                'force_activation' => false,
                'force_deactivation' => false,
                'external_url' => ''
            ),
            array(
                'name'      => esc_html__('Revolution slider', 'brick'),
                'slug'      => 'revslider',
                'source'    => esc_url('http://jkthemes.net/plugins/common/revslider.zip'),
                'required'  => true,
                'force_activation' => false,
                'force_deactivation' => false,
                'external_url' => ''
            ),
            array(
			'name'     				=> 'JK Import And Export', // The plugin name
			'slug'     				=> 'jk-import-and-export', // The plugin slug (typically the folder name)
			'source'   				=> esc_url('http://jkthemes.net/plugins/brick/jk-import-and-export.zip'), // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
			),
            array(
		    'name'         => 'Contact Form 7',
		    'slug'         => 'contact-form-7',
		    'required'     => true,		    
		  	),
            array(
		    'name'         => 'MailChimp for WordPress',
		    'slug'         => 'mailchimp-for-wp',
		    'required'     => true,
		  	),
             array(
                'name'        => esc_html__('WooCommerce', 'brick'),
                'slug'        => 'woocommerce',
                'required'    => false
            ),
            array(
		    'name'         => 'WooCommerce Currency Switcher',
		    'slug'         => 'woocommerce-currency-switcher',
		    'required'     => false,		    
		  	),
            array(
		    'name'         => 'WooCommerce Grid / List toggle',
		    'slug'         => 'woocommerce-grid-list-toggle',
		    'required'     => false,
		  	),
            array(
		    'name'         => 'Woocommerce Quick View Lite',
		    'slug'         => 'woocommerce-quick-view-lite',
		    'required'     => false,		    
		  	),
            array(
		    'name'         => 'WPML Multilingual CMS',
		    'slug'         => 'sitepress-multilingual-cms',
		    'source'    => esc_url('http://jkthemes.net/plugins/common/sitepress-multilingual-cms.zip'),
		    'required'     => true,
		  	),

        );

        $config = array(
            'id'                => 'brick',
            'default_path'      => '',                          // Default absolute path to pre-packaged plugins
            'parent_slug'       => 'themes.php',                // Default parent menu slug
            'capability'        => 'edit_theme_options',
            'menu'              => 'install-required-plugins',  // Menu slug
            'has_notices'       => true,                        // Show admin notices or not
            'dismissable'       => false,
            'is_automatic'      => false,                       // Automatically activate plugins after installation or not
            'message'           => '',                          // Message to output right before the plugins table
            'strings'           => array(
                'page_title'                                => esc_html__( 'Install Required Plugins', 'brick' ),
                'menu_title'                                => esc_html__( 'Install Plugins', 'brick' ),
                'installing'                                => esc_html__( 'Installing Plugin: %s', 'brick' ), // %1$s = plugin name
                'oops'                                      => esc_html__( 'Something went wrong with the plugin API.', 'brick' ),
                'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'brick' ), // %1$s = plugin name(s)
                'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'brick' ), // %1$s = plugin name(s)
                'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'brick' ), // %1$s = plugin name(s)
                'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'brick' ), // %1$s = plugin name(s)
                'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'brick' ), // %1$s = plugin name(s)
                'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'brick' ), // %1$s = plugin name(s)
                'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'brick' ), // %1$s = plugin name(s)
                'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'brick' ), // %1$s = plugin name(s)
                'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'brick' ),
                'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'brick' ),
                'return'                                    => esc_html__( 'Return to Required Plugins Installer', 'brick' ),
                'plugin_activated'                          => esc_html__( 'Plugin activated successfully.', 'brick' ),
                'complete'                                  => esc_html__( 'All plugins installed and activated successfully. %s', 'brick' ), // %1$s = dashboard link
                'nag_type'                                  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
            )
        );

        tgmpa( $plugins, $config );

    }

    /* ------------------------------------------------------------------------ */
/* Pagination
/* ------------------------------------------------------------------------ */
function brick_pagination() {
	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}


	$prev_post = get_adjacent_post(false, '', true);
    $next_post = get_adjacent_post(false, '', false);
	echo '<nav class="pagination">
			<ul class="page-numbers">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' , get_previous_posts_link('Previous') );

	
	echo '';
	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="page-numbers current"' : 'class="page-numbers"';

		printf( '<li><a %s href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li><span>...</span></li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="page-numbers current"' : 'class="page-numbers"';
		printf( '<li><a %s href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li><span>...</span></li>' . "\n";

		$class = $paged == $max ? ' class="page-numbers current"' : 'class="page-numbers"';
		printf( '<li><a %s href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' , get_next_posts_link('Next') );

	echo '</ul></nav>' . "\n";
}



/* ------------------------------------------------------------------------ */
/* Comment Styling
/* ------------------------------------------------------------------------ */
function brick_comment( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>

   
	<li <?php comment_class("comment"); ?> >
		<div class="single-comment">
			<div class="avatar">
				<?php echo get_avatar($comment, $size = '70'); ?>
			</div>
			<div class="text">
				<div class="b-clear top">
					<div class="title"><?php if($comment->comment_author_url == ''){ echo get_comment_author(); } else { echo comment_author_link(); } ?>, <?php echo get_comment_time() ?></div>
					<div class="reply-link"><?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'REPLY', 'brick' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
				</div>
				<p><?php comment_text() ?></p>
			</div>
		</div>
	</li>
<?php
}


function brick_the_slug($echo=false){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo esc_html($slug);
  do_action('after_slug', $slug);
  return $slug;
}




if ( ! function_exists( 'brick_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function brick_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'brick', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'brick_blog', 868, 480, true );				// Standard Blog Image
	add_image_size( 'brick_bloggrid', 369, 332, true );				// Standard Blog Image
	add_image_size( 'brick_blogslider', 358, 334, true );				// Standard Blog Image
	add_image_size( 'brick_blogsliderhover', 400, 228, true );				// Standard Blog Image
	add_image_size( 'brick_blogsliderv2', 600, 232, true );				// Standard Blog Image
	add_image_size( 'brick_blogsliderv3', 1920, 900, true );				// Standard Blog Image
	add_image_size( 'brick_blogsliderv3thumb', 300, 300, true );				// Standard Blog Image

	add_image_size( 'brick_shop', 360, 360, true );				// Standard shop Image
	add_image_size( 'brick_mini', 80, 80, true ); 				// used for widget thumbnail
	add_image_size( 'brick_portfolio', 600, 400, true );			// also for blog-medium
	add_image_size( 'brick_regular', 500, 500, true ); 
	add_image_size( 'brick_wide', 1000, 500, true ); 
	add_image_size( 'brick_tall', 500, 1000, true ); 
	add_image_size( 'brick_widetall', 1000, 1000, true ); 
}

	// This theme uses wp_nav_menu() in one location.
	if ( ! isset( $content_width ) ) $content_width = 900;
//add theme support for title tag
add_theme_support('title-tag');
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );   
// Add RSS Links to head section
add_theme_support( 'automatic-feed-links' );
add_theme_support('woocommerce' );


// Add Custom Primary Navigation

	register_nav_menu('main_navigation-left', esc_html__('Main Navigation Left','brick'));
	register_nav_menu('main_navigation-right', esc_html__('Main Navigation Right','brick'));
	register_nav_menu('main_navigation', esc_html__('Main Navigation','brick'));
	register_nav_menu('footer_navigation', esc_html__('Footer Navigation','brick'));
	register_nav_menu('shop_navigation', esc_html__('Shop Navigation','brick'));
	register_nav_menu('onepage_navigation', esc_html__('Onepage Navigation','brick'));
	register_nav_menu('account_navigation', esc_html__('Account Navigation','brick'));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
}
endif;
add_action( 'after_setup_theme', 'brick_theme_setup' );
?>