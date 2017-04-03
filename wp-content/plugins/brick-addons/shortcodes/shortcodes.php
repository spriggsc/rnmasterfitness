<?php 
function func_brick_title( $atts ) {
	$atts = shortcode_atts( array(
		'title' => 'Welcome in Brick Fitness',
		'sub_title' => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.'
	), $atts );

	$html = '<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$atts['title'].'</h2>
						<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
						<h4>'.$atts['sub_title'].'</h4>
					</div>
				</div>
				<div class="clearfix"></div>';
	return $html;
}
add_shortcode( 'brick_title','func_brick_title' );


function func_brick_gap( $atts ) {
	$atts = shortcode_atts( array(
		'default' => 'values'
	), $atts );
$html = '<div class="gap" style="height:80px;line-height:80px"></div>';

	// do shortcode actions here
}
add_shortcode( 'brick_gap','func_brick_gap' );

function func_brick_teaser_style_2( $atts ) {
	extract( shortcode_atts( array(
		'title' => 'Cardio Training',
		'image' => '',
		'text' => 'Praesent turpis mauris, aliquet id dolor <br>
							Gravida adipiscing lectus ut rutrum <br>
							Aenean at posuere risus.'
	), $atts ));
	$img2 = wp_get_attachment_image_src($image, 'full', false);
	$html = '<div class="col-sm-4 teaser-style-2 text-center">
						<div class="icon">
							<img src="'.$img2[0].'" alt="">
						</div>
						<div class="heading">
							'.$title.'
						</div>
						<div class="text">
							'.$text.'
						</div>
					</div>';
	return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_teaser_style_2','func_brick_teaser_style_2' );





function func_brick_ourstudio( $atts ) {
	extract(shortcode_atts( array(
		'images' => '',
		'image2' => '',
		'title' => 'Our Place',
		'subtitle' => 'The Coaches for all',
		'btntitle' => 'About Our Company ',
		'btnlink' => '#',
	), $atts ));

	$gal_images = "";
	$img2 = wp_get_attachment_image_src($image2, 'full', false);
	if (isset($images) && !empty($images)) {
			$images = explode( ',', $images );
			$i = - 1;

			if ($version == "carousel") {
				$columns = $columns_carousel;
				$img_size = $img_size_carousel;
			}

			foreach ( $images as $attach_id ) {
				$i ++;
				if ( $attach_id > 0 ) {
					$img = wp_get_attachment_image_src($attach_id,$img_size);
					$gal_images .= '<div class="item">
									<img src="'.$img[0].'" alt="">
								</div>';
				}

			}
		}

	$html='	<!-- our studio -->
	<div id="our-studio">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div id="home-v3-simple-owl-slider" class="simple-owl-slider-wrapper">
							<!-- simple-owl-slider -->
							<div class="simple-owl-slider">
								'.$gal_images.'
							</div><!-- .simple-owl-slider -->

							<!-- slider-nav -->
							<div class="slider-nav">
								<div class="owl-prev"><img src="'.get_stylesheet_directory_uri().'/images/left-arrow-light.png" alt=""></div>
								<div class="owl-next"><img src="'.get_stylesheet_directory_uri().'/images/right-arrow-light.png" alt=""></div>
							</div>
							<!-- .slider-nav -->
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="promo-box">
							<img class="promo-image" src="'.$img2[0].'" alt="">
							<div class="promo-content">
								<div class="heading">'.$title.'</div>
								<div class="subheading playfair-font uppercase">'.$subtitle.'</div>
								<div class="b-clear"><div class="separator"></div></div>
								<a href="'.$btnlink.'" class="btn promo-btn">'.$btntitle.'<span class="fa fa-long-arrow-right"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #our studio -->';
	return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_ourstudio','func_brick_ourstudio' );





function func_brick_checkout( $atts ) {
	$atts = shortcode_atts( array(
		'default' => 'values'
	), $atts );
	$html='<!-- checkout -->
	<div id="checkout">
		<div class="parallax" style="background-image:url(images/bg-classes.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="table-content well-table checkout">
							<div class="table-cell well-cell">
								<h4><b>Do you want to check all out features? All things are very nice and ready to customize!</b></h4>
							</div>
							<div class="table-cell well-cell">
								<div class="pull-right">
									<a href="#" class="btn well-button-large style-2">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #checkout -->';
	return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_checkout','func_brick_checkout' );


function func_brick_blog_n_news( $atts ) {
	extract(shortcode_atts(
			array(
				'title' =>'Recent Blog',
				'subtitle' => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
				'columns'          => '1',
				'posts_number'     => -1,
				'cat'              => '',
				'animate'          => 'false',
				'autoplay'          => 'false'
			), $atts)
		);

		global $post, $focuson_ninzio;
		$output = "";

		
		static $id_counter = 1;
		$html2 = '';
		$recent_posts = new WP_Query(array( 'orderby' => 'date', 'posts_per_page' => -1, 'cat' => $cat,'post_status' => 'publish','ignore_sticky_posts' => true));
			if($recent_posts->have_posts()){
	$html='<!-- blog -->
	<div id="blog">
		<div class="container">
			<div class="row ">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
						<h4>'.$subtitle.'</h4>
					</div>
				</div>
				<div class="col-sm-12">
					<div id="blog-slider-v1" class="blog-slider-wrapper carousel-with-button-outside with-margin">
						<!-- blog-slider -->
						<div class="blog-slider">';
								while($recent_posts->have_posts()) : $recent_posts->the_post();
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'brick_blogsliderhover');
								$large_image_url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'brick_blogslider');
						$html .= '<div class="blog-post">
									<div class="blog-post-content">
										<div class="transition-top">
											<div class="blog-post-thumbnail">
												'.get_the_post_thumbnail(get_the_id(),'brick_blogslider').'
												<img class="lazy-load-blog-image" src="'.$large_image_url[0].'" alt="">
												<a href="'.$large_image_url1[0].'" data-rel="prettyPhoto" class="mask">
													<span class="fa fa-chevron-right"></span>
												</a>
											</div>
											<div class="blog-info">
												<div class="title">
													<h4><a href="'.get_permalink().'">'.get_the_title().'</a></h4>
													<span><a href="#">'.get_the_date().'</a></span>
													<span> / </span>
													<span><a href="#">'.get_the_author().'</a></span>
													<span> / </span>
													<span><a href="'.get_comments_link().'">'.get_comments_number().'</a></span>
												</div>
											</div>
										</div>
										<div class="small-description">
											'.get_the_excerpt().'
										</div>
									</div>
								</div>';
									endwhile;
						$html .= '</div><!-- .blog-slider -->

						<!-- blog-slider nav -->
						<div class="blog-slider-nav carousel-nav">
							<div class="owl-prev"><i class="fa fa-long-arrow-left"></i></div>
							<div class="owl-next"><i class="fa fa-long-arrow-right"></i></div>
						</div>
						<!-- .blog-slider nav -->
					</div>
				</div>
			</div>
		</div>
	</div><!-- #blog -->';
	}
	return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_blog_n_news','func_brick_blog_n_news' );





function func_brick_blog_n_news_slider( $atts ) {
	extract(shortcode_atts(
			array(
				'columns'          => '1',
				'posts_number'     => '-1',
				'cat'              => '',
				'animate'          => 'false',
				'autoplay'          => 'false'
			), $atts)
		);

		
		$output = "";

		
		static $id_counter = 1;
		$html2 = '';
		$recent_posts = new WP_Query(array( 'orderby' => 'date', 'posts_per_page' => -1, 'cat' => $cat,'post_status' => 'publish','ignore_sticky_posts' => true));
			if($recent_posts->have_posts()){
	$html='	<!-- blog-n-news -->
	<div id="blog-n-news">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="blog-post-slider-v2-wrapper">
							<div class="blog-post-slider-v2-wrapper-with-nav">
								<!-- blog-content -->
								<div id="home-v3-blog-post-slider-1" class="blog-post-slider-v2">';
								while($recent_posts->have_posts()) : $recent_posts->the_post();

						$html .= '
									<div class="blog-item">
										'.get_the_post_thumbnail(get_the_id(),'brick_blogsliderv3').'
										<div class="blog-content">
											<h1><a href="'.get_permalink().'">'.get_the_title().'</a></h1>
											<p>'.get_the_excerpt().'</p>
											<a href="'.get_permalink().'" class="btn btn-large-style-2">Read More</a>
										</div>
									</div>
									';
									$html2 .= '<div class="thumb-item">
											<div class="thumb-image-wrapper">
												'.get_the_post_thumbnail(get_the_id(),'brick_blogsliderv3thumb').'
											</div>
										</div>';
									endwhile;
						$html .= '		</div>
								<!-- .blog-content -->

								<!-- nav container -->
								<div id="home-v3-blog-post-slider-nav" class="nav-container"></div>
								<!-- .nav container -->
							</div>

							<!-- thubnails -->
							<div class="thumbnails-wrapper">
								<div class="wrapper-inner">
									<div id="home-v3-blog-post-slider-2" class="blog-post-slider-v2-thumbnails">
										'.$html2.'
									</div>
									<div id="home-v3-blog-post-slider-thumbs-nav" class="blog-slider-thumbs-nav"></div>
								</div>
							</div>
							<!-- .thubnails -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #blog-n-news -->';
	}
	return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_blog_n_news_slider','func_brick_blog_n_news_slider' );




function func_brick_blog_n_newsv3( $atts ) {
	extract(shortcode_atts(
			array(
				'title' =>'Recent Blog',
				'subtitle' => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
				'columns'          => '1',
				'posts_number'     => -1,
				'cat'              => '',
				'animate'          => 'false',
				'autoplay'          => 'false'
			), $atts)
		);

		global $post, $focuson_ninzio;
		$output = "";

		
		static $id_counter = 1;
		$html2 = '';
		$recent_posts = new WP_Query(array( 'orderby' => 'date', 'posts_per_page' => -1, 'cat' => $cat,'post_status' => 'publish','ignore_sticky_posts' => true));
			if($recent_posts->have_posts()){
	$html='<!-- latest-blog -->
	<div id="latest-blog">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
						<h4>'.$subtitle.'</h4>
					</div>
				</div>

				<div class="col-sm-12">
					<div id="home-v5-blog-slider" class="blog-slider-wrapper-2 carousel-with-button-outside with-margin">
						<!-- blog-slider -->
						<div class="blog-slider-style-2">';
								while($recent_posts->have_posts()) : $recent_posts->the_post();
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'brick_blogsliderhover');
								$large_image_url1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'brick_blogslider');
						$html .= '<div class="blog-post">
								<div class="blog-image-n-meta">
								<a href="'.get_permalink().'">'.get_the_post_thumbnail(get_the_id(),'brick_blogslider').'</a>
								<div class="post-format-n-date">
    <span class="post-format"><a href="'.get_permalink().'"><i class="fa fa-image"></i></a></span>
   
    <span class="post-date"><a href="'.get_permalink().'"><span class="date">'.get_the_time('d').'</span><span class="month">'.get_the_time('M').'</span></a></span>
											</div>
											</div>

								<div class="blog-content">
									<h4><a href="'.get_permalink().'">'.get_the_title().'</a></h4>
									<div class="post-meta">
													<span><a href="#">'.get_the_date().'</a></span>
													<span> / </span>
													<span><a href="#">'.get_the_author().'</a></span>
													<span> / </span>
													<span><a href="'.get_comments_link().'">'.get_comments_number().'</a></span>
												</div>
											</div>
										</div>
										
									';
									endwhile;
						$html .= '</div><!-- .blog-slider -->

						<!-- blog-slider nav -->
						<div class="blog-slider-nav carousel-nav">
							<div class="owl-prev"><i class="fa fa-long-arrow-left"></i></div>
							<div class="owl-next"><i class="fa fa-long-arrow-right"></i></div>
						</div>
						<!-- .blog-slider nav -->
					</div>
				</div>
			</div>
		</div>
	</div><!-- #latest-blog -->';
	}
	return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_blog_n_newsv3','func_brick_blog_n_newsv3' );




/*  PRICING TABLE
/*===================*/
	
	function brick_pricing_table($atts, $content = null, $tag) {

		extract(shortcode_atts(
			array(
				'columns' => '3',
				'animate' => 'none',
				'title' =>'Price Packages',
				'subtitle' => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
			), $atts)
		);

		$output = '';

		$data_animate = 'false';

		if ($animate != "none") {
			$data_animate = 'true';
		}	

		static $id_counter = 1;

		$output .= '<!-- packages -->
					<div id="packages">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="shortcode-title-with-seperator text-center">
										<h2>'.$title.'</h2>
										<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
										<h4>'.$subtitle.'</h4>
									</div>
								</div>

								<!-- price-tables -->
								<div class="clearfix price-tables style-1">';
							$output .= do_shortcode($content);
						$output .= '</div>
							</div>
						</div>
					</div><!-- #packages -->';

		$id_counter++;

		return $output;
	}

	add_shortcode('brick_pricing_table', 'brick_pricing_table');

	function brick_column($atts, $content = null) {

		global $focuson_ninzio;

		extract(shortcode_atts(
			array(
				'high'        => 'false',
				'hlabel'      => '',
				'color'   	  => $GLOBALS['focuson_ninzio']['main-color'],
				'price'       => '$ 29.99',
				'tariff'      => '/m',
				'title'       => 'Column title',
				'button_text' => 'Join Now',
				'link'        => '#',
			), $atts)
		);

		$output = '';
		$styles = "";
		static $id_counter = 1;

		if (isset($color) && !empty($color)) {
			$styles.= '#nz-column-'.$id_counter.' .price {color:'.$color.';}';
			$styles.= '#nz-column-'.$id_counter.' .title:after {border-bottom: 3em solid '.$color.';}';
			$styles.= '#nz-column-'.$id_counter.' .pricing {border-bottom: 3px solid '.$color.';}';
			$styles.= '#nz-column-'.$id_counter.'.highlight-true .title:after {border-bottom: 3em solid '.focuson_ninzio_hex_to_rgb_shade($color,20).';}';
			$styles.= '#nz-column-'.$id_counter.'.highlight-true .pricing {background-color:'.$color.';}';
			
			$styles.= '#nz-column-'.$id_counter.'.highlight-true .button {
				background: '.$color.';
				background: -moz-linear-gradient(top,  '.$color.' 0%, '.focuson_ninzio_hex_to_rgb_shade($color,20).' 100%);
				background: -webkit-linear-gradient(top,  '.$color.' 0%,'.focuson_ninzio_hex_to_rgb_shade($color,20).' 100%);
				background: linear-gradient(to bottom,  '.$color.' 0%,'.focuson_ninzio_hex_to_rgb_shade($color,20).' 100%);
			}';

			$styles.= '#nz-column-'.$id_counter.'.highlight-true .button:hover {
				background: '.$color.';
				background: -moz-linear-gradient(top,  '.$color.' 0%, '.focuson_ninzio_hex_to_rgb_shade($color,30).' 100%);
				background: -webkit-linear-gradient(top,  '.$color.' 0%,'.focuson_ninzio_hex_to_rgb_shade($color,30).' 100%);
				background: linear-gradient(to bottom,  '.$color.' 0%,'.focuson_ninzio_hex_to_rgb_shade($color,30).' 100%);
			}';

			$styles.= '#nz-column-'.$id_counter.'.highlight-true .hlabel {color:'.focuson_ninzio_hex_to_rgb_shade($color,50).';}';
		}

		
		$output .= '<div class="col-sm-6 col-md-3 price-table">
						<div class="text-center price-table-content">
							<div class="title">
								'.esc_html($title).'
							</div>
							<div class="price-n-button">
								<div class="price">
									<span class="number">'.esc_html($price).'</span>
									<span class="per">'.esc_html($tariff).'</span>
								</div>
								<div class="daily">Daily <del>$4.99</del></div>
								<a href="'.esc_url($link).'" class="btn price-table-btn">'.esc_html($button_text).'</a>
							</div>';
							
							if (isset($content) && !empty($content)) {
					$output .='<ul class="features">';
						$split = preg_split("/(\r?\n)+|(<br\s*\/?>\s*)+/", $content);
						foreach($split as $haystack) {
			                $output .= '<li> ' . $haystack . '</li>';
			            }
		            $output .='</ul>';
				}
								
						$output .='</div>
					</div>';
		$id_counter++;

		return $output;
	}

	add_shortcode('brick_column', 'brick_column');



	function brick_pricing_tablev2($atts, $content = null, $tag) {

		extract(shortcode_atts(
			array(
				'columns' => '3',
				'animate' => 'none',
				'title' =>'Price Packages',
				'subtitle' => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
			), $atts)
		);

		$output = '';

		$data_animate = 'false';

		if ($animate != "none") {
			$data_animate = 'true';
		}	

		static $id_counter = 1;

		$output .= '<!-- packages -->
	<div id="packages">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
										<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
										<h4>'.$subtitle.'</h4>
									</div>
								</div>

								<!-- price-tables -->
								<div class="clearfix price-tables style-2">';
							$output .= do_shortcode($content);
						$output .= '</div>
							</div>
						</div>
					</div><!-- #packages -->';

		$id_counter++;

		return $output;
	}

	add_shortcode('brick_pricing_tablev2', 'brick_pricing_tablev2');

	function brick_columnv2($atts, $content = null) {

		global $focuson_ninzio;

		extract(shortcode_atts(
			array(
				'high'        => 'false',
				'hlabel'      => '',
				'color'   	  => $GLOBALS['focuson_ninzio']['main-color'],
				'price'       => '29.99',
				'tariff'      => 'PER MONTH',
				'title'       => 'Column title',
				'button_text' => 'Join Now',
				'link'        => '#',
			), $atts)
		);

		$output = '';
		$styles = "";
		static $id_counter = 1;

		if (isset($color) && !empty($color)) {
			$styles.= '#nz-column-'.$id_counter.' .price {color:'.$color.';}';
			$styles.= '#nz-column-'.$id_counter.' .title:after {border-bottom: 3em solid '.$color.';}';
			$styles.= '#nz-column-'.$id_counter.' .pricing {border-bottom: 3px solid '.$color.';}';
			$styles.= '#nz-column-'.$id_counter.'.highlight-true .title:after {border-bottom: 3em solid '.focuson_ninzio_hex_to_rgb_shade($color,20).';}';
			$styles.= '#nz-column-'.$id_counter.'.highlight-true .pricing {background-color:'.$color.';}';
			
			$styles.= '#nz-column-'.$id_counter.'.highlight-true .button {
				background: '.$color.';
				background: -moz-linear-gradient(top,  '.$color.' 0%, '.focuson_ninzio_hex_to_rgb_shade($color,20).' 100%);
				background: -webkit-linear-gradient(top,  '.$color.' 0%,'.focuson_ninzio_hex_to_rgb_shade($color,20).' 100%);
				background: linear-gradient(to bottom,  '.$color.' 0%,'.focuson_ninzio_hex_to_rgb_shade($color,20).' 100%);
			}';

			$styles.= '#nz-column-'.$id_counter.'.highlight-true .button:hover {
				background: '.$color.';
				background: -moz-linear-gradient(top,  '.$color.' 0%, '.focuson_ninzio_hex_to_rgb_shade($color,30).' 100%);
				background: -webkit-linear-gradient(top,  '.$color.' 0%,'.focuson_ninzio_hex_to_rgb_shade($color,30).' 100%);
				background: linear-gradient(to bottom,  '.$color.' 0%,'.focuson_ninzio_hex_to_rgb_shade($color,30).' 100%);
			}';

			$styles.= '#nz-column-'.$id_counter.'.highlight-true .hlabel {color:'.focuson_ninzio_hex_to_rgb_shade($color,50).';}';
		}

		
		
					$output .='<div class="col-sm-6 col-md-3 price-table">
						<div class="text-center price-table-content">
							<div class="title">
								'.esc_html($title).'
							</div>
							<div class="price-n-button">
								<div class="price">
									<span class="number">'.esc_html($price).'</span>
									<span class="per">'.esc_html($tariff).'</span>
								</div>
								<div class="daily">Daily <del>$4.99</del></div>
								<a href="'.esc_url($link).'" class="btn price-table-btn">'.esc_html($button_text).'</a>
							</div>';
							
							if (isset($content) && !empty($content)) {
					$output .='<ul class="features">';
						$split = preg_split("/(\r?\n)+|(<br\s*\/?>\s*)+/", $content);
						foreach($split as $haystack) {
			                $output .= '<li> ' . $haystack . '</li>';
			            }
		            $output .='</ul>';
				}
								
						$output .='</div>
					</div>';
		$id_counter++;

		return $output;
	}

	add_shortcode('brick_columnv2', 'brick_columnv2');

