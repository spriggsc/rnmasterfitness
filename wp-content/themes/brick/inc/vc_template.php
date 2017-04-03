<?php 
if (function_exists('vc_map')) {
	# code...
$mc4forms = array();
if (function_exists('mc4wp_get_forms')) {
	
	$forms = mc4wp_get_forms();
	foreach ($forms as $form) {
		
		$mc4forms = array($form->name => $form->ID);
	}
	
	
}
$flaticons = array(
	'Exercise'=>'flaticon-exercise',
'Exercise1'=>'flaticon-exercise-1',
'Exercise10'=>'flaticon-exercise-10',
'Exercise11'=>'flaticon-exercise-11',
'Exercise12'=>'flaticon-exercise-12',
'Exercise13'=>'flaticon-exercise-13',
'Exercise14'=>'flaticon-exercise-14',
'Exercise15'=>'flaticon-exercise-15',
'Exercise16'=>'flaticon-exercise-16',
'Exercise2'=>'flaticon-exercise-2',
'Exercise3'=>'flaticon-exercise-3',
'Exercise4'=>'flaticon-exercise-4',
'Exercise5'=>'flaticon-exercise-5',
'Exercise6'=>'flaticon-exercise-6',
'Exercise9'=>'flaticon-exercise-9',
'Jumping'=>'flaticon-jumping',
'Pushups'=>'flaticon-pushups',
'Running'=>'flaticon-running',
'Running1'=>'flaticon-running-1',
'Stretching'=>'flaticon-stretching',
'Stretching1'=>'flaticon-stretching-1',
'Stretching2'=>'flaticon-stretching-2',
'Stretching3'=>'flaticon-stretching-3',
'Stretching4'=>'flaticon-stretching-4',
'Stretching5'=>'flaticon-stretching-5',
'Weightlifting'=>'flaticon-weightlifting',
'Weightlifting1'=>'flaticon-weightlifting-1',
'Weightlifting10'=>'flaticon-weightlifting-10',
'Weightlifting11'=>'flaticon-weightlifting-11',
'Weightlifting2'=>'flaticon-weightlifting-2',
'Weightlifting3'=>'flaticon-weightlifting-3',
'Weightlifting4'=>'flaticon-weightlifting-4',
'Weightlifting5'=>'flaticon-weightlifting-5',
'Weightlifting6'=>'flaticon-weightlifting-6',
'Weightlifting7'=>'flaticon-weightlifting-7',
'Weightlifting8'=>'flaticon-weightlifting-8',
'Weightlifting9'=>'flaticon-weightlifting-9',
'Yoga'=>'flaticon-yoga',
	);

$args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
        $cf7_forms = array('0' =>'Select Form ID');
        if( $cf7Forms = get_posts( $args ) ){
            foreach($cf7Forms as $cf7Form){
                $cf7_forms[$cf7Form->post_title] = $cf7Form->ID;
                //echo(do_shortcode('[contact-form-7 id="'.$cf7Form->ID.'" title="'.($cf7Form->post_title).'"]'));
            }
        }
/*  GALLERY              (CONTENT)
			/*-------------------------------*/

				vc_map(array(
		    		'name'                    => "Gallery",
		    		'base'                    => "brick_gallery",
		    		'class'                   => 'nz-vc-gallery',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Brick",'brick'),
		    		'icon'                    => 'icon-gallery',
		    		'js_view'                 => '',
		    		'description'             => 'Insert image gallery',
		    		'params'                  => array(
		    			
						array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Columns",
							"param_name" => "columns",
							"value"      => array(
							'Select columns'=>'',								
								"2" => '2',
								"3" => '3',
								"4" => '4',
								
							),
							
						),
						
						array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "With",
							"param_name" => "width",
							"value"      => array(
							'Select width'	=>'',							
								"Full Screen"  => 'fullscreen',
								"Container"  => 'normal'
							)
						),
						
		    		)
		    	));


			/*  CONTENTBOX           (CONTENT)
			/*-------------------------------

				vc_map(array(
		    		'name'                    => "Gallery V1",
		    		'base'                    => "brick_galleryv1",
		    		"as_parent"               => array('only' => 'brick_galimagev1'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-content-box',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Brick",'brick'),
		    		'is_container'            => true,
		    		"js_view"                 => 'VcColumnView',
		    		'icon'                    => 'icon-content-box',
		    		'params'                  => array(
						
		    		),
		    		'description'             => 'Insert icon-based boxes with columns'
		    	));

				vc_map(array(
		    		'name'                    => "Gallery Iamge",
		    		'base'                    => "brick_galimagev1",
		    		"as_child"                => array('only' => 'brick_galleryv1'),
		    		"content_element"         => true,
		    		'params'                  => array(
		    			array(
							"type"        => "textfield",
							"class"       => "",
							"heading"     => "Category",
							"param_name"  => "category",
							"value"       => ""
						),
		    			array(
							"type"        => "textfield",
							"class"       => "",
							"heading"     => "Title",
							"param_name"  => "title",
							"value"       => ""
						),
						array(
							"type"        => "textfield",
							"class"       => "",
							"heading"     => "Sub title",
							"param_name"  => "subtitle",
							"value"       => "",
							'description'=> "Enter icon name (icon list can be found in icomoon folder, see help)"
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "imageurl",
							"value"      => ""
						),
						
		    		)
		    	));*/
 /*  TESTIMONIALS         (CONTENT)
			/*-------------------------------*/

				vc_map(array(
		    		'name'                    => "Testimonials",
		    		'base'                    => "brick_testimonials",
		    		"as_parent"               => array('only' => 'brick_testimonial'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-testimonials',
		    		'show_settings_on_create' => true,
		    		"js_view"                 => 'VcColumnView',
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-testimonials',
		    		'description'             => 'Add testimonials carousel with this element',
		    		'params'                  => array(
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => 'Why people love us'
						),
		    		)
		    	));

				vc_map(array(
		    		'name'                    => "Testimonial",
		    		'base'                    => "brick_testimonial",
		    		"as_child"                => array('only' => 'brick_testimonials'),
		    		"content_element"         => true,
		    		'params'                  => array(
		    			array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Upload person image",
							"param_name" => "img",
							"value"      => ""
						),
		    			array(
		    				"type"       => "textfield",
							"heading"    => "Person name",
							"param_name" => "name",
							"value"      => 'Person Name'
						),
						array(
							"type"        => "textfield",
							"heading"     => "Title",
							"param_name"  => "title",
							"value"       => "Title"
						),
						array(
							"type"       => "textarea",
							"param_name" => "content",
							"value"      => 'Testimonial goes here'
						)
		    		)
		    	));

