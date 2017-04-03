<?php $options = get_option('brick_option');?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- preloader -->
	<div class="preloader overlay-slidedown">
		<div class="preloader-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ball-triangle.svg" alt="">
		</div>
	</div>
	<!-- .preloader -->
<?php if (!isset($options) || empty($options['hstyles'])): ?>
    <?php get_template_part( 'inc/headers/header', 'v1' ); ?>
<?php else: ?>	
    <?php get_template_part( 'inc/headers/header', $options['hstyles'] ); ?>
<?php endif; ?>