/*  TESTIMONIALS
/*===================*/
	
	function brick_testimonials($atts, $content = null) {

		extract(shortcode_atts(
			array(
				'title'  => 'Why People <i class="fa fa-heart"></i> Love us?',
			), $atts)
		);

		static $id_counter = 1;

		$output = "";
		$output .= '<!-- testimonial -->
	<div id="testimonial-2">
		<div class="parallax">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="testimonial-2-heading text-center">
							<h1>'.$title.'</h1>
						</div>
					</div>
					<div class="col-sm-12">
						<div id="home-v2-testimonial-slider" class="testimonial-slider-nav-outside">
							<!-- testimonial slider -->
							<div class="testimonial-slider testimonial-slider-style-2 with-dot with-nav text-center">';
			$output .= do_shortcode($content);
		$output .= '</div><!-- .testimonial slider -->

							<!-- testimonial slider nav -->
							<div class="testimonial-slider-nav">
								<div class="owl-prev"><i class="fa fa-angle-left"></i></div>
								<div class="owl-next"><i class="fa fa-angle-right"></i></div>
							</div>
							<!-- testimonial slider nav -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #testimonial -->';

		$id_counter++;

		return $output;
	}
	add_shortcode('brick_testimonials', 'brick_testimonials');

	function brick_testimonial($atts, $content = null) {

		extract(shortcode_atts(
			array(
				'img'      => '',
				'name'     => 'Jhone',
				'title'  => 'Manager'
			), $atts)
		);

		$output = '';

		if (isset($img) && !empty($img)) {
			$img_ats = wp_get_attachment_image_src($img, 'full');
			$img     =  $img_ats[0];
		}

		

			$output .= '<div class="testimonial">
									<div class="client-avatar">';
									if (isset($img) && !empty($img)) {
					$output .= '<img src="'.esc_url($img).'" alt="'.esc_attr($name).'" />';
				}
										
									$output .= '</div>
									<div class="comment">
										'.esc_html(strip_tags($content)).'
									</div>
									<div class="client-title">
										<span class="name">'.esc_html($name).'</span>
										<span class="profession">'.esc_html($title).'</span>
									</div>
								</div>';

		

		return $output;
	}
	add_shortcode('brick_testimonial', 'brick_testimonial');



	/*  GALLERY SHORTCODE
/*===================*/
	
	add_shortcode('brick_gallery', 'brick_gallery');

	function brick_gallery($attr) {


		extract(shortcode_atts(array(
			
			'columns'    => 3,
			'width'       => 'fullscreen',
			
		), $attr, 'gallery'));
		$fullcontainer= '';	
		$closetag = '</div>';	
		if ($width == 'fullscreen') {
			$fullcontainer = '</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">';
			$closetag = '';
		}
		$navs = '<li><button class="filter" data-filter="all">All</button></li>';
		$galimages = '';
		$columns = intval($columns);
		$recent_posts = new WP_Query(array('post_type' => 'brick_gallery', 'orderby' => 'date', 'posts_per_page' => absint($posts_number), 'cat' => $cat,'post_status' => 'publish','ignore_sticky_posts' => true));
			if($recent_posts->have_posts()){
				$output = '<!-- page-content -->
							<div id="page-content">
								<div class="container">
									<div class="row">
										<div class="col-sm-12">
											<div class="table-content gallery-filter-nav">
												<div class="table-cell v-align-middle">
													<ul class="b-clear nav">';
				while ($recent_posts->have_posts()) {
					
				
				$recent_posts->the_post();
				$navs .= '<li><button class="filter" data-filter=".'.brick_the_slug().'">'.get_the_title().'</button></li>';
											
				$entries = get_post_meta( get_the_ID(), 'gallery_image_group', true );

				foreach ( (array) $entries as $key => $entry ) {

				    $img = $title = $desc = $caption = '';

				    if ( isset( $entry['title'] ) ) {
				        $title = esc_html( $entry['title'] );
				    }


				    if ( isset( $entry['image'] ) ) {
				        $img = wp_get_attachment_image( $entry['image'], 'share-pick', null, array(
				            'class' => 'thumb',
				        ) );
				    }

					    $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';

						$galimages .= '<div class="mix gallery-item '.brick_the_slug().'">
											<div class="gallery-image-wrapper">
												<div class="gallery-image">
													<img src="'.$entry['image'].'" alt="image"> 
												</div>
											</div>
											<div class="gallery-info text-center">
												<h4><a href="#">'.$title.'</a></h4>
												<span><a href="#">'.$entry['image_caption'].'</a></span>
											</div>
										</div>';
					    // Do something with the data
					}
					}
					}
					$output .= $navs.'</ul>
										</div>
											
										</div>
										'.$fullcontainer.'<div class="gallery-archive-style-5 gallery-filters gallery-column-'.$columns.'">'.$galimages;
					$output .= $closetag.'</div>
								</div>
							</div>
						</div><!-- #page-content -->';										
		return $output;
	}