/*  TESTIMONIALS         (CONTENT)
			/*-------------------------------*/

				vc_map(array(
		    		'name'                    => "Our mission",
		    		'base'                    => "brick_ourmissions",
		    		"as_parent"               => array('only' => 'brick_ourmission'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-testimonials',
		    		'show_settings_on_create' => true,
		    		"js_view"                 => 'VcColumnView',
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-testimonials',
		    		'description'             => 'Add testimonials carousel with this element',
		    		'params'                  => array(
						
		    		)
		    	));

				vc_map(array(
		    		'name'                    => "Missison",
		    		'base'                    => "brick_ourmission",
		    		"as_child"                => array('only' => 'brick_ourmissions'),
		    		"content_element"         => true,
		    		'params'                  => array(
		    			
		    			
						array(
							"type"        => "textfield",
							"heading"     => "Title",
							"param_name"  => "title",
							"value"       => "Title"
						),
						array(
							"type"        => "textfield",
							"heading"     => "SubTitle",
							"param_name"  => "subtitle",
							"value"       => ""
						),
						array(
							"type"       => "textarea",
							"heading"     => "Sub Text 1",
							"param_name" => "subtext1",
							"value"      => ''
						),
						array(
							"type"       => "textarea",
							"heading"     => "Sub Text2",
							"param_name" => "subtext2",
							"value"      => ''
						)
		    		)
		    	));
				/*  PRICING TABLE      (CONTAINER)
			/*-------------------------------*/

				vc_map(array(
		    		'name'                    => "Pricing table",
		    		'base'                    => "brick_pricing_table",
		    		"as_parent"               => array('only' => 'brick_column'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		"js_view"                 => 'VcColumnView',
		    		'description'             => 'Add pricing table',
		    		'params'                  => array(
						array(
		    				"type"       => "dropdown",
							"heading"    => "Columns",
							"param_name" => "columns",
							"value"      => array("3"=>"3","4"=>"4")
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => '',
							
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => '',
							
						),
		    		)
		    	));

				vc_map(array(
		    		'name'                    => "Column",
		    		'base'                    => "brick_column",
		    		"as_child"                => array('only' => 'brick_Pricing_Table'),
		    		"content_element"         => true,
		    		'params'                  => array(
		    			array(
		    				"type"       => "dropdown",
							"heading"    => "Highlight",
							"param_name" => "high",
							"value"      => array("false"=>"false","true"=>"true")
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Highlight label",
							"param_name" => "hlabel",
							"value"      => '',
							"dependency" => Array('element' => "high", 'value' => 'true')
						),
		    			array(
							"type"       => "colorpicker",
							"class"      => "",
							"heading"    => "Color",
							"param_name" => "color",
							"value"      => ""
						),
		    			array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Price",
							"param_name" => "price",
							"value"      => '$ 29.99'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Tariff",
							"param_name" => "tariff",
							"value"      => '/m'
						),
		    			array(
							"type"       => "textarea",
							"heading"    => "Rows",
							"param_name" => "content",
							"value"      => '',
							'description' => 'Use line break (press Enter) to separate between items',
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button link",
							"param_name" => "link",
							"value"      => '#'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button text",
							"param_name" => "button_text",
							"value"      => 'Submit now'
						)
		    		)
		    	));



				vc_map(array(
		    		'name'                    => "Pricing table v2",
		    		'base'                    => "brick_pricing_tablev2",
		    		"as_parent"               => array('only' => 'brick_columnv2'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		"js_view"                 => 'VcColumnView',
		    		'description'             => 'Add pricing table',
		    		'params'                  => array(
						array(
		    				"type"       => "dropdown",
							"heading"    => "Columns",
							"param_name" => "columns",
							"value"      => array("3"=>"3","4"=>"4")
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => '',
							
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => '',
							
						),
		    		)
		    	));

				vc_map(array(
		    		'name'                    => "Column v2",
		    		'base'                    => "brick_columnv2",
		    		"as_child"                => array('only' => 'brick_Pricing_Tablev2'),
		    		"content_element"         => true,
		    		'params'                  => array(
		    			array(
		    				"type"       => "dropdown",
							"heading"    => "Highlight",
							"param_name" => "high",
							"value"      => array("false"=>"false","true"=>"true")
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Highlight label",
							"param_name" => "hlabel",
							"value"      => '',
							"dependency" => Array('element' => "high", 'value' => 'true')
						),
		    			array(
							"type"       => "colorpicker",
							"class"      => "",
							"heading"    => "Color",
							"param_name" => "color",
							"value"      => ""
						),
		    			array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Price",
							"param_name" => "price",
							"value"      => '29.99'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Tariff",
							"param_name" => "tariff",
							"value"      => 'Per Month'
						),
		    			array(
							"type"       => "textarea",
							"heading"    => "Rows",
							"param_name" => "content",
							"value"      => '',
							'description' => 'Use line break (press Enter) to separate between items',
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button link",
							"param_name" => "link",
							"value"      => '#'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button text",
							"param_name" => "button_text",
							"value"      => 'Submit now'
						)
		    		)
		    	));

/*Brick Info*/
				vc_map(array(
		    		'name'                    => "Brick Info",
		    		'base'                    => "brick_info",
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		'params'                  => array(
		    			
						array(
		    				"type"       => "textfield",
							"heading"    => "Highlight label",
							"param_name" => "hlabel",
							"value"      => '',
							"dependency" => Array('element' => "high", 'value' => 'true')
						),
		    			
		    			array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						array(
							"type"       => "textarea",
							"heading"    => "Sub Text",
							"param_name" => "subtext",
							"value"      => '',
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title1",
							"param_name" => "subtitle",
							"value"      => 'Per Month'
						),
		    			
						array(
							"type"       => "textarea",
							"heading"    => "Sub Text 1",
							"param_name" => "subtext1",
							"value"      => '',
							
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image1",
							"value"      => ""
						),

						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title2",
							"param_name" => "subtitle2",
							"value"      => 'Per Month'
						),
		    			
						array(
							"type"       => "textarea",
							"heading"    => "Sub Text 2",
							"param_name" => "subtext2",
							"value"      => '',
							
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image2",
							"value"      => ""
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title3",
							"param_name" => "subtitle3",
							"value"      => 'Per Month'
						),
		    			
						array(
							"type"       => "textarea",
							"heading"    => "Sub Text 3",
							"param_name" => "subtext3",
							"value"      => '',
							
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image3",
							"value"      => ""
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title 4",
							"param_name" => "subtitle4",
							"value"      => 'Per Month'
						),
		    			
						array(
							"type"       => "textarea",
							"heading"    => "Sub Text 4",
							"param_name" => "subtext4",
							"value"      => '',
							
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image4",
							"value"      => ""
						),
						
		    		)
		    	));
