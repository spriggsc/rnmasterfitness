<?php $options = get_option('brick_option');  
brick_global_variables(); 
if (isset($GLOBALS['woocommerce'])) {
$items = $GLOBALS['woocommerce']->cart->cart_contents_count; 
$total = $GLOBALS['woocommerce']->cart->cart_contents_total;}?>
?>
<!-- header -->
	<header>
		<!-- header-style-5 -->
		<div id="header-style-5">
			<!-- top-bar -->
			<div class="top-bar"></div>
			<!-- top-bar -->

			<!-- top-content -->
			<div class="top-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell v-align-middle left-side">
									<!-- phone -->
									<div class="left-widget phone">
										<span class="icon"><i class="fa fa-phone"></i></span>
										<span class="content"><?php echo esc_attr($options['headerphone']); ?></span>
									</div><!-- .phone -->

									<!-- email -->
									<div class="left-widget email">
										<span class="icon"><i class="fa fa-envelope-o"></i></span>
										<span class="content"><a href="mailto:<?php echo esc_attr($options['headeremail']); ?>"><?php echo esc_attr($options['headeremail']); ?></a></span>
									</div><!-- .email -->
								</div>
								<div class="table-cell v-align-middle right-side">
									<div class="pull-right">
										<!-- header-top-menu -->
										<div class="right-widget header-top-menu first-menu">
											<ul class="nav navbar-nav">
												<li><a href="#">Login</a></li>
											</ul>
										</div><!-- .header-top-menu -->

										<!-- language-switcher -->
										<div class="right-widget language-switcher-wrapper">
											<?php if (is_dynamic_sidebar('langswitcher' )) {
															dynamic_sidebar('langswitcher' );
														} ?>
										</div><!-- language-switcher -->

										<!-- currency-switcher -->
										<div class="right-widget currency-switcher-wrapper">
											<?php if (is_dynamic_sidebar('currencyswitcher' )) {
															dynamic_sidebar('currencyswitcher' );
														} ?>
										</div><!-- .currency-switcher -->

										<!-- header-top-menu -->
										<div class="right-widget header-top-menu second-menu">
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
								<div class="table-cell v-align-middle logo">
									<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php if (isset($options['media_logo']['url']) && !empty($options['media_logo']['url'])): ?>
										<img class="logo-v" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt="">
									<?php else: ?>
									<?php bloginfo( 'name' ); ?>	
									<?php endif ?>
									</a>
								</div>
								<div class="table-cell v-align-middle menu-wrapper">
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
								<div class="table-cell v-align-middle cart-n-search">
									<div id="hidden-search-form" class="search-wrapper">
										<a href="#" class="dropdown-handler"><i class="fa fa-search"></i></a>
										<div class="menu-search-form">
											<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
												<input type="text" class="search-input" name="s" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'brick' ); ?>">
												
											</form>
										</div>
									</div>
									<?php if (isset($GLOBALS['woocommerce'])): ?>
									<!-- mini-cart -->
								    <div id="dropdown-cart-wrapper" class="cart-wrapper">
								    	<a href="#" class="cart-handler">
								    		<img class="cart" src="<?php echo get_template_directory_uri(); ?>/images/cart-icon-2.png" alt="">
								    		<img class="cart on-hover cart-icon-2-hover" src="<?php echo get_template_directory_uri(); ?>/images/cart-icon-2-hover.png" alt="">
								    		<span class="cart-content"><?php echo esc_html($items); ?></span>
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
								    </div><!-- .mini-cart -->
								<?php endif; ?>
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
		</div><!-- #header-style-5 -->
	</header><!-- end header -->