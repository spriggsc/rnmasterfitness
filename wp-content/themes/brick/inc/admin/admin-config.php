<?php

/* ------------------------------------------------------------------------ */
/* Redux Configuration
/* ------------------------------------------------------------------------ */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "brick_option";

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name'          => 'brick_option',            // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'      => $theme->get('Name'),     // Name that appears at the top of your panel
        'display_version'   => $theme->get('Version'),  // Version that appears at the top of your panel
        'menu_type'         => 'submenu',                  //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'    => false,                    // Show the sections below the admin menu item or not
        'menu_title'        => esc_html__('Theme Options', 'brick'),
        'page_title'        => esc_html__('Theme Options', 'brick'),
        'save_defaults'     => true,
        'async_typography'  => true,                    // Use a asynchronous font on the front end or font string
        'admin_bar'         => false,                    // Show the panel pages on the admin bar
        'global_variable'   => 'brick_option',                      // Set a different name for your global variable other than the opt_name
        'dev_mode'          => false,                    // Show the time the page took to load, etc
        'customizer'        => false,                    // Enable basic customizer support
        'page_slug'         => 'brick_options',
        'system_info'       => false,
        'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
    );

    Redux::setArgs( $opt_name, $args );

    /* General /--------------------------------------------------------- */
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('General', 'brick'),
        'icon'      => 'el-icon-home',
        'fields'    => array(

            array(
                'id'        => 'general-global',
                'type'      => 'info',
                'desc'      => esc_html__('Global Settings', 'brick')
            ),

            array(
                'id'       => 'switch_comments',
                'type'     => 'switch', 
                'title'    => esc_html__('Global Page Comments', 'brick'),
                'subtitle' => esc_html__('You can globally disable the Page Comments (not Blog). Page specific Settings get overwritten.', 'brick'),
                'default'  => false,
            ),

         
             array(
                'id'        => 'general-colorscheme',
                'type'      => 'info',
                'desc'      => esc_html__('Theme Color Scheme', 'brick')
            ),
             array(
                'id'=>'color_accent',
                'type' => 'color',
                'title' => esc_html__('Accent Color', 'brick'),
                'subtitle' => esc_html__('Default: #31bea3', 'brick'),
                'default' => '#31bea3',
                'transparent' => false,
                'validate' => 'color',
            ),


        ),
    ) );

Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header', 'brick'),
        'icon'      => 'el-icon-file-edit',
        'fields'    => array(

            array(
                'id'        => 'general-global',
                'type'      => 'info',
                'desc'      => esc_html__('Header Settings', 'brick')
            ),
            array(
                'id'       => 'media_logo',
                'type'     => 'media', 
                'url'      => false,
                'title'    => esc_html__('Logo Upload', 'brick'),
            ),
           
          
             array(
                'id'        => 'social-media',
                'type'      => 'info',
                'desc'      => esc_html__('Social Media Icons (Remember to include the "http://" in all URLs)', 'brick')
            ),

            array(
                'id'       => 'social_twitter',
                'type'     => 'text',
                'title'    => esc_html__('Twitter', 'brick'),
                'subtitle' => esc_html__('Enter URL to your Twitter Account', 'brick'),
                'default'  => '',
            ),

            array(
                'id'       => 'social_facebook',
                'type'     => 'text',
                'title'    => esc_html__('Facebook', 'brick'),
                'subtitle' => esc_html__('Enter URL to your Facebook Account', 'brick'),
                'default'  => '',
            ),

            array(
                'id'       => 'social_googleplus',
                'type'     => 'text',
                'title'    => esc_html__('Google+', 'brick'),
                'subtitle' => esc_html__('Enter URL to your Google+ Account', 'brick'),
                'default'  => '',
            ),

           
            array(
                'id'       => 'social_pinterest',
                'type'     => 'text',
                'title'    => esc_html__('Pinterest', 'brick'),
                'subtitle' => esc_html__('Enter URL to your Pinterest Account', 'brick'),
                'default'  => '',
            ),
             array(
                'id'        => 'Contact Info',
                'type'      => 'info',
                'desc'      => esc_html__('Enter header Contact info', 'brick')
            ),
            array(
                'id'       => 'headerphone',
                'type'     => 'text',
                'title'    => esc_html__('Phone No', 'brick'),               
                'default'  => '0123 456 78 910'
            ),            
            array(
                'id'       => 'headeremail',
                'type'     => 'text',
                'title'    => esc_html__('Email', 'brick'),               
                'default'  => 'support@brick.com'
            ),
            array(
                'id'       => 'of_timing',
                'type'     => 'text',
                'title'    => esc_html__('Work Hours', 'brick'),               
                'default'  => '8:00 - 19:00'
            ),
            array(
                'id'        => 'general-pageheader',
                'type'      => 'info',
                'desc'      => esc_html__('Page Header Settings', 'brick')
            ),
            array(
                'id'       => 'pagebackground',
                'type'     => 'media', 
                'url'      => false,
                'title'    => esc_html__('Page Header Background Upload', 'brick'),
            ),
            array(
                'id'       => 'hstyles',
                'type'     => 'image_select',
                'title'    => esc_html__('Header Style', 'brick'), 
                'subtitle' => esc_html__('Select Header Style', 'brick'),
                'options'  => array(
                    'v1'      => array(
                        'alt'   => 'Header 1', 
                        'img'   => get_template_directory_uri().'/images/h1.png'
                    ),
                    'v2'      => array(
                        'alt'   => 'Header 2', 
                        'img'   => get_template_directory_uri().'/images/h5.png'
                    ),
                    'v3'      => array(
                        'alt'   => 'Header 3', 
                        'img'   => get_template_directory_uri().'/images/h7.png'
                    ),
                    'v4'      => array(
                        'alt'   => 'Header 4', 
                        'img'   => get_template_directory_uri().'/images/h4.png'
                    ),
                    'v5'      => array(
                        'alt'   => 'Header 5', 
                        'img'   => get_template_directory_uri().'/images/h8.png'
                    ),
                    'v6'      => array(
                        'alt'   => 'Header 6', 
                        'img'   => get_template_directory_uri().'/images/h9.png'
                    ),
                    'v7'      => array(
                        'alt'   => 'Header 7', 
                        'img'   => get_template_directory_uri().'/images/h3.png'
                    ),
                    'v8'      => array(
                        'alt'   => 'Header 8', 
                        'img'   => get_template_directory_uri().'/images/h2.png'
                    ),
                    'v9'      => array(
                        'alt'   => 'Header 9', 
                        'img'   => get_template_directory_uri().'/images/h6.png'
                    ),
                   
                ),
                'default' => '1'
            ),           
            array(
                'id'        => 'headerv4',
                'type'      => 'info',
                'desc'      => esc_html__('Only For Header 4', 'brick')
            ), 
            array(
                'id'       => 'offertitle',
                'type'     => 'text',
                'title'    => esc_html__('Offer Title', 'brick'),               
                'default'  => 'offer of the day'
            ),
            array(
                'id'       => 'offertext',
                'type'     => 'text',
                'title'    => esc_html__('Offer Text', 'brick'),               
                'default'  => 'Additional <b>25%</b> off on first month of this year.'
            ),
            )
        ));
