<?php
$options = get_option('brick_option');
 get_header();
 get_template_part('/inc/blog-header'); ?>

<!-- detail-heading -->
	<div id="detail-heading">
		<div class="parallax blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<div class="detail-heading text-right">
							<h1 class="large uppercase"><?php echo esc_html( $options['blog-title'] ); ?></h1>
							<h3 class="sub-heading uppercase"><?php echo esc_html( $options['blog-subtitle'] ); ?></h3>
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
				<div class="col-md-9 col-md-push-3">
					<div class="blog-posts-1-col">
					<?php if (have_posts()) {
						while (have_posts()) {
							the_post();
							?>
							<?php get_template_part( 'inc/template-parts/content', get_post_format() ); ?>
							<?php 
							$post_format       = get_post_format($post->ID);
							
							 ?>
						
							<?php 
						}
						# code...
					} ?>
						
						
					</div>
					<?php get_template_part( 'inc/nav' ); ?>
				</div>
				<div class="col-md-3 col-md-pull-9">
				<?php get_sidebar('sidebarblog'); ?>
					
				</div>
			</div>
		</div>
	</div><!-- #page-content -->
<?php get_footer(); ?>