add_shortcode('brick_galleryv2', 'brick_galleryv2');

	function brick_galleryv2($attr) {


		extract(shortcode_atts(array(
			
			'columns'    => 3,
			'width'       => 'fullscreen',
			
		), $attr, 'gallery'));
		$fullcontainer= '';	
		$closetag = '</div>';	
		if ($width == 'fullscreen') {
			$fullcontainer = '</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">';
			$closetag = '';
		}
		
		$galimages = '';
		$columns = intval($columns);
		$recent_posts = new WP_Query(array('post_type' => 'brick_gallery', 'orderby' => 'date', 'posts_per_page' => -1, 'post_status' => 'publish','ignore_sticky_posts' => true));
			if($recent_posts->have_posts()){
				$output = '<div id="gallery-slider">
		<div class="container-fluid">
			<div class="row">
				<div id="home-v1-gallery-slider" class="full-width-carousel">
					<!-- gallery-slider -->
					<div class="b-clear gallery-slider gallery-slider-style-1">
						';
				while ($recent_posts->have_posts()) {
					
				
				$recent_posts->the_post();
				
											
				$entries = get_post_meta( get_the_ID(), 'gallery_image_group', true );

				foreach ( (array) $entries as $key => $entry ) {

				    $img = $title = $desc = $caption = '';

				    if ( isset( $entry['title'] ) ) {
				        $title = esc_html( $entry['title'] );
				    }


				    if ( isset( $entry['image'] ) ) {
				        $img = wp_get_attachment_image( $entry['image'], 'share-pick', null, array(
				            'class' => 'thumb',
				        ) );
				    }

					    $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';

					$output .= '<div class="gallery-column"><div class="gallery-item">
										<div class="gallery-item-wrapper">
											<div class="gallery-info">
												<div class="gallery-table text-center">
													<div class="gallery-table-content">
														<h4><a href="#">'.$title.'</a></h4>
														<span class="date">'.$entry['image_caption'].'</span>
													</div>
												</div>
											</div>
											<div class="gallery-image">
												<img src="'.$entry['image'].'" alt="gal">
											</div>
											<div class="mask"></div>
										</div>
									</div></div>';
					    // Do something with the data
					}
					}
					}
					$output .= '
					</div><!-- .gallery-slider -->

					<!-- gallery-slider-nav -->
					<div class="full-width-carousel-nav">
						<div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
						<div class="owl-next"><i class="fa fa-chevron-right"></i></div>
					</div>
					<!-- gallery-slider-nav -->
				</div>
			</div>
		</div>
	</div><!-- #gallery-slider -->';										
		return $output;
	}

/*  RECENT PRODUCTS
/*===================*/

	function brick_rproducts($atts, $content = null) {

		extract(shortcode_atts(
			array(
				'title' =>'New Products',
				'subtitle' => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
				'posts_number'     => '3',
				'cat'              => '',
				'pr'               => '',
				'animate'          => 'false',
				'columns'          => '1'
			), $atts)
		);

		global $post;

		$output           = "";
		static $id_counter = 1;

		if (class_exists('Woocommerce')){

			if(!is_numeric($posts_number) || !isset($posts_number) || empty($posts_number) || $posts_number < 0) {
				$posts_number = 3;
			}

			if (isset($cat) && !empty($cat)) {

				if (isset($pr) && !empty($pr)) {
					$recent_query_opt = array( 
						'orderby'            => 'date', 
						'post_type'          => 'product', 
						'posts_per_page'     => -1,
						'post__in'           => explode(',',$pr),
						'tax_query'          => array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'id',
								'terms'    => explode(',',$cat),
								'operator' => 'IN'
							)
						)
					);
				} else {
					$recent_query_opt = array( 
						'orderby'            => 'date', 
						'post_type'          => 'product', 
						'posts_per_page'     => -1,
						'tax_query'          => array(
							array(
								'taxonomy' => 'product_cat',
								'field'    => 'id',
								'terms'    => explode(',',$cat),
								'operator' => 'IN'
							)
						)
					);
				}

			} else {

				if (isset($pr) && !empty($pr)) {

					$recent_query_opt = array( 
						'orderby'            => 'date', 
						'post_type'          => 'product', 
						'posts_per_page'     => -1,
						'post__in'           => explode(',',$pr)
					);

				} else {

					$recent_query_opt = array( 
						'orderby'            => 'date', 
						'post_type'          => 'product', 
						'posts_per_page'     => -1
					);

				}
				
			}

			$recent_products = new WP_Query($recent_query_opt);

			if($recent_products->have_posts()){

					$output .= '<!-- products -->
	<div id="products">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
						<h4>'.$subtitle.'</h4>
					</div>
				</div>

				<div class="col-sm-12">
					<div id="new-products" class="product-slider-wrapper carousel-with-button-outside with-margin">
						<!-- product-slider -->
						<ul class="products grid product-slider">';
							
						
							while($recent_products->have_posts()) : $recent_products->the_post();

								$output .= '<li class="product hover-effect-1">';
									global $product;
									if ( $product->is_on_sale() ){
			                                $sale_price = get_post_meta( $product->id, '_price', true);
			                                $regular_price = get_post_meta( $product->id, '_regular_price', true);

			                                if (empty($regular_price)){ //then this is a variable product
			                                    $available_variations = $product->get_available_variations();
			                                    $variation_id=$available_variations[0]['variation_id'];
			                                    $variation= new WC_Product_Variation( $variation_id );
			                                    $regular_price = $variation ->regular_price;
			                                    $sale_price = $variation ->sale_price;
			                                }
			                                $sale = ceil(( ($regular_price - $sale_price) / $regular_price ) * 100);
			                            if ( !empty( $regular_price ) && !empty( $sale_price ) && $regular_price > $sale_price ) {
			                                $output .= apply_filters( 'woocommerce_sale_flash', '<span class="product-status onsale">-' . $sale . '%</span>', $post, $product );
			                            }
			                        }
									
										$output .= '<a href="'.get_permalink().'">';
										$output .= woocommerce_get_product_thumbnail();
											
									         $output .=   '<h3>'.get_the_title().'</h3>';
	            
	            
	       
		//$output .= '<div class="star-rating">'.$product->get_rating_html().'</div>'; 
		 $output .= '<span class="price">'.($product->get_price_html()).'</span>'; 
                  
               $output .=' </a>
                
                <div class="product-button">
                <a rel="nofollow" href="/bricks/shop/?add-to-cart='.esc_attr($product->id).'" data-quantity="1" data-product_id="'.esc_attr($product->id).'" data-product_sku="" class="product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart"><i class="fa fa-shopping-basket"></i>Add to cart</a>   
                  <!--<a href="#" class="add-to-cart"><i class="fa fa-shopping-basket"></i> Add to cart</a>-->
                  <a href="'.get_the_permalink().'" class="product-detail"><i class="fa fa-file-text-o"></i> View detail</a>
                </div>';
                if (function_exists('ph_quick_view')) {
                	//ph_quick_view();
                }
                
                $output .='<a href="#" class="ajax button quick-btn quick-view" pro_id="'.esc_attr($product->id).'" action="ph_quick_ajax_submit" title="Quick View">Quick View</a>';
									
								$output .= '</li>';

							endwhile;
							wp_reset_postdata();
						$output .= '</ul>';

					$output .= '<!-- product-slider nav -->
						<div class="product-slider-nav carousel-nav">
							<div class="owl-prev"><i class="fa fa-long-arrow-left"></i></div>
							<div class="owl-next"><i class="fa fa-long-arrow-right"></i></div>
						</div>
						<!-- .product-slider nav -->
					</div>
				</div>
			</div>
		</div>
	</div><!-- #products -->';

				$id_counter++;

				return $output;

			} else {
				return 'No Product Found';
			}

		} else {
			$output .= esc_html__('Please activate Woocommerce plugin', 'ninzio-addons');
		}
	}

	add_shortcode('brick_rproducts', 'brick_rproducts');
 
