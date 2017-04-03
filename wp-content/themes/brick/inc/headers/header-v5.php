<?php $options = get_option('brick_option');  ?>
<!-- header -->
	<header>
		<!-- header-style-10 -->
		<div id="header-style-10">		
			<!-- top-content -->
			<div class="top-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell v-align-middle social-links">
									<?php include(get_template_directory().'/inc/social-links.php'); ?>
								</div>
								<div class="table-cell v-align-middle header-top-widgets">
									<div class="pull-right">
										<div class="pull-left phone">
											<span class="fa fa-phone"></span>
											<b><?php esc_html_e( 'Call us', 'brick' ); ?></b> <?php echo esc_attr($options['headerphone']); ?>
										</div>
										<div class="pull-left email">
											<span class="fa fa-envelope-o"></span>
											<b><?php esc_html_e( 'Send email', 'brick' ); ?></b> <a href="mailto:<?php echo esc_attr($options['headeremail']); ?>"><?php echo esc_attr($options['headeremail']); ?></a>
										</div>
										<div class="pull-left sign-in">
											<span class="fa fa-sign-in"></span>
											<?php 
												if(has_nav_menu('main_navigation')) {
                                        wp_nav_menu( array(
                                             'theme_location' => 'account_navigation',
                                             'container' =>false,
                                             'menu_id' => '',
                                             'echo' => true,
                                             'menu_class' => 'nav navbar-nav',
                                             'before' => '',
                                             'after' => '',
                                             'link_before' => '',
                                             'link_after' => '',
                                             'depth' => 0 ,
                                             'walker'        => new brick_walker_nav_menu
                                            )
                                        ); 
                                    }
											 ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .top-content -->

			<!-- main-menu -->
			<div class="main-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell v-align-middle logo">
									<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php if (isset($options['media_logo']['url']) && !empty($options['media_logo']['url'])): ?>
										<img class="logo-v" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt="">
									<?php else: ?>
									<?php bloginfo( 'name' ); ?>	
									<?php endif ?>
									</a>
								</div>
								<div class="table-cell">
									<div class="pull-right">
										
										<?php 
                                    if(has_nav_menu('main_navigation')) {
                                        wp_nav_menu( array(
                                             'theme_location' => 'main_navigation',
                                             'container' =>false,
                                             'menu_id' => 'mainmenu',
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
			</div><!-- .main-menu -->

			<div class="gap" style="height:3px;line-height:3px;"></div>

			<!-- mobile-menu -->
			<div class="mobile-menu-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell logo">
									<a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo-v3" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt=""></a>
								</div>
								<div class="table-cell v-align-middle menu-trigger">
									<div class="pull-right">
										<span class="fa fa-bars trigger"></span>
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
                                             'menu_id' => 'mainmenu',
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
		</div><!-- #header-style-10 -->
	</header><!-- end header -->