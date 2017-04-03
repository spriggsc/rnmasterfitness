<?php
/*
Template Name: Timetable Event
*/

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
<div id="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 single-blog">
				<?php
					the_post_thumbnail("event-post-thumb", array("alt" => get_the_title(), "title" => ""));
				?>
				<h2><?php the_title();?></h2>
				<?php
				$subtitle = get_post_meta(get_the_ID(), "timetable_subtitle", true);
				if($subtitle!=""):
				?>
					<h5><?php echo esc_html($subtitle); ?></h5>
				<?php
				endif;
				if(have_posts()) : while (have_posts()) : the_post();
					echo tt_remove_wpautop(get_the_content());
				endwhile; endif;
				?>
			</div>
			<?php if(is_active_sidebar('sidebar-event')): ?>
			<div class="col-md-4">
				<?php
					dynamic_sidebar('sidebar-event');
				?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer();

?>