/*  Our Mission
/*===================*/
	
	function brick_ourmissions($atts, $content = null) {

		extract(shortcode_atts(
			array(
				
			), $atts)
		);

		static $id_counter = 1;

		$output = "";
		$output .= '<!-- our-mission -->
					<div id="our-mission">
						<div class="parallax">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="our-mission text-center">
											<div id="our-mission-slider" class="flexslider">
												<ul class="slides">';
												$output .= do_shortcode($content);
												$output .= '</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- #our-mission -->';

		$id_counter++;

		return $output;
	}
	add_shortcode('brick_ourmissions', 'brick_ourmissions');

	function brick_ourmission($atts, $content = null) {

		extract(shortcode_atts(
			array(
				'title'  => 'Take care of Your Body',
				'subtitle'  => 'Its the only Place Yo have to live',
				'subtext1'  => 'Nulla vehicula tortor scelerisque ultrices malesuada. Ut vel semper nisi, sed mattis leo. Nam eu magna eu nisl rutrum mattis ut sit amet tellus. Cras volutpat erat eu mauris vulputate, eget condimentum lectus pulvinar. Quisque hendrerit ut velit ut congue.',
				'subtext2'  => 'Donec vitae lorem eros. Aliquam aliquet viverra placerat. Vestibulum tincidunt odio et nisi lobortis ornare. Fusce molestie purus eget tellus vestibulum, nec interdum dolor viverra'
			), $atts)
		);

		$output = '';

		if (isset($img) && !empty($img)) {
			$img_ats = wp_get_attachment_image_src($img, 'full');
			$img     =  $img_ats[0];
		}

		$output .= '<li>
						<h2>'.$title.'</h2>
						<h1>'.$subtitle.'</h1>
						<p>'.$subtext1.'</p>
						<p><b><i>'.$subtext2.'</i></b></p>
					</li>';
		return $output;
	}
	add_shortcode('brick_ourmission', 'brick_ourmission');


/*  COUNTER
/*===================*/
	
	function brick_count($atts, $content = null) {

		extract(shortcode_atts(
			array(
				'value' => '360',
				'icon'  => 'flaticon-exercise-11',
				'title' => 'Title goes here', 
				'icon_color'  => '',
				'value_color' => '',
				'text_color'  => '' 
			), $atts)
		);

		$output = '';
		$styles  = '';
		static $id_counter = 1;

		if(!is_numeric($value) || $value < 0){$value = "";}

        $output .= '<div class="col-sm-3 col-md-3">
						<div class="counter-item text-center sm-margin-bottom">
							<div class="icon-count">
								<i class="glyph-icon '.esc_attr($icon).'"></i>
							</div>
							<div class="heading">'.esc_attr($title).'</div>
							<span class="counter" data-from="0" data-to="'.absint($value).'"></span>
						</div>
					</div>';
        	
        		
		return $output;
	}

	add_shortcode('brick_count', 'brick_count');

	function brick_counter($atts, $content = null) {

		extract(shortcode_atts(
			array(
				'columns' => '1'
			), $atts)
		);

		static $id_counter = 1;
		$output = '<!-- counter -->
					<div id="counter">
						<div class="parallax" style="background-image:url('.get_stylesheet_directory_uri().'/images/counter-parallax-bg.jpg)">
							<div class="container">
								<div class="row">'.do_shortcode($content).'</div>
							</div>
						</div>
					</div><!-- #counter -->';
		$id_counter++;

		return $output;
	}

	add_shortcode('brick_counter', 'brick_counter');



	/*  RECENT PROJECTS
/*===================*/

	function brick_trainerv1($atts, $content = null) {

		extract(shortcode_atts(
			array(
				'posts_number' => '3',
				'title'      => 'Our Trainers',
				'subtitle'          => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
				'layout'       => 'small-standard'
			), $atts)
		);

		global $post;

		$output        = "";
		$size          = 'Focuson-Ninzio-Half';
		static $id_counter = 1;

		

		

			$recent_query_opt = array( 
				'orderby'            => 'date', 
				'post_type'          => 'teammembers', 
				'posts_per_page'     => 4,
				
			);

		
		
		
		$recent_projects = new WP_Query($recent_query_opt);

			if($recent_projects->have_posts()){

					$output .= '<!-- trainers -->
	<div id="trainers">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
						<h4>'.$subtitle.'</h4>
					</div>
				</div>
				<div class="col-sm-12">
					<div id="home-v2-trainer-slider" class="trainers-slider-wrapper trainer-slider-style-1 trainer-slider-style-2 carousel-with-button-outside">
						<!-- trainer-slider -->
						<div class="b-clear trainer-slider">';

						
							while($recent_projects->have_posts()) : $recent_projects->the_post();
								$output .= '<div class="trainer">
								<div class="trainer-avatar">
									'.get_the_post_thumbnail().'
									<!--<a href="images/trainer/trainer-2-1.jpg" data-src="images/trainer" data-rel="prettyPhoto" class="mask"><img src="images/plus-big.png" alt=""></a>-->
								</div>
								<div class="trainer-info">
									<div class="title">
										<h4><a href="'.get_the_permalink().'">'.get_post_meta(get_the_ID(),'rname' , true ).'</a></h4>
										<span>'.get_post_meta(get_the_ID(),'expertin' , true ).'</span>
									</div>
								</div>
							</div>';

									
							endwhile;
						
						wp_reset_postdata();

					$output .= '</div><!-- .trainer-slider -->

						<!-- trainer-slider nav -->
						<div class="trainer-slider-nav carousel-nav">
							<div class="owl-prev"><i class="fa fa-long-arrow-left"></i></div>
							<div class="owl-next"><i class="fa fa-long-arrow-right"></i></div>
						</div>
						<!-- .trainer-slider nav -->
					</div>
				</div>
			</div>
		</div>
	</div><!-- #trainers -->';

				$id_counter++;

				return $output;

			} else {
				return ninzio_addons_not_found('projects');
			}
	}

	add_shortcode('brick_trainerv1', 'brick_trainerv1');



function func_brick_trainersv3( $atts ) {
	extract(shortcode_atts(
			array(
		'title'      => 'Meet Our Trainers',
		'subtitle'          => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
	), $atts ));


			$recent_query_opt = array( 
				'orderby'            => 'date', 
				'post_type'          => 'teammembers', 
				'posts_per_page'     => 4,
				
			); 

		
		
		
		$trainers = new WP_Query($recent_query_opt);

			if($trainers->have_posts()){
	$output='<!-- trainers slider -->
	<div id="trainers-slider">
		<div class="container-fluid">
			<div class="row">
				<div id="home-v4-trainer-slider" class="full-width-carousel trainer-slider-wrapper trainer-slider-style-3">
					<!-- trainer slider -->
					<div class="b-clear trainer-slider">';
				while($trainers->have_posts()) : $trainers->the_post();
					$fb = get_post_meta(get_the_ID(), 'facebook', true );
					$tw = get_post_meta(get_the_ID(), 'twitter', true );
					$gp = get_post_meta(get_the_ID(), 'gplus', true );						
					$dr = get_post_meta(get_the_ID(), 'dribbble', true );
					$li = get_post_meta(get_the_ID(), 'linkedin', true );
					$be = get_post_meta(get_the_ID(), 'behance', true );
					$pin = get_post_meta(get_the_ID(), 'pinterest', true );
					$output .= '
						<div class="trainer">
							<div class="trainer-avatar">
								<a href="#">'.get_the_post_thumbnail().'</a>
								<div class="social-links">';
								
								if (!empty($fb)) {
								$output .= '<a href="'.get_post_meta(get_the_ID(), 'facebook', true ).'"><i class="fa fa-facebook"></i></a>';
								}
								if (!empty($tw)) {
								$output .= '<a href="'.get_post_meta(get_the_ID(), 'twitter', true ).'"><i class="fa fa-twitter"></i></a>';
								}
								if (!empty($gp)) {
								$output .= '<a href="'.get_post_meta(get_the_ID(), 'gplus', true ).'"><i class="fa fa-google-plus"></i></a>';
								}
								if (!empty($dr)) {						
								$output .= '<a href="'.get_post_meta(get_the_ID(), 'dribbble', true ).'"><i class="fa fa-dribbble"></i></a>';
								}
								if (!empty($li)) {
								$output .= '<a href="'.get_post_meta(get_the_ID(), 'linkedin', true ).'"><i class="fa fa-linkedin"></i></a>';
								}
								if (!empty($be)) {
								$output .= '<a href="'.get_post_meta(get_the_ID(), 'behance', true ).'"><i class="fa fa-behance"></i></a>';
								}
								if (!empty($pin)) {
								$output .= '<a href="'.get_post_meta(get_the_ID(), 'pinterest', true ).'"><i class="fa fa-pinterest"></i></a>';
								}
								$output .= '</div>
							</div>
							<div class="trainer-info">
								<h3><a href="'.get_the_permalink().'">'.get_post_meta(get_the_ID(), 'rname', true ).'</a></h3>
								<span class="expertise">'.get_post_meta(get_the_ID(), 'expertin', true ).'</span>
							</div>
						</div>';
						endwhile;
						$output .='
					</div><!-- .trainer slider -->

					<!-- nav -->
					<div class="full-width-carousel-nav trainer-slider-nav">
						<div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
						<div class="owl-next"><i class="fa fa-chevron-right"></i></div>
					</div>
					<!-- nav -->
				</div>
			</div>
		</div>
	</div><!-- #trainers slider -->';
}
	return $output;
	// do shortcode actions here
}
add_shortcode( 'brick_trainersv3','func_brick_trainersv3' );


