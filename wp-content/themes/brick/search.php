<?php get_header(); ?>
<!-- breadcrumb -->
	<div id="breadcrumb">
		<div class="breadcrumb-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="table-content breadcrumb-table">
							<div class="table-cell v-align-middle page-title">
								<?php printf(__('Search Results for: %s', 'brick'), '<span>' . get_search_query() . '</span>'); ?>
							</div>
							<div class="table-cell v-align-middle breadcrumb-content">
								
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
					<div class="blog-posts-1-col searchresults">
					<?php if (have_posts()) {
						while (have_posts()) {
							the_post();
							?>
							<div class="blog-post">
								<?php $class = "date-margin-top"; ?>
								<?php if (has_post_thumbnail()): ?>
								    <?php $class = ""; ?>
								 <?php endif ?>
								<div class="blog-image-n-meta <?php echo esc_attr($class); ?>">

								<?php $class = "date-margin-top"; ?>
								<?php if (has_post_thumbnail()): ?>
								<?php the_post_thumbnail('brick_blog'); ?>
								<?php $class = ""; ?>
								 <?php endif ?>
								    <div class="post-format-n-date ">
								        <?php if (has_post_thumbnail()): ?>
								        <span class="post-format"><a href="<?php the_permalink(); ?>"><i class="fa fa-image"></i></a></span>
								        <?php endif ?>
								        <span class="post-date"><a href="<?php the_permalink(); ?>"><span class="date"><?php echo get_the_time('d'); ?></span><span class="month"><?php echo get_the_time('M'); ?></span></a></span>
								    </div>
								</div>       

								    <div class="blog-content">
								        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								        <div class="post-meta">
								            <span class="meta author"><span class="fa fa-user"></span><a href="#">By <?php the_author(); ?></a></span>
								            <span class="meta tags"><?php the_tags('<span class="fa fa-tags"></span>' ); ?></span>
								            <span class="meta like"><?php echo do_shortcode('[brickliker]'); ?></span>
								            <span class="meta comments"><a href="#"><?php comments_number( '', '', '<span class="fa fa-comments"></span> %' ); ?></a></span>
								        </div>
								        
								    
								    
								        
								   </div>
							</div>			
							<?php 
						}}
						else{?>
							<h2 class="alert-message"><?php esc_html_e('No results found', 'brick') ?></h2>
							<?php get_search_form(); ?>
						<?php  } ?>
						
						
					</div>
				</div>
			</div>
		</div>
	</div><!-- #page-content -->
<?php get_footer(); ?>