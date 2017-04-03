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
<div id="page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 single-blog">
			<?php if (have_posts()) {
				the_post();
				the_content();
			}
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>