function func_brick_trainersv4( $atts ) {
	extract(shortcode_atts(
			array(
		'title'      => 'Meet Our Trainers',
		'subtitle'   => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
	), $atts ));


			$recent_query_opt = array( 
				'orderby'            => 'date', 
				'post_type'          => 'teammembers', 
				'posts_per_page'     => 4,
				
			); 

		
		
		
		$trainers = new WP_Query($recent_query_opt);

		$output = '<!-- trainers -->
	<div id="trainers">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
						<h4>'.$subtitle.'</h4>
					</div>
				</div>
				<div class="col-sm-12">
					<div id="home-v1-trainer-slider" class="trainers-slider-wrapper trainer-slider-style-1 carousel-with-button-outside with-margin">
						<!-- trainer-slider -->
						<div class="b-clear trainer-slider">';
						

			if($trainers->have_posts()){
	
				while($trainers->have_posts()) : $trainers->the_post();
					$fb = get_post_meta(get_the_ID(), 'facebook', true );
					$tw = get_post_meta(get_the_ID(), 'twitter', true );
					$gp = get_post_meta(get_the_ID(), 'gplus', true );						
					$dr = get_post_meta(get_the_ID(), 'dribbble', true );
					$li = get_post_meta(get_the_ID(), 'linkedin', true );
					$be = get_post_meta(get_the_ID(), 'behance', true );
					$pin = get_post_meta(get_the_ID(), 'pinterest', true );
					$output .= '<div class="trainer">
								<div class="trainer-avatar">
									'.get_the_post_thumbnail().'
									<a href="'.wp_get_attachment_url( get_post_thumbnail_id() ).'" data-rel="prettyPhoto" class="mask"><img src="'.get_stylesheet_directory_uri().'/images/plus-big.png" alt=""></a>
								</div>
								<div class="trainer-info">
									<div class="title">
										<h4><a href="'.get_the_permalink().'">'.get_post_meta(get_the_ID(), 'rname', true ).'</a></h4>
										<span>'.get_post_meta(get_the_ID(), 'expertin', true ).'</span>
									</div>
									<div class="social-links">
										<div class="social-links-wrapper">';
											if (!empty($fb)) {
								$output .='<a href="'.get_post_meta(get_the_ID(), 'facebook', true ).'"><i class="fa fa-facebook"></i></a>';
								}
								if (!empty($tw)) {
								$output .='<a href="'.get_post_meta(get_the_ID(), 'twitter', true ).'"><i class="fa fa-twitter"></i></a>';
								}
								if (!empty($gp)) {
								$output .='<a href="'.get_post_meta(get_the_ID(), 'gplus', true ).'"><i class="fa fa-google-plus"></i></a>';
								}
								if (!empty($dr)) {						
								$output .='<a href="'.get_post_meta(get_the_ID(), 'dribbble', true ).'"><i class="fa fa-dribbble"></i></a>';
								}
								if (!empty($li)) {
								$output .='<a href="'.get_post_meta(get_the_ID(), 'linkedin', true ).'"><i class="fa fa-linkedin"></i></a>';
								}
								if (!empty($be)) {
								$output .='<a href="'.get_post_meta(get_the_ID(), 'behance', true ).'"><i class="fa fa-behance"></i></a>';
								}
								if (!empty($pin)) {
								$output .='<a href="'.get_post_meta(get_the_ID(), 'pinterest', true ).'"><i class="fa fa-pinterest"></i></a>';
								}
								$output .='		</div>
									</div>
								</div>
							</div>';
						
						endwhile;
						$output .='</div><!-- .trainer-slider -->

						<!-- trainer-slider nav -->
						<div class="trainer-slider-nav carousel-nav">
							<div class="owl-prev"><i class="fa fa-long-arrow-left"></i></div>
							<div class="owl-next"><i class="fa fa-long-arrow-right"></i></div>
						</div>
						<!-- .trainer-slider nav -->
					</div>
				</div>
			</div>
		</div>
	</div><!-- #trainers -->';
}
	return $output;
	// do shortcode actions here
}
add_shortcode( 'brick_trainersv4','func_brick_trainersv4' );



	function func_brick_trainersv2( $atts ) {
	extract(shortcode_atts(
			array(
		'title'      => 'Meet Our Trainers',
		'subtitle'          => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
	), $atts ));


			$recent_query_opt = array( 
				'orderby'            => 'date', 
				'post_type'          => 'teammembers', 
				'posts_per_page'     => 4,
				
			); 

		
		
		
		$trainers = new WP_Query($recent_query_opt);

			if($trainers->have_posts()){
	$output='<!-- trainers -->
	<div id="trainers">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
						<h4>'.$subtitle.'</h4>
					</div>
				</div>

				<!-- trainers -->
				<div class="clearfix trainers">';
				while($trainers->have_posts()) : $trainers->the_post();

								$output .= '
					<div class="col-md-3 col-sm-6 trainer normal-style sm-margin-bottom">
						<div class="trainer-avatar">
							<a href="#">
								'.get_the_post_thumbnail().'
							</a>
						</div>
						<div class="trainer-info">
							<h4><a href="'.get_the_permalink().'">'.get_post_meta(get_the_ID(),'rname' , true ).'</a></h4>
							<span class="category"><a href="#">'.get_post_meta(get_the_ID(),'expertin' , true  ).'</a></span>
						</div>
					</div>';
				endwhile;	
				$output .= '</div>
			</div>
		</div>
	</div><!-- #trainers -->';}
	return $output;
	// do shortcode actions here
}
add_shortcode( 'brick_trainersv2','func_brick_trainersv2' );


function func_brick_trainerpage( $atts ) {
	$atts = shortcode_atts( array(
		'default' => 'values'
	), $atts );

	$recent_query_opt = array( 
				'orderby'            => 'date', 
				'post_type'          => 'teammembers', 
				'posts_per_page'     => -1,
				
			); 

		
		
		
		$trainers = new WP_Query($recent_query_opt);

			if($trainers->have_posts()){
	$output='<div id="trainers-slider">
			<div class="container-fluid">
				<div class="row">
					<div id="our-team-slider" class="full-width-carousel trainer-slider-wrapper trainer-slider-style-4">
						<!-- trainer slider -->
						<div class="b-clear trainer-slider">';
				while($trainers->have_posts()) : $trainers->the_post();
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_id()) );
								$output .= '
								<div class="trainer">
								<div class="trainer-avatar">
									'.get_the_post_thumbnail().'
									<a href="'.$feat_image.'" data-rel="prettyPhoto" class="mask">+</a>
								</div>
								<div class="trainer-info">
									<h4><a href="'.get_the_permalink().'">'.get_post_meta(get_the_ID(),'rname' , true ).'</a></h4>
									<span class="expertise">'.get_post_meta(get_the_ID(),'expertin' , true  ).'</span>
								</div>
							</div>';
				endwhile;	
				$output .= '</div><!-- .trainer slider -->

						<!-- nav -->
						<div class="full-width-carousel-nav">
							<div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
							<div class="owl-next"><i class="fa fa-chevron-right"></i></div>
						</div>
						<!-- nav -->
					</div>
				</div>
			</div>
		</div><!-- #trainers slider -->';}
	return $output;
}
add_shortcode( 'brick_trainerpage','func_brick_trainerpage' );


function func_brick_slogan2( $atts ) {
	extract(shortcode_atts( array(
		'title' => 'Brick, a leap forward a better future.',
		'subtitle' => 'One of the best Fitness Gym Center.',
		'btntitle' => 'Join Brick Today',
		'btnlink' => '#',
	), $atts ));

	$html = '<!-- slogan-2 -->
	<div id="slogan-2">
		<div class="parallax" style="background-image:url('.get_stylesheet_directory_uri().'/images/slogan-bg.png)">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center slogan-2">
							<h1 class="large">'.$title.'</h1>
							<h1 class="light">'.$subtitle.'</h1>
							<a class="btn well-button-large style-3" href="'.$btnlink.'">'.$btntitle.'</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #slogan-2 -->';
	return $html;
}
add_shortcode( 'brick_slogan2','func_brick_slogan2' );


/*
Gallery

function brick_galleryv1( $atts , $content ) {
	$atts = shortcode_atts( array(
		'default' => 'values'
	), $atts );
	$html = '<!-- gallery-slider -->
	<div id="gallery-slider">
		<div class="container-fluid">
			<div class="row">
				<div id="home-v2-gallery-slider" class="full-width-carousel">
					<!-- gallery-slider -->
					<div class="b-clear gallery-slider gallery-slider-style-2">';
					$html .= do_shortcode( $content );
	$html .= '</div><!-- .gallery-slider -->

					<!-- gallery-slider nav -->
					<div class="full-width-carousel-nav">
						<div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
						<div class="owl-next"><i class="fa fa-chevron-right"></i></div>
					</div>
					<!-- gallery-slider nav -->
				</div>
			</div>
		</div>
	</div><!-- #gallery-slider -->';
	return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_galleryv1','brick_galleryv1' );

function brick_galimagev1( $atts ) {
	extract(shortcode_atts( array(
		'imageurl' => '',
		'title' => 'AWSOME PHOTOGRAPHY',
		'subtitle' => 'Artworks Design',
	), $atts ));
	$image_output    = wp_get_attachment_image_src( $imageurl, 'full', false);
	$html = '<div class="gallery-item">
							<div class="gallery-image-wrapper">
								<div class="gallery-image">
									<img src="'.$image_output[0].'" alt="">
								</div>
								<div class="mask">
									<div class="mask-table">
										<div class="mask-table-cell">
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="'.$image_output[0].'" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="gallery-info text-center">
								<h4><a href="#">'.$title.'</a></h4>
								<span><a href="#">'.$subtitle.'</a></span>
							</div>
						</div>';
						return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_galimagev1','brick_galimagev1' );



function brick_galleryv2( $atts ) {
	$atts = shortcode_atts( array(
		'default' => 'values'
	), $atts );

	// do shortcode actions here
}
add_shortcode( 'brick_galleryv2','brick_galleryv2' );

function brick_galimagev2( $atts ) {
	extract(shortcode_atts( array(
		'imageurl' => 'values',
		'title' => 'AWSOME PHOTOGRAPHY',
		'subtitle' => 'Artworks Design',
	), $atts ));

	// do shortcode actions here
}
add_shortcode( 'brick_galimagev2','brick_galimagev2' );



function brick_galleryv3( $atts ) {
	$atts = shortcode_atts( array(
		'default' => 'values'
	), $atts );
	$html = '<!-- gallery-slider -->
	<div id="gallery-slider">
		<div class="container-fluid">
			<div class="row">
				<div id="home-v3-gallery-slider" class="full-width-carousel">
					<!-- gallery-slider -->
					<div class="b-clear gallery-slider gallery-slider-style-3">
						<div class="gallery-column">';
						$html .= do_shortcode( $content );
	$html .= '</div><!-- .gallery-slider -->

					<!-- gallery-slider nav -->
					<div class="full-width-carousel-nav">
						<div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
						<div class="owl-next"><i class="fa fa-chevron-right"></i></div>
					</div>
					<!-- gallery-slider nav -->
				</div>
			</div>
		</div>
	</div><!-- #gallery-slider -->';
	return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_galleryv3','brick_galleryv3' );

function brick_galimagev3( $atts ) {
	extract(shortcode_atts( array(
		'imageurl' => 'values',
		'title' => 'AWSOME PHOTOGRAPHY',
		'subtitle' => 'Artworks Design',
	), $atts ));
	$html = '<div class="gallery-item">
								<img class="gallery-image" src="images/gallery/gallery-3-1.jpg" alt="">
								<a href="images/gallery/gallery-3-1.jpg" data-rel="prettyPhoto" class="mask">
									<img alt="" src="images/plus-big.png">
								</a>
							<div class="gallery-info text-center">
								<h4><a href="#">'.$title.'</a></h4>
								<span><a href="#">'.$subtitle.'</a></span>
							</div>
						</div>';
						return $html;
	// do shortcode actions here
}
add_shortcode( 'brick_galimagev3','brick_galimagev3' );
*/


