<?php
$options = get_option('brick_option');
 get_header(); ?>
<!-- breadcrumb -->
	<div id="breadcrumb">
		<div class="breadcrumb-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="table-content breadcrumb-table">
							<div class="table-cell v-align-middle page-title">
								<?php if (is_author() || is_archive() || is_day() || is_tag() || is_category() || is_month() || is_day() || is_year()): ?>
                    
			                        <?php if (is_category()): ?>
			                            <?php echo single_cat_title("", true); ?>
			                        <?php elseif(is_tag()): ?>
			                            <?php echo single_tag_title("", true); ?>
			                        <?php elseif(is_day()): ?>
			                            <?php echo get_the_date('F dS Y'); ?>
			                        <?php elseif(is_month()): ?>
			                            <?php echo get_the_date('Y, F'); ?>
			                        <?php elseif(is_year()): ?>
			                            <?php echo get_the_date('Y'); ?>
			                        <?php elseif(is_author()): ?>
			                            <?php $userdata = get_userdata($GLOBALS['author']); ?>
			                            <?php echo esc_html__("Articles posted by", 'brick'); ?> "<?php echo esc_html($userdata->display_name); ?>"
			                        <?php else: ?>
			                            <?php echo esc_html__("Archive", 'brick'); ?>
			                        <?php endif ?>
			                    
			                <?php else: ?>
			                   	<?php echo esc_html( $option['blog-title'] ); ?>
			                <?php endif; ?>
							</div>
							<div class="table-cell v-align-middle breadcrumb-content">
								<span><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'brick' ); ?></a></span>
								<span class="separator">/</span>
								<span><?php if (is_author() || is_archive() || is_day() || is_tag() || is_category() || is_month() || is_day() || is_year()): ?>
                    
				                        <?php if (is_category()): ?>
				                            <?php echo single_cat_title("", true); ?>
				                        <?php elseif(is_tag()): ?>
				                            <?php echo single_tag_title("", true); ?>
				                        <?php elseif(is_day()): ?>
				                            <?php echo get_the_date('F dS Y'); ?>
				                        <?php elseif(is_month()): ?>
				                            <?php echo get_the_date('Y, F'); ?>
				                        <?php elseif(is_year()): ?>
				                            <?php echo get_the_date('Y'); ?>
				                        <?php elseif(is_author()): ?>
				                            <?php $userdata = get_userdata($GLOBALS['author']); ?>
				                            <?php echo esc_html__("Articles posted by", 'brick'); ?> "<?php echo esc_html($userdata->display_name); ?>"
				                        <?php else: ?>
				                            <?php echo esc_html__("Archive", 'brick'); ?>
				                        <?php endif ?>
				                    
				                <?php else: ?>
				                   	<?php echo esc_html( $option['blog-title'] ); ?>
				                <?php endif; ?>
                				</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #breadcrumb -->


	<!-- page-content -->
	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<?php get_sidebar('sidebarblog'); ?>
					
				</div>

				<div class="col-md-9">
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
			</div>
		</div>
	</div><!-- #page-content -->
<?php get_footer(); ?>