Redux::setSection( $opt_name, array(
        'title'     => esc_html__('404 Page', 'brick'),
        'icon'      => 'el-icon-file-edit',
        'fields'    => array(

            array(
                'id'        => 'general-global',
                'type'      => 'info',
                'desc'      => esc_html__('404 Page Settings', 'brick')
            ),
            array(
                'id'       => '404title',
                'type'     => 'text',
                'title'    => esc_html__('title', 'brick'),
                'subtitle' => esc_html__('', 'brick'),
                'default'  => '404',
            ), 
            array(
                'id'       => '404subtitle',
                'type'     => 'text',
                'title'    => esc_html__('Sub Title', 'brick'),
                'subtitle' => esc_html__('', 'brick'),
                'default'  => esc_html__('Page not found','brick'),
            ),
            array(
                'id'       => '404subtext',
                'type'     => 'text',
                'title'    => esc_html__('Sub Text', 'brick'),
                'subtitle' => esc_html__('', 'brick'),
                'default'  => esc_html__('The page you are looking for could not be found','brick'),
            ),
            array(
                'id'       => '404text',
                'type'     => 'textarea',
                'title'    => esc_html__('Text', 'brick'),
                'subtitle' => esc_html__('', 'brick'),
                'default'  => esc_html__('Can\'t find what you looking for? Take a moment and do a search below or start from our','brick'),
            ),
            array(
                'id'       => '404btntitle',
                'type'     => 'text',
                'title'    => esc_html__('Button Title', 'brick'),
                'subtitle' => esc_html__('', 'brick'),
                'default'  => esc_html__('Go to Homepage','brick'),
            ),
)));
// Blog
            Redux::setSection( $opt_name, array(
                'title'      => esc_html__('Blog', 'brick'),
                'fields' => array(
                     array(
                        'id'        => 'blog-page',
                        'type'      => 'info',
                        'desc'      => esc_html__('Blog', 'brick')
                    ),
                    array(
                        'id'      =>'blog-title',
                        'type'     => 'text',
                        'title'    => esc_html__('Blog title', 'brick'),
                        'default'  => esc_html__('Blog','brick'),
                    ),

                    array(
                        'id'      =>'blog-subtitle',
                        'type'     => 'text',
                        'title'    => esc_html__('Blog sub title', 'brick'),
                        'default'  => esc_html__('ALL POSTS','brick'),
                    ),
                   )
                )
            );