/*
Our Studio
*/
					vc_map(array(
		    		'name'                    => "Our Studio",
		    		'base'                    => "brick_ourstudio",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						array(
							"type"       => "attach_images",
							"class"      => "",
							"heading"    => "Upload images",
							"param_name" => "images",
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image2",
							"value"      => ""
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title",
							"param_name" => "btntitle",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link",
							"param_name" => "btnlink",
							"value"      => ''
						),
						))
);

/*
Featured
*/
					vc_map(array(
		    		'name'                    => "Featured",
		    		'base'                    => "brick_featured",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image1",
							"value"      => ""
						),
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Text",
							"param_name" => "subtext1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Text",
							"param_name" => "subtext2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title 1",
							"param_name" => "btntitle1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link 1",
							"param_name" => "btnlink1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Text",
							"param_name" => "subtext21",
							"value"      => ''
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image2",
							"value"      => ""
						),
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title 2",
							"param_name" => "btntitle2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link 2",
							"param_name" => "btnlink2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Title 3",
							"param_name" => "title3",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Text 3",
							"param_name" => "subtext31",
							"value"      => ''
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image3",
							"value"      => ""
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title 3",
							"param_name" => "btntitle3",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link 3",
							"param_name" => "btnlink3",
							"value"      => ''
						),
						))
);
/*
Offer Box
*/
					vc_map(array(
		    		'name'                    => "Offer Box",
		    		'base'                    => "brick_offerbox",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image1",
							"value"      => ""
						),
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title 1",
							"param_name" => "btntitle1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link 1",
							"param_name" => "btnlink1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title2",
							"value"      => ''
						),
						
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image2",
							"value"      => ""
						),
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title 2",
							"param_name" => "btntitle2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link 2",
							"param_name" => "btnlink2",
							"value"      => ''
						),
						
						))
);
/*
Blocks
*/
					vc_map(array(
		    		'name'                    => "Brick Blocks",
		    		'base'                    => "brick_blocks",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => 'Add Blocks',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Text",
							"param_name" => "subtext1",
							"value"      => ''
						),						
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title 1",
							"param_name" => "btntitle1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link 1",
							"param_name" => "btnlink1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Text",
							"param_name" => "subtext2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title 2",
							"param_name" => "btntitle2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link 2",
							"param_name" => "btnlink2",
							"value"      => ''
						),
						
						))
);


