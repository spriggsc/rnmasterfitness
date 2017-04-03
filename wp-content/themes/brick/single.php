<?php $options = get_option('brick_option'); ?>
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
	
<!-- page-content -->
	<div id="page-content">
		<div class="container">
			<div class="row">
				<?php 						
					if( have_posts() ):  the_post();
				?>
				<div class="col-md-9">
					<div class="single-blog">
		                <?php get_template_part( 'inc/template-parts/content', get_post_format() ); ?>
                        	
	                    <?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
					</div>
                </div>


					<?php endif; ?>		
				<div class="col-lg-3">
	                <div class="blogSidebar">
	                    <?php get_sidebar(); ?>
	                </div>
	            </div>
				</div>
			</div>
			
		</div>
	</div>
<?php get_footer(); ?>