// Social
Redux::setSection( $opt_name, array(
                'title'      => esc_html__('Social', 'brick'),
                'fields'     => array(

                    array(
                        'id'      =>'tweets-consumer-key',
                        'type'     => 'text',
                        'title'    => esc_html__('Recent tweets consumer key', 'brick'),
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'tweets-consumer-secret',
                        'type'     => 'text',
                        'title'    => esc_html__('Recent tweets consumer secret', 'brick'),
                        'subtitle' => esc_html__('Enter your consumer key here', 'brick'),
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'tweets-access-token',
                        'type'     => 'text',
                        'title'    => esc_html__('Recent tweets access token', 'brick'),
                        'subtitle' => esc_html__('Enter your access token here', 'brick'),
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'tweets-access-token-secret',
                        'type'     => 'text',
                        'title'    => esc_html__('Recent tweets access token secret', 'brick'),
                        'subtitle' => esc_html__('Enter your access token secret here', 'brick'),
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-rss',
                        'type'     => 'text',
                        'title'    => esc_html__('RSS Feed URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-facebook',
                        'type'     => 'text',
                        'title'    => esc_html__('Facebook URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-twitter',
                        'type'     => 'text',
                        'title'    => esc_html__('Twitter URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-googleplus',
                        'type'     => 'text',
                        'title'    => esc_html__('Google Plus URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-youtube',
                        'type'     => 'text',
                        'title'    => esc_html__('Yotube URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-vimeo',
                        'type'     => 'text',
                        'title'    => esc_html__('Vimeo URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-linkedin',
                        'type'     => 'text',
                        'title'    => esc_html__('LinkedIn URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-pinterest',
                        'type'     => 'text',
                        'title'    => esc_html__('Pinterest URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-flickr',
                        'type'     => 'text',
                        'title'    => esc_html__('Flickr URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-instagram',
                        'type'     => 'text',
                        'title'    => esc_html__('Instagram URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-apple',
                        'type'     => 'text',
                        'title'    => esc_html__('Apple URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-dribbble',
                        'type'     => 'text',
                        'title'    => esc_html__('Dribbble URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-android',
                        'type'     => 'text',
                        'title'    => esc_html__('Android URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-behance',
                        'type'     => 'text',
                        'title'    => esc_html__('Behance URL', 'brick'),
                        'validate' => 'url',
                        'default'  => ''
                    ),

                    array(
                        'id'      =>'social-email',
                        'type'     => 'text',
                        'title'    => esc_html__('Email URL', 'brick'),
                        'default'  => ''
                    )
                )
            ));
 
Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Google Map', 'brick'),
        'icon'      => 'el-icon-briefcase',
        'fields'    => array(

            array(
                'id'        => 'general-global',
                'type'      => 'info',
                'desc'      => esc_html__('Map Settings', 'brick')
            ),
            array(
                'id'       => 'latitude',
                'type'     => 'text',
                'title'    => esc_html__('Latitude', 'brick'),               
                'default'  => '51.4584218'
            ),            
            array(
                'id'       => 'longitude',
                'type'     => 'text',
                'title'    => esc_html__('Longitude', 'brick'),               
                'default'  => '-0.0813982'
            ),
            array(
                'id'       => 'googleapikey',
                'type'     => 'text',
                'title'    => esc_html__('Google API Key', 'brick'),               
                'default'  => ''
            ),
            )
        ));
// Commerce
        Redux::setSection( $opt_name, array(
                'title'      => esc_html__('WooCommerce', 'brick'),
                'fields' => array(

                    array(
                        'id'      =>'shop-title',
                        'type'    => 'text',
                        'title'   => esc_html__('Shop title', 'brick'),
                        'default' => esc_html__('Shop', 'brick'),
                    ),

                    array(
                        'id'       =>'shop_rh_back',
                        'type'     => 'background',
                        'title'    => esc_html__('Shop page title options', 'brick'),
                    ),

                    array(
                        'id'       =>'shop_rh_text_color',
                        'type'     => 'color',
                        'title'    => esc_html__('Shop page title color', 'brick'),
                    ),

                    array(
                        'id'       =>'shop_rh_text_back_color',
                        'type'     => 'color_rgba',
                        'title'    => esc_html__('Shop page title background color', 'brick'),
                        'subtitle' => esc_html__('Available only for Page title section version 2. (Theme options >> General >> Page title section)', 'brick'),
                    ),

                    array(
                        'id'      =>'shop_breadcrumbs_icon',
                        'type'     => 'select',
                        'title'    => esc_html__('Choose breadcrumbs icons version', 'brick'),
                        'options'  => array(
                            "dark"  => "Dark",
                            "light" => "Light"
                        ),
                        'default' => "dark",
                        'subtitle' => esc_html__('Available only for Page title section version 1. (Theme options >> General >> Page title section)', 'brick'),
                    ),

                    array(
                        'id'       =>'shop_breadcrumbs_text_color',
                        'type'     => 'color',
                        'title'    => esc_html__('Shop breadcrumbs text color', 'brick'),
                    ),

                    array(
                        'id'       =>'shop_breadcrumbs_back_color',
                        'type'     => 'color_rgba',
                        'title'    => esc_html__('Shop breadcrumbs background color', 'brick'),
                        'subtitle' => esc_html__('Available only for Page title section version 2. (Theme options >> General >> Page title section)', 'brick'),
                    ),

                    array(
                        'id'      =>'shop-parallax',
                        'type'    => 'switch',
                        'title'   => esc_html__('Parallax effect for shop page header section', 'brick'),
                        "default" => 0,
                    ),

                    array(
                        'id'      =>'shop-layout',
                        'type'     => 'select',
                        'title'    => esc_html__('Choose shop layout', 'brick'),
                        'options'  => array(
                            "small"   => "1/4",
                            "medium"  => "1/3",
                        ),
                        'default' => "medium",
                    ),

                    array(
                        'id'       =>'shop-sidebar',
                        'type'     => 'select',
                        'title'    => esc_html__('Shop sidebar', 'brick'),
                        'subtitle' => esc_html__('Select sidebar for shop', 'brick'),
                        'options'  => array(
                            'none'  =>'none',
                            'left'  =>'left',
                            'right' =>'right'
                        ),
                        'default'  => 'none',
                    ),

                    array(
                        'id'       =>'shop-sidebar-single',
                        'type'     => 'select',
                        'title'    => esc_html__('Shop sidebar in single product page', 'brick'),
                        'subtitle' => esc_html__('Select sidebar for shop single product page', 'brick'),
                        'options'  => array(
                            'none'  =>'none',
                            'left'  =>'left',
                            'right' =>'right'
                        ),
                        'default'  => 'none',
                    ),

                    array(
                        'id'      =>'shop-animation',
                        'type'    =>'switch',
                        'title'   => esc_html__('Shop posts animation in archive', 'brick'),
                        'subtitle' => esc_html__('Toggle shop products animation in archive', 'brick'),
                        "default" => 0,
                    ),

                    array(
                        'id'      =>'shop-rp',
                        'type'    => 'switch',
                        'title'   => esc_html__('Toggle related products in single product page', 'brick'),
                        "default" => 1,
                    ),

                    array(
                        'id'       =>'shop-rpn',
                        'type'     => 'select',
                        'title'    => esc_html__('Single product related products number', 'brick'),
                        'options'  => array(
                            '3' =>'3',
                            '4' =>'4'
                        ),
                        'default'  => '4',
                    )
                )
            ));

Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer', 'brick'),
        'icon'      => 'el-icon-file-edit',
        'fields'    => array(

            array(
                'id'        => 'general-global',
                'type'      => 'info',
                'desc'      => esc_html__('Footer', 'brick')
            ),
            array(
                'id'       => 'footer_left_text',
                'type'     => 'text',
                'title'    => esc_html__('Footer Left Bottom Text', 'brick'),               
                'default'  => 'Brick Template by <a href="#">Expand Theme</a>'
            ),
            array(
                'id'       => 'footer_right_text',
                'type'     => 'text',
                'title'    => esc_html__('Footer Right Bottom Text', 'brick'),               
                'default'  => '© 2017 <a href="#">Brick</a> All rights reserved.'
            ),
             array(
                'id'       => 'footer_logo',
                'type'     => 'media', 
                'url'      => false,
                'title'    => esc_html__('Footer Logo Upload', 'brick'),
            ),
             array(
                'id'       => 'selectfooter',
                'type'     => 'select',
                'title'    => esc_html__('Select Option', 'brick'), 
                'subtitle' => esc_html__('', 'brick'),
                'desc'     => esc_html__('', 'brick'),
                // Must provide key => value pairs for select options
                'options'  => array(
                    '1' => 'Footer 1',
                    '2' => 'Footer 2',
                    '3' => 'Footer 3',
                    '4' => 'Footer 4',
                ),
                'default'  => '3',
            ),
             array(
                'id'        => 'general-global',
                'type'      => 'info',
                'desc'      => esc_html__('Footer 3', 'brick')
            ),
            array(
                'id'       => 'footertitle',
                'type'     => 'text',
                'title'    => esc_html__('Footer Title', 'brick'),               
                'default'  => 'Reserve a Free Trial Class'
            ),
            array(
                'id'       => 'footersubtext',
                'type'     => 'text',
                'title'    => esc_html__('Footer Sub Text', 'brick'),               
                'default'  => 'Shape your body and improve your health'
            ),
             array(
                'id'       => 'btntitle',
                'type'     => 'text',
                'title'    => esc_html__('Button Title', 'brick'),               
                'default'  => 'Start Free Trial'
            ),
            array(
                'id'       => 'btnlink',
                'type'     => 'text',
                'title'    => esc_html__('Button Link', 'brick'),               
                'default'  => '#'
            ),
             array(
                'id'       => 'footertitle2',
                'type'     => 'text',
                'title'    => esc_html__('Footer Title 2', 'brick'),               
                'default'  => 'Opening Hours'
            ),
            array(
                'id'       => 'footersubtext1',
                'type'     => 'text',
                'title'    => esc_html__('Footer Sub Text 1', 'brick'),               
                'default'  => 'Mon - Fri'
            ),
            array(
                'id'       => 'footersubtext2',
                'type'     => 'text',
                'title'    => esc_html__('Footer Sub Text 2', 'brick'),               
                'default'  => 'Sat - Sun'
            ),
            array(
                'id'       => 'footersubtext3',
                'type'     => 'text',
                'title'    => esc_html__('Footer Sub Text 3', 'brick'),               
                'default'  => '9:00 - 22:00'
            ),
            array(
                'id'       => 'footersubtext4',
                'type'     => 'text',
                'title'    => esc_html__('Footer Sub Text 4', 'brick'),               
                'default'  => '10:00 - 18:00'
            ),
            )
        ));



/* ------------------------------------------------------------------------ */
/* Custom function for JkThemes's own CSS
/* ------------------------------------------------------------------------ */
function overridePanelCSS() {   
    wp_register_style( 'redux-custom-css', get_template_directory_uri() . '/inc/admin/admin-custom.css', array(), '1', 'all' );    
    wp_enqueue_style('redux-custom-css');
}
add_action( 'redux/page/brick_option/enqueue', 'overridePanelCSS' );