/*
Trainers
*/
					vc_map(array(
		    		'name'                    => "Trainers V4",
		    		'base'                    => "brick_trainersv4",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						
						))
);


					vc_map(array(
		    		'name'                    => "Trainers V1",
		    		'base'                    => "brick_trainersv1",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						
						))
);

					vc_map(array(
		    		'name'                    => "Trainers V2",
		    		'base'                    => "brick_trainersv2",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						
						))
);

					vc_map(array(
		    		'name'                    => "Trainers V3",
		    		'base'                    => "brick_trainersv3",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						
						))
);
/*
Subscribe
*/
					vc_map(array(
		    		'name'                    => "Subscribe",
		    		'base'                    => "brick_subscription",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image1",
							"value"      => ""
						),


					array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Forms",
							"param_name" => "form",
							"value"      => $mc4forms,
						),))
);
/*
About Icons
*/
vc_map(array(
		    		'name'                    => "About Icons",
		    		'base'                    => "brick_abouticons",
		    		"as_parent"               => array('only' => 'brick_abouticon'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		"js_view"                 => 'VcColumnView',
		    		'description'             => 'Add pricing table',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => '',
							
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => '',
							
						),
		    		)
		    	));

				
vc_map(array(
		    		'name'                    => "About Icon",
		    		'base'                    => "brick_abouticon",
		    		"as_child"                => array('only' => 'brick_abouticons'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => 'Add pricing table',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
						

					array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Icon",
							"param_name" => "icon",
							"value"      => $flaticons,
						),))
);