function func_brick_info( $atts ) {
	extract(shortcode_atts( array(
		'title' => 'DISCOVER OUR',
		'subtitle' => 'ADVANTAGES',
		'subtext' => 'Nullam rutrum mi nec velit euismod faucibus elementum vel sem. Vivamus eros ex, lacinia eu libero quis, feugiat dictum diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas nec condimentumenim. Donec luctus maximus sem.</p>
					
					Sed tincidunt ex tempor, facilisis tellus nec, viverra urna. Aliquam vel rutrum arcu. Nullam quis vestibulum diam.  Praesent cursus est in ullamcorper sollicitudin.',
		'subtitle1' => 'Nam Eget Lorem A Dolor',
		'subtext1' => 'Cras eu ornare nunc. Duis ultrices finibus diam,
										hendrerit feugiat risus. Nulla vitae fermentum
										ipsum, vel auctor libero.',
		'image1' => 'values',
		'subtitle2' => 'Dignissim Sit Amet Tortor',
		'subtext2' => 'Maecenas cursus felis non justo placerat, nec
										bibendum diam sollicitudin. Nulla eget lorem sit
										amet mauris imperdiet consectetur.',
		'image2' => 'values',
		'subtitle3' => 'Etiam Quis Pellentesque Risus',
		'subtext3' => 'Donec accumsan ac urna tristique sagittis. Nullam
										a laoreet massa. Vestibulum ante ipsum primis in
										faucibus orci luctus et ultrices posuere.',
		'image3' => 'values',
		'subtitle4' => 'Sed Cursus Lacus Nec Feugiat',
		'subtext4' => 'Ut porttitor erat eu turpis tempor, molestie
										ultricies risus ornare. Praesent laoreet suscipit
										urna.',
		'image4' => 'values',
	), $atts ));
	$image_output1    = wp_get_attachment_image_src( $image1, 'full', false);
	$image_output2    = wp_get_attachment_image_src( $image2, 'full', false);
	$image_output3    = wp_get_attachment_image_src( $image3, 'full', false);
	$image_output4    = wp_get_attachment_image_src( $image4, 'full', false);
	$output = '<!-- info -->
	<div id="info">
		<!-- info-top -->
		<div class="info-top">
			<div class="container">
				<div class="row info-top-wrapper">
					<div class="col-lg-8 col-md-12 content">
						<h4 class="colored"><b>'.$title.'</b></h4>
						<h1 class="large">'.$subtitle.'</h1>
						'.$subtext.'
					</div>
					<div class="col-lg-4 hidden-md hidden-sm hidden-xs info-top-bg"></div>
				</div>
			</div>
		</div><!-- .info-top -->

		<!-- info-bottom -->
		<div class="info-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="row">
							<div class="col-sm-6">
								<div class="teaser-style-6">
									<div class="icon">
										<img class="gym39-rotated" src="'.$image_output1[0].'" alt="">
									</div>
									<div class="teaser-content">
										<div class="heading">'.$subtitle1.'</div>
										<div class="text">'.$subtext1.'
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="teaser-style-6">
									<div class="icon">
										<img class="exercise62" src="'.$image_output2[0].'" alt="">
									</div>
									<div class="teaser-content">
										<div class="heading">'.$subtitle2.'</div>
										<div class="text">'.$subtext2.'
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="teaser-style-6">
									<div class="icon">
										<img class="boxer7" src="'.$image_output3[0].'" alt="">
									</div>
									<div class="teaser-content">
										<div class="heading">'.$subtitle3.'</div>
										<div class="text">'.$subtext3.'
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="teaser-style-6">
									<div class="icon">
										<img class="exercising3" src="'.$image_output4[0].'" alt="">
									</div>
									<div class="teaser-content">
										<div class="heading">'.$subtitle4.'</div>
										<div class="text">'.$subtext4.'
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .info-bottom -->
	</div><!-- #info -->';
	return $output;
}
add_shortcode( 'brick_info','func_brick_info' );


function func_brick_featured( $atts ) {
	extract(shortcode_atts( array(
		'image1' => '',
		'image2' => '',
		'image3' => '',
		'title1' => 'WE ARE BRICK GYM FITNES',
		'subtext1' => 'JOIS US',
		'subtext2' => 'FOR SUMMER 2016',
		'btntitle1' => ' Join Now',
		'btnlink1' => '#',
		'title2' => 'THE BEST FITNESS GYM',
		'subtext21' => 'Free Trial',
		
		'btntitle2' => ' Get Your Free Trial',
		'btnlink2' => '#',
		'title3' => 'THE BEST PRICES',
		'subtext31' => 'BRICK FITNESS',
		
		'btntitle3' => ' Check Prices',
		'btnlink3' => '#',

	), $atts ));
	$image_output1    = wp_get_attachment_image_src( $image1, 'full', false);
	$image_output2    = wp_get_attachment_image_src( $image2, 'full', false);
	$image_output3    = wp_get_attachment_image_src( $image3, 'full', false);
	$output = '<!-- featured -->
	<div id="featured">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="promo-box-style-2">
						<img alt="" src="'.$image_output1[0].'" class="promo-image">
						<div class="promo-content text-center">
							<div class="heading">'.$title1.'</div>
							<div class="large-heading">'.$subtext1.'</div>
							<div class="semi-large-heading">'.$subtext2.'</div>
							<a class="btn promo-btn" href="'.$btnlink1.'"><span class="fa fa-angle-right"></span>'.$btntitle1.'</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="promo-box-style-3 text-right">
						<img alt="" src="'.$image_output2[0].'" class="promo-image">
						<div class="promo-content">
							<div class="heading">'.$title2.'</div>
							<div class="large-heading" style="color: #fb1a5c;">'.$subtext21.'</div>
							<a class="btn promo-btn" href="'.$btnlink2.'" style="color: #fffe34;"><span class="fa fa-angle-right" style="color: #fff;"></span>'.$btntitle2.'</a>
						</div>
					</div>
					<div class="promo-box-style-3 text-left">
						<img alt="" src="'.$image_output3[0].'" class="promo-image">
						<div class="promo-content">
							<div class="heading">'.$title3.'</div>
							<div class="large-heading" style="color: #fd4ea4;">'.$subtext31.'</div>
							<a class="btn promo-btn" href="'.$btnlink3.'"><span class="fa fa-angle-right"></span>'.$btntitle3.'</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- featured -->';
	return $output;
	// do shortcode actions here
}
add_shortcode( 'brick_featured','func_brick_featured' );

function func_brick_blocks( $atts ) {
	extract(shortcode_atts( array(
		'title1' => 'men EQUIPMENTS',
		'subtext1' => 'Lorem ipsum dolor sit amet, consectetur adi 
							sollicitudin. Suspendisse pulvinar, velit nec pharetra  interdum, ante tellus ornare mi, et mollis 
							tellus neque vitae elit',
		'btntitle1' => 'Shop Now',
		'btnlink1'	=> '#',
		'title2' => 'Ladies EQUIPMENTS',
		'subtext2' => 'Lorem ipsum dolor sit amet, consectetur adi 
							sollicitudin. Suspendisse pulvinar, velit nec pharetra  interdum, ante tellus ornare mi, et mollis 
							tellus neque vitae elit',
		'btntitle2' => 'Shop Now',
		'btnlink2'	=> '#'
	), $atts ));

	$output = '<!-- two-blocks -->
	<div id="two-blocks">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="parallax man-block text-right">
							<h1 class="uppercase"><b>'.$title1.'</b></h1>
							<p>'.$subtext1.'</p>
							<a href="'.$btnlink1.'" class="btn well-button-large">'.$btntitle1.'</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="parallax woman-block text-left">
							<h1 class="uppercase"><b>'.$title2.'</b></h1>
							<p>'.$subtext2.'</p>
							<a href="'.$btnlink2.'" class="btn well-button-large">'.$btntitle2.'</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #two-blocks -->';

	return $output;
}
add_shortcode( 'brick_blocks','func_brick_blocks' );

function func_brick_offerbox( $atts ) {
	extract(shortcode_atts( array(
		'image1' => '',
		'image2' => '',
		
		'title1' => '20% off',
		
		
		'btntitle1' => 'Commercial Equipment',
		'btnlink1' => '#',
		'title2' => 'All over country',
		
		
		'btntitle2' => 'FREE SHIPPING',
		'btnlink2' => '#',
		
	), $atts ));
	$image_output1    = wp_get_attachment_image_src( $image1, 'full', false);
	$image_output2    = wp_get_attachment_image_src( $image2, 'full', false);
	$output = '<!-- offer-box -->
	<div id="offer-box">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="offer-box">
						<div class="offer-bg">
							<img src="'.$image_output1[0].'" alt="">
						</div>
						<div class="offer-content">
							<div class="top-content">
								<h4 class="uppercase"><b>'.$title1.'</b></h4>
							</div>
							<div class="bottom-content">
								<a href="'.$btnlink1.'" class="btn offer-btn uppercase">'.$btntitle1.'</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="offer-box">
						<div class="offer-bg">
							<img src="'.$image_output2[0].'" alt="">
						</div>
						<div class="offer-content">
							<div class="top-content">
								<h4 class="uppercase"><b>'.$title1.'</b></h4>
							</div>
							<div class="bottom-content">
								<a href="'.$btnlink2.'" class="btn offer-btn uppercase">'.$btntitle2.'</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #offer-box -->';
	return $output;
}
add_shortcode( 'brick_offerbox','func_brick_offerbox' );


function func_brick_subscription( $atts ) {
	extract( shortcode_atts( array(
		'title' => 'get register now and get discount',
		'text'  => 'Donec eu tristique felis. Duis augue mi, auctor ut purus et, dignissim aliquet quam. <br />
					register your email for news and special offers',
		'image1' => '',
		'form'    => ''
	), $atts ));
	$image_output1    = wp_get_attachment_image_src( $image1, 'full', false);
	$output = '<!-- subscribe form -->
				<div id="subscribe-form">
					<div class="parallax" style="background-image:url('.$image_output1[0].')">
						<div class="container-fluid">
							<div class="subscribe form-wrapper text-center">
								<h1>'.$title.'</h1>
								<p>'.$text.'</p>
								<div class="form">
									'.do_shortcode('[mc4wp_form id="'.$form.'"]').'
								</div>
							</div>
						</div>
					</div>
				</div><!-- #subscribe form -->';

	return $output;
}
add_shortcode( 'brick_subscription','func_brick_subscription' );



function func_brick_abouticons( $atts , $content ) {
	extract(shortcode_atts( array(
		'default' => 'values'
	), $atts ));

	$output = '<!-- about us -->
	<div id="about-us">
		<div class="container-fluid">
			<div class="row">
				';
				$output .= do_shortcode( $content );
				$output .= '</div>
		</div>
	</div><!-- #about us -->';
	return $output;
	// do shortcode actions here
}
add_shortcode( 'brick_abouticons','func_brick_abouticons' );


function func_brick_abouticon( $atts ) {
	extract(shortcode_atts( array(
		'icon' => 'flaticon-exercise',
		'title' =>'ZUMBA',
		'text' => 'Proin purus est, mattis a<br /> condimentum sed, gravida at neque.<br /> Proin sem sem, facilisis et erat mollis,'
	), $atts ));
	$output = '<div class="col-br-5">
					<div class="row">
						<div class="teaser text-center">
							<div class="icon">
								<i class="glyph-icon '.esc_attr($icon).'"></i>
							</div>
							<div class="heading">
								'.$title.'
							</div>
							<div class="text">
								'.$text.'
							</div>
						</div>
					</div>
				</div>';
	// do shortcode actions here
			return	$output;
}
add_shortcode( 'brick_abouticon','func_brick_abouticon' );


function func_brick_advantages( $atts , $content ) {
	extract(shortcode_atts( array(
		'default' => 'values'
	), $atts ));

	$output = '<!-- advantages -->
	<div id="advantages">
		<div class="container">
			<div class="row">
				';
				$output .= do_shortcode( $content );
				$output .= '</div>
		</div>
	</div><!-- #about us -->';
	return $output;
	// do shortcode actions here
}
add_shortcode( 'brick_advantages','func_brick_advantages' );


