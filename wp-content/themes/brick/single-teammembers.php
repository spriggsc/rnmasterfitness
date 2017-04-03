<?php
get_header();
?>
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
	<!-- detail-heading -->
	<div id="detail-heading">
		<div class="parallax blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<div class="detail-heading text-center">
							<h1 class="large uppercase"><?php the_title(); ?></h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #detail-heading -->
<!-- page-content -->
	<div id="page-content">
		<div class="container">
			<div class="row">
				
			
				<?php 
				if(have_posts()){
	
				the_post();
					$fb .= get_post_meta(get_the_ID(), 'facebook', true );
					$tw .= get_post_meta(get_the_ID(), 'twitter', true );
					$gp .= get_post_meta(get_the_ID(), 'gplus', true );						
					$dr .= get_post_meta(get_the_ID(), 'dribbble', true );
					$li .= get_post_meta(get_the_ID(), 'linkedin', true );
					$be .= get_post_meta(get_the_ID(), 'behance', true );
					$pin .= get_post_meta(get_the_ID(), 'pinterest', true );
					$imgs = get_post_meta(get_the_ID(), 'file_list' , 1 );
					//print_r($imgs);
					


					?>
				<div class="col-md-6">
					<div id="team-member-images-slider" class="flexslider">
						<ul class="slides">
							
							<?php 
							foreach ( (array) $imgs as $attachment_id => $attachment_url ) {
						        echo '<li>';
						        echo wp_get_attachment_image( $attachment_id, $img_size );
						        echo '</li>';
						    }
							 ?>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="team-member-details">
						<h1 class="title"><?php the_title(); ?></h1>
						<h4 class="subtitle"><?php echo get_post_meta(get_the_id(), 'designation', true ); ?></h4>
						<div class="detail-table">
							<div class="table-content">
								<div class="table-cell v-align-middle light"><?php echo esc_html__('Real Name', 'brick' ); ?>:</div>
								<div class="table-cell v-align-middle bold"><?php echo get_post_meta(get_the_id(), 'rname', true ); ?></div>
							</div>
							<div class="table-content">
								<div class="table-cell v-align-middle light"><?php echo esc_html__('Expert In', 'brick' ); ?>:</div>
								<div class="table-cell v-align-middle bold"><span class="colored"><?php echo get_post_meta(get_the_id(), 'expertin', true ); ?></span></div>
							</div>
							<div class="table-content">
								<div class="table-cell v-align-middle light"><?php echo esc_html__('Email', 'brick' ); ?>:</div>
								<div class="table-cell v-align-middle bold"><a href="mailto:<?php echo get_post_meta(get_the_id(), 'email', true ); ?>"><?php echo get_post_meta(get_the_id(), 'email', true ); ?></a></div>
							</div>
							<div class="table-content">
								<div class="table-cell v-align-middle light"><?php echo esc_html__('Skype ID', 'brick' ); ?>:</div>
								<div class="table-cell v-align-middle bold"><?php echo get_post_meta(get_the_id(), 'skypeid', true ); ?></div>
							</div>
							<div class="table-content">
								<div class="table-cell v-align-middle light"><?php echo esc_html__('Experience', 'brick' ); ?>:</div>
								<div class="table-cell v-align-middle bold"><?php echo get_post_meta(get_the_id(), 'experience', true ); ?></div>
							</div>
						</div>

						<div class="b-clear social-links">
						<?php 
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
								?>
								<?php echo wp_kses_post( $output ); ?>
						</div>

						<div class="short-description">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

				

					<?php } ?>		
				
			</div>
			
		</div>
	</div>
<?php get_footer(); ?>