/*
Advantages
*/
				vc_map(array(
		    		'name'                    => "Advantages",
		    		'base'                    => "brick_advantages",
		    		"as_parent"               => array('only' => 'brick_advantagesicon'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		"js_view"                 => 'VcColumnView',
		    		'description'             => 'Add service',
		    		'params'                  => array(
						
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image1",
							"value"      => ""
						),

						
		    		)
		    	));

				
				vc_map(array(
		    		'name'                    => "Advantage Icon",
		    		'base'                    => "brick_advantagesicon",
		    		"as_child"                => array('only' => 'brick_advantages'),
		    		"content_element"         => true,
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
						

					array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Icon",
							"param_name" => "icon",
							"value"      => $flaticons,
						),))
					);







/*
Servicess
*/
				vc_map(array(
		    		'name'                    => "Services",
		    		'base'                    => "brick_services",
		    		"as_parent"               => array('only' => 'brick_service'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		"js_view"                 => 'VcColumnView',
		    		'description'             => 'Add service',
		    		'params'                  => array(
						
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image1",
							"value"      => ""
						),

						
		    		)
		    	));

				
				vc_map(array(
		    		'name'                    => "Service Icon",
		    		'base'                    => "brick_service",
		    		"as_child"                => array('only' => 'brick_services'),
		    		"content_element"         => true,
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
						

					array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Icon",
							"param_name" => "icon",
							"value"      => $flaticons,
						),))
					);


/*
Wellcome
*/
				vc_map(array(
		    		'name'                    => "Wellcome",
		    		'base'                    => "brick_welcome",
		    		"as_parent"               => array('only' => 'brick_welcomeicon'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		"js_view"                 => 'VcColumnView',
		    		'description'             => 'Add service',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "subtext",
							"value"      => ''
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image1",
							"value"      => ""
						),
						
		    		)
		    	));

				
				vc_map(array(
		    		'name'                    => "Wellcome Icon",
		    		'base'                    => "brick_welcomeicon",
		    		"as_child"                => array('only' => 'brick_welcome'),
		    		"content_element"         => true,
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
						

					array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Icon",
							"param_name" => "icon",
							"value"      => $flaticons,
						),))
					);


/*
Wellcome2
*/
				vc_map(array(
		    		'name'                    => "Wellcome 2",
		    		'base'                    => "brick_welcome2",
		    		"as_parent"               => array('only' => 'brick_welcomeicon2'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		"js_view"                 => 'VcColumnView',
		    		'description'             => 'Add service',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "subtext",
							"value"      => ''
						),
						
		    		)
		    	));

				
				vc_map(array(
		    		'name'                    => "Wellcome Icon 2",
		    		'base'                    => "brick_welcomeicon2",
		    		"as_child"                => array('only' => 'brick_welcome2'),
		    		"content_element"         => true,
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
						

					array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Icon",
							"param_name" => "icon",
							"value"      => $flaticons,
						),))
					);



/*
Dropbox
*/
				vc_map(array(
		    		'name'                    => "Dropbox",
		    		'base'                    => "brick_dropbox",
		    		"as_parent"               => array('only' => 'brick_dropboxicon'),
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		"js_view"                 => 'VcColumnView',
		    		'description'             => 'Add service',
		    		'params'                  => array(
						
						
						
		    		)
		    	));

				
				vc_map(array(
		    		'name'                    => "Dropbox Icon",
		    		'base'                    => "brick_dropboxicon",
		    		"as_child"                => array('only' => 'brick_dropbox'),
		    		"content_element"         => true,
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
						

					array(
							"type"       => "dropdown",
							"class"      => "",
							"heading"    => "Icon",
							"param_name" => "icon",
							"value"      => $flaticons,
						),))
					);

/*
Intersection
*/
					vc_map(array(
		    		'name'                    => "Intersection",
		    		'base'                    => "brick_intersection",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
		    			array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => 'title'
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => 'text'
						),

		    			)));