function func_brick_advantagesicon( $atts ) {
	extract(shortcode_atts( array(
		'icon' => 'flaticon-exercise',
		'title' =>'venenatis',
		'text' => 'Vivamus sodales dictum risus,
							at eleifend leo cursus eget.
							Cras rutrum tortor nec est
							tristique dignissim.'
	), $atts ));
	$output = '<div class="col-sm-6 col-md-3">
					<div class="teaser-style-5">
						<div class="icon">
							<div class="wrapper">
								<div class="first-image">
									<i class="glyph-icon '.esc_attr($icon).'"></i>
								</div>
								
							</div>
						</div>
						<div class="teaser-content text-center">
							<div class="uppercase heading">'.$title.'</div>
							<div class="text">'.$text.'</div>
						</div>
					</div>
				</div>';
	// do shortcode actions here
			return	$output;
}
add_shortcode( 'brick_advantagesicon','func_brick_advantagesicon' );

				
				


function func_brick_welcome($atts , $content) {
	extract(shortcode_atts(
		array('title'=>'Welcome in Brick Fitness',
			'subtext'=>'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
			'image1' => ''),
		$atts));
	$image_output1    = wp_get_attachment_image_src( $image1, 'full', false);
		$output = '<!-- welcome -->
	<div id="welcome">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
						<h4>'.$subtext.'</h4>
					</div>
				</div>
				<div class="clearfix">';
					
				$output .= do_shortcode( $content );
				$output .='</div>
				<div class="clearfix text-center team-image">
					<img src="'.$image_output1[0].'" alt="">
				</div>
			</div>
		</div>
	</div><!-- #welcome -->';
	// do shortcode actions here
	return	$output;
}
add_shortcode('brick_welcome','func_brick_welcome');

function func_brick_welcomeicon( $atts ) {
	extract(shortcode_atts( array(
		'icon' => 'flaticon-exercise',
		'title' =>'ZUMBA',
		'text' => 'Proin purus est, mattis a<br /> condimentum sed, gravida at neque.<br /> Proin sem sem, facilisis et erat mollis,'
	), $atts ));
	$output = '<div class="col-sm-4 teaser-style-2 text-center">
						<div class="icon">
							<i class="glyph-icon '.esc_attr($icon).'"></i>
						</div>
						<div class="heading">
								'.$title.'
							</div>
							<div class="text">
								'.$text.'
							</div>
					</div>';
	// do shortcode actions here
			return	$output;
}
add_shortcode( 'brick_welcomeicon','func_brick_welcomeicon' );



function func_brick_welcome2($atts , $content) {
	extract(shortcode_atts(
		array('title'=>'Welcome in Brick Fitness',
			'subtext'=>'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
			),
		$atts));
	$image_output1    = wp_get_attachment_image_src( $image1, 'full', false);
		$output = '<!-- welcome -->
	<div id="welcome">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img src="'.get_stylesheet_directory_uri().'/images/seperator.png" alt=""></div>
						<h4>'.$subtext.'</h4>
					</div>
				</div>
					<div class="teaser-style-4-row">';
					
				$output .= do_shortcode( $content );
				$output .='
			</div>
		</div>
	</div></div><!-- #welcome -->';
	// do shortcode actions here
return	$output;
}
add_shortcode('brick_welcome2','func_brick_welcome2');

function func_brick_welcomeicon2( $atts ) {
	extract(shortcode_atts( array(
		'icon' => 'flaticon-exercise',
		'title' =>'LOTS OF EQUIPMENTS',
		'text' => 'Proin purus est, mattis a<br /> condimentum sed, gravida at neque.<br /> Proin sem sem, facilisis et erat mollis,'
	), $atts ));
	$output = '<div class="col-sm-6 col-md-5 col-md-push-1 teaser-style-4">
						<div class="icon">
							<span class="glyph-icon '.esc_attr($icon).'"></span>
						</div>
						<div class="teaser-content">
							<div class="heading">
								'.$title.'
							</div>
							<div class="text">
								'.$text.'
							</div>
						</div>
					</div>';
	// do shortcode actions here
			return	$output;
}
add_shortcode( 'brick_welcomeicon2','func_brick_welcomeicon2' );

	


function func_brick_dropbox($atts , $content) {
	 extract(shortcode_atts(array('default'=>'values'),$atts));
	$output = '<!-- dropbox -->
	<div id="dropbox">
		<div class="container-fluid">
			<div class="row">';
			$output .= do_shortcode( $content );
				
			$output .='	
			</div>
		</div>
	</div><!-- #dropbox -->';
	return $output;
	// do shortcode actions here
}
add_shortcode('brick_dropbox','func_brick_dropbox');



function func_brick_dropboxicon( $atts ) {
	extract(shortcode_atts( array(
		'icon' => 'flaticon-exercise',
		'title' =>'PILATES',
		'text' => 'Mon - Wed 10:30 - 14:20 am'
	), $atts ));
	$output = '<div class="col-br-5">
					<div class="row">
						<div class="teaser teaser-style-3 text-center">
							<div class="teaser-content">
								<div class="icon">
									<div class="wrapper">
										<div class="first-image">
											<i class="glyph-icon '.esc_attr($icon).'"></i>
										</div>
										
									</div>
								</div>
								<div class="heading">
								'.$title.'
							</div>
							<div class="text">
								'.$text.'
							</div>
							</div>
						</div>
					</div>
				</div>';
	// do shortcode actions here
			return	$output;
}
add_shortcode( 'brick_dropboxicon','func_brick_dropboxicon' );


/*
BMI cal
*/
function func_brick_bmical( $atts ) {
	$atts = shortcode_atts( array(
		'default' => 'values'
	), $atts );

	$output ='<!-- page-content -->
	<div id="page-content" class="no-margin-bottom no-margin-top">
		<div id="bmi-calculator">
			<div class="parallax">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="bmi-calculator-content">
								<div class="b-clear man-woman-buttons">
									<span class="bmi-gender-btn active">Calculate You Body Mass Index(BMI)</span>
									
								</div>
<form>
								<div class="bmi-form">
									
									<div class="b-clear">
										<input type="text" id="ww" class="medium-input" placeholder="Enter Your Weight in Kilograms">
									</div>
									<div class="b-clear">
										<input type="text" id="wh" class="medium-input" placeholder="Enter Your Height in Meters">
									</div>
									
									<div class="b-clear">
										<a id="bmrwm" class="bmi-calculator-submit">Get Result</a>
									</div>
								</div>
								</form>

								<div class="col-md-12 result" >
                        <div class="alert alert-info" id="bmibmr">
                        </div></div>
							</div>
						</div>
						<div class="col-lg-6"> 
							<div class="row pos-relative">
								<div class="bmi-woman-bg"></div>
							</div>
						</div>
						
                    
					</div>
				</div>
			</div>
		</div>
	</div><!-- #page-content -->
	<script>
                jQuery("#bmibmr").hide();
                jQuery("#bmrwm").click(function() {
                               

                           if ( jQuery("#wh").val() !="" && jQuery("#ww").val() !="") {     
                            
                                BMI = ( jQuery("#ww").val() / ( jQuery("#wh").val() * jQuery("#wh").val()) );
                               
                                if (BMI <= 18.5) {
                                    yweight ="Underweight";
                                }
                                else if (BMI > 18.5 && BMI <= 24.9) {
                                    yweight ="Healthy";
                                }
                                else if (BMI >= 25 && BMI <= 29.9) {
                                    yweight ="Over Weight";
                                }
                                else if (BMI >= 30) {
                                     yweight ="Obese";
                                }

                                

                                 var message = "";
                                message +="<strong>You are "+yweight+"</strong>"+ "  Your BMI is "+BMI.toPrecision(4);
                                
                                jQuery("#bmibmr").html(message);
                                jQuery("#bmibmr").show();
                                 }
                              
                        })
                </script>';
	return $output;
}
add_shortcode( 'brick_bmical','func_brick_bmical' );


/*
Our Team Background
*/

function func_brick_ourteambg( $atts ) {
	extract(shortcode_atts( array(
		'title' => 'Our Team',
		'subtext' => 'We Are Always Here For You',
		'image1' => ''
	), $atts ));
	$image_output1    = wp_get_attachment_image_src( $image1, 'full', false);
	$output = '<div class="out-team-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1 class="uppercase colored our-team-heading">'.$title.'</h1>
						<h1 class="playfair-font out-team-subheading">'.$subtext.'</h1>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<img class="img-responsive" src="'.$image_output1[0].'" alt="">
				</div>
			</div>
		</div>';
		return $output;
}
add_shortcode( 'brick_ourteambg','func_brick_ourteambg' );

function func_brick_services($atts , $content) {
	extract(shortcode_atts(array('image1'=>''),$atts));
	$image_output1    = wp_get_attachment_image_src( $image1, 'full', false);
	$output = '<!-- transparent-services -->
	<div id="transparent-services">
		<div class="parallax" style="background-image:url('.$image_output1[0].')">
			<div class="container">
				<div class="row">';
				$output .= do_shortcode( $content );
				
				$output .='</div>
			</div>
		</div>
	</div><!-- #transparent-services -->';
	return $output;
	// do shortcode actions here
}
add_shortcode('brick_services','func_brick_services');



function func_brick_service( $atts ) {
	extract(shortcode_atts( array(
		'icon' => 'flaticon-exercise',
		'title' =>'visual page builder',
		'text' => 'Sed ut perspiciatis unde omnis
									natus  laudantore veritatis et quasi architecto beatae vitae dicta 
									sunt explicabo'
	), $atts ));
	$output = '<div class="col-md-3 col-sm-6">
						<div class="teaser-style-7">
							<div class="icon">
								<div class="table-cell v-align-middle">
									<i class="glyph-icon '.esc_attr($icon).'"></i>
								</div>
							</div>
							<div class="teaser-content text-center">
								<div class="uppercase heading">'.$title.'</div>
								<div class="text">
									'.$text.'
								</div>
							</div>
						</div>
					</div>';
	// do shortcode actions here
			return	$output;
}
add_shortcode( 'brick_service','func_brick_service' );




function func_brick_intersection($atts) {
	$atts = extract(shortcode_atts(array('title'=>'Start Creating Yourself Now You shall Be Proud Of',
		'text'=>'Push your self further with our facilities and we shall support you with better ways to train.'),$atts));
	
	$output ='<!-- intersection -->
	<div id="intersection">
		<div class="parallax" style="background-image:url('.get_stylesheet_directory_uri().'/images/woman-fitness-gym-elongation.jpg)">
			<div class="container-fluid">
				<div class="intersection text-center">
					<h1>'.$title.'</h1>
					<p>'.$text.'</p>
				</div>
			</div>
		</div>
	</div><!-- #intersection -->';
	return $output;
}
add_shortcode('brick_intersection','func_brick_intersection');



function func_brick_promo($atts) {
	$atts = extract(shortcode_atts(array('title'=>'Like to join our Brick Gym?',
		'subtitle'=>'OUR FUN FILLED FITNESS CLASSES',
		'btntitle1'=>'View Classes',
		'btnlink1' => '#',
		'btntitle2'=>'View Schedule',
		'btnlink2' => '#',),$atts));
	
	$output ='<!-- promo -->
				<div id="promo">
					<div class="parallax" style="background-image:url('.get_stylesheet_directory_uri().'/images/promo.jpg)">
						<div class="container-fluid">
							<div class="promo text-center">
								<h3>'.$title.'</h3>
								<h1>'.$subtitle.'</h1>
								<div class="well-button-group button-group">
									<a href="'.$btnlink1.'" class="btn well-button-large">'.$btntitle1.'</a>
									<a href="'.$btnlink2.'" class="btn well-button-large">'.$btntitle2.'</a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- #promo -->';
	return $output;
}
add_shortcode('brick_promo','func_brick_promo');




