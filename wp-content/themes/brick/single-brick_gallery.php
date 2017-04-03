<?php get_header(); ?>
<!-- breadcrumb -->
	<div id="breadcrumb">
		<div class="breadcrumb-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="table-content breadcrumb-table">
							<div class="table-cell v-align-middle page-title">
								<?php the_title(); ?>
							</div>
							<div class="table-cell v-align-middle breadcrumb-content">								
								<?php brick_breadcrumbs(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #breadcrumb -->
<?php 
$galimages = '';
$thumbs = '';
if (have_posts()) {
				the_post();
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

					$galimages .= '<div data-gallery-index="1"><img src="'.$entry['image'].'" alt="" class="img-responsive"></div>';
					    // Do something with the data
					$thumbs .= '<div class="gallery-item">
								<div class="gallery-image">
									<img src="'.$entry['image'].'" alt="">
								</div>
								<div class="mask"></div>
								<div class="gallery-info text-center">
									<a href="#" data-gallery-index="1" class="zoom"><img src="'.get_template_directory_uri().'/images/plus-big.png" alt=""></a>
									<h4 class="title uppercase"><a href="#">'.$title.'</a></h4>
									<span class="subtitle">'.$caption.'</span>
								</div>
							</div>';
					}
					}
					?>
					
<!-- page-content -->
	<div id="page-content" class="gallery-detail">
		<div class="container-fluid">
			<div class="row">
				<div class="single-gallery-slider-init">
					<!-- large-images -->
					<div id="single-gallery-main-images" class="b-clear gallery-large-image-slider">
						<?php echo wp_kses_post($galimages); ?>						
					</div>

					<!-- slider -->
					<div id="home-v5-gallery-slider" class="full-width-carousel">
						<!-- gallery-slider -->
						<div id="single-gallery-sub-images" class="b-clear gallery-slider gallery-slider-style-4">
							<?php echo wp_kses_post($thumbs); ?>	
						</div><!-- .gallery-slider -->

						<!-- gallery-slider nav -->
						<div class="full-width-carousel-nav gallery-style-5-nav">
							<div class="owl-prev"><i class="fa fa-chevron-left"></i></div>
							<div class="owl-next"><i class="fa fa-chevron-right"></i></div>
						</div>
						<!-- gallery-slider nav -->
					</div>
					<!-- end-slider -->
				</div>
			</div>
		</div>
	</div><!-- #page-content -->';
	?>

<?php get_footer(); ?>