/*
big promo
*/
					vc_map(array(
		    		'name'                    => "Promo",
		    		'base'                    => "brick_promo",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => 'title'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => 'sub title'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title 1",
							"param_name" => "btntitle1",
							"value"      => 'title'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link 1",
							"param_name" => "btnlink1",
							"value"      => '#'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Title 2",
							"param_name" => "btntitle2",
							"value"      => 'title'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button Link 2",
							"param_name" => "btnlink2",
							"value"      => '#'
						),))
						
);

/*
big banner
*/
					vc_map(array(
		    		'name'                    => "Big Banner",
		    		'base'                    => "brick_bigbanner",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Text 1",
							"param_name" => "text1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Text 2",
							"param_name" => "text2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Text 3",
							"param_name" => "text3",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Text 4",
							"param_name" => "text4",
							"value"      => ''
						),))
						
);

/*
big banner
*/
					vc_map(array(
		    		'name'                    => "Big Video Intro",
		    		'base'                    => "brick_videointro",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => 'title'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => 'sub title'
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Embed Code",
							"param_name" => "iframe",
							"value"      => ''
						),
						))
						
);

/*
Our Location
*/
					vc_map(array(
		    		'name'                    => "Our Location",
		    		'base'                    => "brick_location",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Address Title",
							"param_name" => "addresstitle",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Address Text",
							"param_name" => "addresstext",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Address",
							"param_name" => "address",
							"value"      => ''
						),
						array(
		    				"type"       => "dropdown",
							"heading"    => "Contact Form 7",
							"param_name" => "cf7",
							"value"      => $cf7_forms
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Latitude",
							"param_name" => "latitude",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Longitude",
							"param_name" => "longitude",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Map Address Title",
							"param_name" => "mapaddresstitle",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Map Address",
							"param_name" => "mapaddress",
							"value"      => ''
						),
						))
						
);


/*
Our Location
*/
					vc_map(array(
		    		'name'                    => "Our Location2",
		    		'base'                    => "brick_location2",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Timing Title",
							"param_name" => "timingtitle",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Timing Title 1",
							"param_name" => "timingtitle1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Timing 1",
							"param_name" => "timing1",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Timing Title 2",
							"param_name" => "timingtitle2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Timing 2",
							"param_name" => "timing2",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Timing Title 3",
							"param_name" => "timingtitle3",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Timing 3",
							"param_name" => "timing3",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Address Title",
							"param_name" => "addresstitle",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Address Text",
							"param_name" => "addresstext",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Address",
							"param_name" => "address",
							"value"      => ''
						),
						array(
		    				"type"       => "dropdown",
							"heading"    => "Contact Form 7",
							"param_name" => "cf7",
							"value"      => $cf7_forms
						),

						array(
		    				"type"       => "textfield",
							"heading"    => "Latitude",
							"param_name" => "latitude",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Longitude",
							"param_name" => "longitude",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Map Address Title",
							"param_name" => "mapaddresstitle",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Map Address",
							"param_name" => "mapaddress",
							"value"      => ''
						),
						))
						
);

/*
Title
*/
					vc_map(array(
		    		'name'                    => "Title",
		    		'base'                    => "brick_title",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "sub_title",
							"value"      => ''
						),
						)));

/*
gap
*/
					vc_map(array(
		    		'name'                    => "Gap",
		    		'base'                    => "brick_gap",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						
						)));
/*
Joining
*/
					vc_map(array(
		    		'name'                    => "Joining",
		    		'base'                    => "brick_joining",
		    		
		    		"content_element"         => true,
		    		'params'                  => array(
		    			
		    			array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						array(
		    				"type"       => "textarea",
							"heading"    => "Text",
							"param_name" => "text",
							"value"      => ''
						),
		    			array(
							"type"       => "textarea",
							"heading"    => "Rows",
							"param_name" => "content",
							"value"      => '',
							'description' => 'Use line break (press Enter) to separate between items',
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button link",
							"param_name" => "link",
							"value"      => '#'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button text",
							"param_name" => "button_text",
							"value"      => 'Submit now'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button link 2",
							"param_name" => "link2",
							"value"      => '#'
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Button text 2",
							"param_name" => "button_text2",
							"value"      => 'Submit now'
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image1",
							"value"      => ""
						),
						
		    		)
		    	));

/*
New Products
*/

			vc_map(array(
		    		'name'                    => "New Products",
		    		'base'                    => "brick_rproducts",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						
						)));

/*
Blog News
*/

			vc_map(array(
		    		'name'                    => "Latest Posts",
		    		'base'                    => "brick_blog_n_news",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						
						)));
