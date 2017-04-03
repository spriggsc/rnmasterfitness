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
	<?php if (!isset($options) || empty($options)): ?>
	<?php 	$options['404title'] = '404';
		$options['404subtitle'] = 'PAGE NOT FOUND';
		$options['404subtext'] = 'The page you are looking for could not be found';
		$options['404text'] = 'Can\'t find what you looking for? Take a moment and do a search below or start from our Home Page';
		$options['404btntitle'] = 'GO TO HOMEPAGE';
		?>
	<?php endif ?>
	<!-- page-content -->
	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="text-center page-not-found">
						<h1 class="t1 colored"><?php echo esc_html($options['404title']); ?></h1>
						<h1 class="t2 uppercase"><?php echo esc_html($options['404subtitle']); ?></h1>
						<h3 class="t3"><?php echo esc_html($options['404subtext']); ?></h3>
						<p class="colored info"><?php echo esc_html($options['404text']); ?></p>
						<a href="<?php echo esc_url(home_url('/')); ?>" class="not-found-btn"><?php echo esc_html($options['404btntitle']); ?><span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #page-content -->
<?php get_footer(); ?>