function func_brick_bigbanner($atts) {
	 extract(shortcode_atts(array('title'=>'what is awesome',
		'subtitle'=>'only in brick',
		'text1'=>'FULL CLEAR DESIGN',
		'text2'=>'responsive design ready',
		'text3'=>'make buy one of the best psd author',
		'text4'=>'retinal for all elements',),$atts));

	
	$output = '<!-- big banner -->
	<div id="big-banner">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="big-banner">
							<h3 class="uppercase"><b>'.$title.'</b></h3>
							<h1 class="uppercase large">'.$subtitle.'</h1>
							<div class="uppercase list-style-with-icon-1">
								<ul>
									<li>'.$text1.'</li>
									<li>'.$text2.'</li>
									<li>'.$text3.'</li>
									<li>'.$text4.'</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- big banner -->';

	return $output;
}
add_shortcode('brick_bigbanner','func_brick_bigbanner');


function func_brick_videointro($atts) {
	 extract(shortcode_atts(array('title'=>'Video Intro',
		'subtitle'=> 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
		'iframe' => '<iframe src="https://player.vimeo.com/video/117396807" width="1170" height="658"   allowfullscreen></iframe>'),$atts));
	
	$output = '<!-- video-intro -->
	<div id="video-intro">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img alt="" src="'.get_stylesheet_directory_uri().'/images/seperator.png"></div>
						<h4>'.$suvtitle.'</h4>
					</div>
				</div>

				<!-- video-player -->
				<div class="col-sm-12">
					<div class="video-wrapper">
						'.$iframe.'
					</div>
				</div>
				<!-- video-player -->
			</div>
		</div>
	</div><!-- #video-intro -->';
	return $output;
}
add_shortcode('brick_videointro','func_brick_videointro');

function func_brick_location( $atts ) {
	$options = get_option('brick_option');
		extract(shortcode_atts( array(
			'title' => 'Our Location',
			'text' => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
			'addresstitle' => 'Contact US',
			'addresstext' => 'BRICK FITNESS',
			'address' => '<p>Support requests are not handled by phone. Open a ticket quickly and easily at <br />support.envato.com and well endeavour to respond within 24 hours.</p>
						<p class="colored title-small">Postal Address</p>
						PO Box 16122 Meilo Street Yese <br />Mictoran 8007 Jordan <br />
						<p class="colored title-small">Envato Headquarters</p>
						121 King Street, Melbourne <br />Victoria 3000 Australia <br /><br />
						<p class="colored title-small">Envato Pty Ltd</p>
						CELL 92 345 782 444 7 <br />Phone: +92 3000 680 143',
			'cf7' => '',
			'latitude' => '34.03900468',
			'longitude' => '-118.2427597',
			'mapaddresstitle' => 'Brick Gym Address',
			'mapaddress' => 'PO Box 16122 Meilo Street Yese <br />Mictoran 8007 Jordan'

		), $atts ));
	$contactfrom7 = '[contact-form-7 id="'.$cf7.'" ]'; 
		// do shortcode actions here
$output ='<!-- our-location -->
	<div id="our-location">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode-title-with-seperator text-center">
						<h2>'.$title.'</h2>
						<div class="seperator"><img alt="" src="'.get_stylesheet_directory_uri().'/images/seperator.png"></div>
						<h4>'.$text.'</h4>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div id="home-v4-google-map"></div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row location-details">
						<p class="colored title">'.$addresstitle.'</p>
						<h2>'.$addresstext.'</h2>
						<div class="separator"></div>
						'.$address.'
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="gap" style="height:33px;line-height:33px;"></div>
				</div>

				<div class="quick-contact">
					'.do_shortcode( $contactfrom7).'
				</div>
			</div>
		</div>
	</div><!-- #our-location -->';
	$joutput = "<div class='table-content info-window-map-content'><div class='table-cell'><img src='".esc_url($options['media_logo']['url'])."'></div> <div class='table-cell'><h4>".$mapaddresstitle."</h4><p>".$mapaddress."</p>	           	</div>	            </div>";
	$output .= '
	<script>
	jQuery(window).load(function() {
    function mapForHomeV4() {
        var location = {lat:  '.$latitude.' , lng: '.$longitude.'};
        var map = new google.maps.Map(document.getElementById("home-v4-google-map"), {
            zoom: 12,
            center: location,
            scrollwheel: false
        });

        var contentString = "'.$joutput.'";

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var image = "'.get_stylesheet_directory_uri().'/images/map-marker-1.png";
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: image
        });
        
        infowindow.open(map, marker);

        marker.addListener("click", function() {
            infowindow.open(map, marker);
        });
    }

    // home-v4-google-map
    if (jQuery("#home-v4-google-map").length) {
        mapForHomeV4();
    }
});
	</script>';

	return $output;
	}
	add_shortcode( 'brick_location','func_brick_location' );




	function func_brick_location2( $atts ) {
		$options = get_option('brick_option');
		extract(shortcode_atts( array(
			'title' => 'Our Location',
			'text' => 'Etiam augue velit, euismod a mauris ac, scelerisque lobortis dui.',
			'timingtitle' => 'OPENING TIMES',
			'timingtitle1' => 'Sunday',
			'timing1' => '7 : 00 AM - 9 : 00 PM',
			'timingtitle2' => 'Mon to Fri',
			'timing2' => '6 : 30 AM - 11 : 00 PM',
			'timingtitle3' => 'Saturday',
			'timing3' => '7 : 00 AM - 9 : 00 PM',
			'addresstitle' => 'Contact US',
			'addresstext' => 'BRICK FITNESS',
			'address' => '<p>Support requests are not handled by phone. Open a ticket quickly and easily at <br />support.envato.com and well endeavour to respond within 24 hours.</p>
						<p class="colored title-small">Postal Address</p>
						PO Box 16122 Meilo Street Yese <br />Mictoran 8007 Jordan <br />
						<p class="colored title-small">Envato Headquarters</p>
						121 King Street, Melbourne <br />Victoria 3000 Australia <br /><br />
						<p class="colored title-small">Envato Pty Ltd</p>
						CELL 92 345 782 444 7 <br />Phone: +92 3000 680 143',
			'cf7' => '',
			'latitude' => '34.03900468',
			'longitude' => '-118.2427597',
			'mapaddresstitle' => 'Brick Gym Address',
			'mapaddress' => 'PO Box 16122 Meilo Street Yese <br />Mictoran 8007 Jordan'

		), $atts ));
	$contactfrom7 = '[contact-form-7 id="'.$cf7.'" ]'; 
		// do shortcode actions here
$output ='<div id="page-content" class="no-margin-bottom no-margin-top">
		<div class="container-fluid">
			<div class="row">
				<div id="select-locations-map"></div>
			</div>
		</div>

		<div class="container-fluid contact-page-detail-bg">
			<div class="row">
				<div class="col-md-6">
					<div class="row opending-details contact-page">
						<div class="content">
							<h2 class="title">'.$timingtitle.'</h2>
							<div class="table-content">
								<div class="table-cell">'.$timingtitle1.'</div>
								<div class="table-cell">'.$timing1.'</div>
							</div>
							<div class="table-content">
								<div class="table-cell">'.$timingtitle2.'</div>
								<div class="table-cell">'.$timing2.'</div>
							</div>
							<div class="table-content">
								<div class="table-cell">'.$timingtitle3.'</div>
								<div class="table-cell">'.$timing3.'</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row location-details">
						<p class="colored title">'.$addresstitle.'</p>
						<h2>'.$addresstext.'</h2>
						<div class="separator"></div>
						'.$address.'
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="gap" style="height:33px;line-height:33px;"></div>
				</div>

				<div class="quick-contact">
					'.do_shortcode( $contactfrom7).'
				</div>
			</div>
		</div>
	</div><!-- #our-location -->';
	$joutput = "<div class='table-content info-window-map-content'><div class='table-cell'><img src='".esc_url($options['media_logo']['url'])."'></div> <div class='table-cell'><h4>".$mapaddresstitle."</h4><p>".$mapaddress."</p>	           	</div>	            </div>";
	$output .= '<script>
	// run functions after window load
jQuery(window).load(function() {
		 function mapForLocations() {
        var location = {lat: '.$latitude.' , lng: '.$longitude.' };
        var map = new google.maps.Map(document.getElementById("select-locations-map"), {
            zoom: 12,
            center: location,
            scrollwheel: false
        });

        var contentString = "'.$joutput.'";

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var image = "'.get_stylesheet_directory_uri().'/images/google_maps_marker.png";
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: image
        });
        
        marker.addListener("click", function() {
            infowindow.open(map, marker);
        });
    }

    // select locations map
    if (jQuery("#select-locations-map").length) {
        mapForLocations();
    }});
	</script>';

	return $output;
	}
	add_shortcode( 'brick_location2','func_brick_location2' );




	function brick_joining($atts, $content = null) {

		

		extract(shortcode_atts(
			array(
				
				'title'       => 'The Best WordPress Theme of 2015',
				'subtitle'       => 'join bricks for yoga pilates',
				'text'       => 'Brick Gym Fitnes PSD Template</span> but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.',
				'button_text' => 'Check Demo',
				'link'        => '#',
				'button_text2' => 'Join Now',
				'link2'        => '#',
				'image1'=>'',
				
			), $atts)
		);

	$image_output1    = wp_get_attachment_image_src( $image1, 'full', false);
	
		$output = '';
		
		
		
		
					$output .='	<!-- joining -->
	<div id="joining">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="home-v2-anything-slider" class="carousel-with-button-outside">
						<!-- anything slider -->
						<div class="anything-slider anything-slider-v1">
							<div class="row slide-item">
								<div class="col-md-6">
									<div class="image-wrapper text-center">
										<img src="'.$image_output1[0].'" alt="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="anything-wrapper">
										<h5 class="playfair-font colored">'.esc_html($title).'</h5>
										<h3 class="uppercase">'.esc_html($subtitle).'</h3>
										<span class="separator"><img src="'.get_stylesheet_directory_uri().'/images/line.png" alt=""></span>
										<p>'.esc_html($text).'</p>
										';
										if (isset($content) && !empty($content)) {
									$output .='<ul class="list-style-squared">';
										$split = preg_split("/(\r?\n)+|(<br\s*\/?>\s*)+/", $content);
										foreach($split as $haystack) {
							                $output .= '<li> ' . $haystack . '</li>';
							            }
						            $output .='</ul>';
								}
											
									$output .='	<div class="button-group">
											<a href="'.$link.'" class="btn anything-large-btn">'.$button_text2.'</a>
											<a href="'.$link2.'" class="btn anything-large-btn">'.$button_text2.'</a>
										</div>
									</div>
								</div>
							</div>
							
						</div><!-- .anything slider -->

						
					</div>
				</div>
			</div>
		</div>
	</div>';

		return $output;
	}

	add_shortcode('brick_joining', 'brick_joining');
 ?>