/*
Blog News slider
*/

			vc_map(array(
		    		'name'                    => "Latest Posts Slider",
		    		'base'                    => "brick_blog_n_news_slider",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						
						)));
			/*
Blog News v3
*/

			vc_map(array(
		    		'name'                    => "Latest Posts v3",
		    		'base'                    => "brick_blog_n_newsv3",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtitle",
							"value"      => ''
						),
						
						)));
/*
Blog gallery slider
*/

			vc_map(array(
		    		'name'                    => "Gallery v2",
		    		'base'                    => "brick_galleryv2",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						

						)));

/*
BMI Calculator
*/

			vc_map(array(
		    		'name'                    => "BMI Calculator",
		    		'base'                    => "brick_bmical",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						
						)));
/*
Our team bg
*/

			vc_map(array(
		    		'name'                    => "Our team Background",
		    		'base'                    => "brick_ourteambg",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtext",
							"value"      => ''
						),
						array(
							"type"       => "attach_image",
							"class"      => "",
							"heading"    => "Image",
							"param_name" => "image1",
							"value"      => ""
						),
						
						)));
/*
Our team bg
*/

			vc_map(array(
		    		'name'                    => "Slogan",
		    		'base'                    => "brick_slogan2",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						array(
		    				"type"       => "textfield",
							"heading"    => "Title",
							"param_name" => "title",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Sub Title",
							"param_name" => "subtext",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "ButtonTitle",
							"param_name" => "btntitle",
							"value"      => ''
						),
						array(
		    				"type"       => "textfield",
							"heading"    => "Link",
							"param_name" => "btnlink",
							"value"      => ''
						),
						
						)));
/*
BMI Calculator
*/

			vc_map(array(
		    		'name'                    => "Trainer Page Slider",
		    		'base'                    => "brick_trainerpage",
		    		
		    		"content_element"         => true,
		    		'class'                   => 'nz-pricing-table',
		    		'show_settings_on_create' => true,
		    		'category'                => esc_html__("Bricks",'brick'),
		    		'is_container'            => true,
		    		'icon'                    => 'icon-pricing-table',
		    		
		    		'description'             => '',
		    		'params'                  => array(
						
						
						)));


		if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
		    class WPBakeryShortCode_brick_ourmissions extends WPBakeryShortCodesContainer {}
		    class WPBakeryShortCode_brick_Testimonials extends WPBakeryShortCodesContainer {}
		    class WPBakeryShortCode_brick_Pricing_Table extends WPBakeryShortCodesContainer {}
		    class WPBakeryShortCode_brick_Pricing_Tablev2 extends WPBakeryShortCodesContainer {}
		    class WPBakeryShortCode_brick_abouticons extends WPBakeryShortCodesContainer {}
		    class WPBakeryShortCode_brick_dropbox extends WPBakeryShortCodesContainer {}
		    class WPBakeryShortCode_brick_services extends WPBakeryShortCodesContainer {}
		    class WPBakeryShortCode_brick_welcome2 extends WPBakeryShortCodesContainer {}
		    class WPBakeryShortCode_brick_welcome extends WPBakeryShortCodesContainer {}
		    class WPBakeryShortCode_brick_advantages extends WPBakeryShortCodesContainer {}

		   
		}

		if ( class_exists( 'WPBakeryShortCode' ) ) {
		    class WPBakeryShortCode_brick_ourmission extends WPBakeryShortCode {}
		    class WPBakeryShortCode_brick_Testimonial extends WPBakeryShortCode {}
		    class WPBakeryShortCode_brick_Column extends WPBakeryShortCode {}
		    class WPBakeryShortCode_brick_Columnv2 extends WPBakeryShortCode {}
		    class WPBakeryShortCode_brick_abouticon extends WPBakeryShortCode {}
		    class WPBakeryShortCode_brick_dropboxicon extends WPBakeryShortCode {}
		    class WPBakeryShortCode_brick_service extends WPBakeryShortCode {}
		    class WPBakeryShortCode_brick_welcomeicon2 extends WPBakeryShortCode {}
		    class WPBakeryShortCode_brick_welcomeicon extends WPBakeryShortCode {}
		    class WPBakeryShortCode_brick_advantagesicon extends WPBakeryShortCode {}
		   
		}
}
 ?>