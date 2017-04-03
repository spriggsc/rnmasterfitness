<?php $options = get_option('brick_option');  ?>
<!-- header -->
	<header>
		<!-- header-style-3 -->
		<div id="header-style-3">
			<!-- top-bar -->
			<div class="top-bar"></div>
			<!-- top-bar -->

			<!-- top-content -->
			<div class="top-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell left-side">
									<div class="b-clear">
										<div class="pull-left header-top-widgets language">
											<?php if (is_dynamic_sidebar('langswitcher' )) {
															dynamic_sidebar('langswitcher' );
														} ?>
										</div>
										<div class="pull-left header-top-widgets phone">
											<span class="icon"><i class="fa fa-phone"></i></span>
											<span class="text"><?php esc_html_e( 'Call us', 'brick' ); ?>: </span>
											<span class="content"><?php echo esc_attr($options['headerphone']); ?></span>
										</div>
										<div class="pull-left header-top-widgets email">
											<span class="icon"><i class="fa fa-envelope-o"></i></span>
											<span class="content"><a href="mailto:<?php echo esc_attr($options['headeremail']); ?>"><?php echo esc_attr($options['headeremail']); ?></a></span>
										</div>
									</div>
								</div>
								<div class="table-cell right-side">
									<div class="pull-right search-form">
										
										<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
											<input type="text" class="search-input" name="s" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'brick' ); ?>">
											<span class="fa fa-search quick-search-icon"></span>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .top-content -->

			<!-- menu and logo wrapper -->
			<div class="main-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell logo">
									<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php if (isset($options['media_logo']['url']) && !empty($options['media_logo']['url'])): ?>
										<img class="logo-v" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt="">
									<?php else: ?>
									<?php bloginfo( 'name' ); ?>	
									<?php endif ?>
									</a>
								</div>
								<div class="table-cell menu-wrapper">
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
								<div class="table-cell contact-n-time">
									<a href="#"><i class="fa fa-map-marker"></i></a>
									<a href="#"><i class="fa fa-clock-o"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- menu and logo wrapper -->

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
		</div><!-- #header-style-3 -->
	</header><!-- end header -->