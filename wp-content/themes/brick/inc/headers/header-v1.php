<?php $options = get_option('brick_option'); 
?>
	<!-- header -->
	<header>
		<!-- hearer style 1 -->
		<div id="header-style-1">
			<!-- top-bar -->
			<div class="top-bar"></div><!-- .top-bar -->

			<!-- top menu -->
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="social-links-wrapper text-center">
								<div class="social-links">
									<?php include(get_template_directory().'/inc/social-links.php'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .top menu -->

			<!-- main menu -->
			<div class="main-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<div class="main-menu-wrapper">

								<div class="left-menu">
									<div class="b-clear left-menu-inner">
										
										 <?php 
                                    if(has_nav_menu('main_navigation-left')) {
                                        wp_nav_menu( array(
                                             'theme_location' => 'main_navigation-left',
                                             'container' =>false,
                                             'menu_id' => '',
                                             'echo' => true,
                                             'menu_class' => 'sf-menu sf-menu-without-arrow',
                                             'before' => '',
                                             'after' => '',
                                             'link_before' => '',
                                             'link_after' => '',
                                             'depth' => 0
                                            )
                                        ); 
                                    }
                                    else {
                                        echo '<ul class="sf-menu"><li><a href=""><strong>'.esc_html__('NO MENU ASSIGNED','brick').'</strong> <span>'.esc_html__('Go To Appearance','brick').' >'.esc_html__('Menus and create a Menu','brick').'</span></a></li></ul>';
                                    }
                                ?>
									</div>
								</div>

								<div class="b-clear nav-middle-logo">
									<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php if (isset($options['media_logo']['url']) && !empty($options['media_logo']['url'])): ?>
										<img class="logo-v3" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt="">
									<?php else: ?>
									<?php bloginfo( 'name' ); ?>	
									<?php endif ?>
									</a>
								</div>

								<div class="b-clear right-menu">
									<div class="right-menu-inner">
										 <?php 
                                    if(has_nav_menu('main_navigation-right')) {
                                        wp_nav_menu( array(
                                             'theme_location' => 'main_navigation-right',
                                             'container' =>false,
                                             'menu_id' => '',
                                             'echo' => true,
                                             'menu_class' => 'sf-menu sf-menu-without-arrow',
                                             'before' => '',
                                             'after' => '',
                                             'link_before' => '',
                                             'link_after' => '',
                                             'depth' => 0
                                            )
                                        ); 
                                    }
                                    else {
                                        echo '<ul class="sf-menu"><li><a href=""><strong>'.esc_html__('NO MENU ASSIGNED','brick').'</strong> <span>'.esc_html__('Go To Appearance','brick').' >'.esc_html__('Menus and create a Menu','brick').'</span></a></li></ul>';
                                    }
                                ?>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div><!-- .main menu -->

			<!-- mobile-menu -->
			<div class="mobile-menu-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell logo">
									<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php if (!empty($options['media_logo']['url'])): ?>
										<img class="logo-v3" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt="">
									<?php else: ?>
										<h3><?php esc_html(bloginfo('name')); ?></h3>
									<?php endif ?>
									</a>
								</div>
								<div class="table-cell v-align-middle menu-trigger">
									<div class="pull-right">
										<!--<span class="fa fa-bars trigger"></span>-->
									</div>
								</div>
							</div>

							<div class="responsive-menu-wrapper overlay-simplegenie">
								<span class="responsive-menu-close"><img src="<?php echo get_template_directory_uri(); ?>/images/cross.png" alt=""></span>
								
								<?php 
                                    if(has_nav_menu('main_navigation')) {
                                        wp_nav_menu( array(
                                             'theme_location' => 'main_navigation',
                                             'container' =>false,
                                             'menu_id' => '',
                                             'echo' => true,
                                             'menu_class' => 'responsive-menu',
                                             'before' => '',
                                             'after' => '',
                                             'link_before' => '',
                                             'link_after' => '',
                                             'depth' => 0
                                            )
                                        ); 
                                    }
                                    else {
                                        echo '<ul class="sf-menu"><li><a href=""><strong>'.esc_html__('NO MENU ASSIGNED','brick').'</strong> <span>'.esc_html__('Go To Appearance','brick').' >'.esc_html__('Menus and create a Menu','brick').'</span></a></li></ul>';
                                    }
                                ?>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .mobile-menu -->
		</div><!-- #hearer style 1 -->
	</header><!-- end header -->