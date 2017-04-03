<?php $options = get_option('brick_option');  ?>

	<!-- header -->
	<header>
		<!-- header-style-6 -->
		<div id="header-style-6">
			<!-- top-content -->
			<div class="top-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell v-align-middle left-side">
									<!-- email -->
									<div class="left-widget email">
										<span class="icon"><i class="fa fa-envelope-o"></i></span>
										<span class="text"><?php esc_html_e( 'Email', 'brick' ); ?>: </span>
										<span class="content"><a href="mailto:<?php echo esc_attr($options['headeremail']); ?>"><?php echo esc_attr($options['headeremail']); ?></a></span>
									</div><!-- .email -->

									<!-- phone -->
									<div class="left-widget phone">
										<span class="icon"><i class="fa fa-phone"></i></span>
										<span class="text"><?php esc_html_e( 'Call support free', 'brick' ); ?>: </span>
										<span class="content"><?php echo esc_attr($options['headerphone']); ?></span>
									</div><!-- .phone -->
								</div>
								<div class="table-cell v-align-middle right-side">
									<div class="pull-right">
										<!-- header-top-menu -->
										<div class="right-widget header-top-menu">
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
										</div><!-- .header-top-menu -->

										<!-- currency-switcher -->
										<div class="right-widget currency-switcher-wrapper">
											<?php if (is_dynamic_sidebar('currencyswitcher' )) {
															dynamic_sidebar('currencyswitcher' );
														} ?>
										</div><!-- .currency-switcher -->

										<!-- language-switcher -->
										<div class="right-widget language-switcher-wrapper">
											<?php if (is_dynamic_sidebar('langswitcher' )) {
															dynamic_sidebar('langswitcher' );
														} ?>
										</div><!-- language-switcher -->
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
							<!-- table-content -->
							<div class="table-content">
								<!-- logo -->
								<div class="table-cell v-align-middle logo">
									<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php if (isset($options['media_logo']['url']) && !empty($options['media_logo']['url'])): ?>
										<img class="logo-v7" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt="">
									<?php else: ?>
									<?php bloginfo( 'name' ); ?>	
									<?php endif ?>
									</a>
								</div><!-- .logo -->

								<!-- menu-cart-search -->
								<div class="table-cell menu-cart-search">

									<!-- mega-menu-table -->
									<div class="table-content yamm mega-menu-table">
									    <div class="table-cell mega-menu">
										   
										    <?php 
                                    if(has_nav_menu('main_navigation')) {
                                        wp_nav_menu( array(
                                             'theme_location' => 'main_navigation',
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
                                    else {
                                        echo '<ul class="nav navbar-nav"><li><a href=""><strong>'.esc_html__('NO MENU ASSIGNED','brick').'</strong> <span>'.esc_html__('Go To Appearance','brick').' >'.esc_html__('Menus and create a Menu','brick').'</span></a></li></ul>';
                                    }
                                ?>
									    </div>

									    <div id="dropdown-cart-wrapper" class="table-cell v-align-middle cart-wrapper">
									    	<a href="#" class="cart-handler">
										    	<img class="cart" src="<?php echo get_template_directory_uri(); ?>/images/cart-icon-3.png" alt="">
									    		<img class="cart on-hover cart-icon-hover" src="<?php echo get_template_directory_uri(); ?>/images/cart-icon-hover.png" alt="">
									    		<span class="cart-content">02</span>
									    	</a>
									    	<!-- header-mini-cart -->
									    	<div class="header-mini-cart">
									    		<div class="mini-cart-wrapper">
												<?php if (is_dynamic_sidebar('topcart' )) {
															dynamic_sidebar('topcart' );
														} ?>
													<div class="loading"></div>
									    		</div>
											</div><!-- .header-mini-cart -->
									    </div>
									</div><!-- .mega-menu-table -->

									<!-- search-form -->
									<div class="menu-search-form">
										<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
											<input type="text" class="search-input" name="s" placeholder="Search...">
											<button type="submit" class="search-button"><i class="fa fa-search"></i></button>
										</form>
									</div><!-- .search-form -->

								</div><!-- .menu-cart-search -->
							</div><!-- .table-content -->
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
		</div><!-- #header-style-6 -->
	</header><!-- end header -->