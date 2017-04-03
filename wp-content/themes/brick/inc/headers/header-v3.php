<?php $options = get_option('brick_option');    
brick_global_variables();
if (isset($GLOBALS['woocommerce'])) {
$items = $GLOBALS['woocommerce']->cart->cart_contents_count; 
$total = $GLOBALS['woocommerce']->cart->cart_contents_total;}?>
	<header>
		<!-- header-style-8 -->
		<div id="header-style-8">
			<!-- top-bar -->
			<div class="top-bar"></div><!-- .top-bar -->
			
			<!-- top-content -->
			<div class="top-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell v-align-middle left-widget-wrapper">
									<div class="left-widget">
										<div class="top">
											<span class="fa fa-mobile"></span>
											<?php esc_html_e( 'Call', 'brick' ); ?>: <?php echo esc_attr($options['headerphone']); ?>
										</div>
										<div class="bottom">
											<?php 
                                    if(has_nav_menu('short_navigation')) {
                                        wp_nav_menu( array(
                                             'theme_location' => 'short_navigation',
                                             'container' =>false,
                                             'menu_id' => 'shortmenu',
                                             'echo' => true,
                                             'menu_class' => 'nav navbar-nav',
                                             'before' => '',
                                             'after' => '',
                                             'link_before' => '',
                                             'link_after' => '',
                                             'depth' => 0
                                            )
                                        ); 
                                    }
                                    else {
                                        echo '<ul class="nav navbar-nav"><li><a href=""><strong>'.esc_html__('NO MENU ASSIGNED','brick').'</strong> <span>'.esc_html__('Go To Appearance','brick').' >'.esc_html__('Menus and create a Menu','brick').'</span></a></li></ul>';
                                    }
                                ?>
										</div>
									</div>
								</div>
								<div class="table-cell v-align-middle logo-wrapper">
									<div class="text-center logo">
										<a href="<?php echo esc_url(home_url('/')); ?>">
										<?php if (isset($options['media_logo']['url']) && !empty($options['media_logo']['url'])): ?>
										<img class="logo-v" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt="">
									<?php else: ?>
									<?php bloginfo( 'name' ); ?>	
									<?php endif ?>
										</a>
									</div>
								</div>
								<div class="table-cell v-align-middle right-widget-wrapper">
									<div class="pull-right table-content right-widget">
										<div class="table-cell v-align-middle left-content">
											<div class="b-clear top">
												<div class="search-form">
													<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
														<input type="text" class="search-input" name="s" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'brick' ); ?>">
														<button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
													</form>
												</div>
											</div>
											<div class="b-clear bottom">
												<!-- currency-switcher -->
												<div class="bootstrap-switcher currency-switcher-wrapper">
													<?php if (is_dynamic_sidebar('currencyswitcher' )) {
															dynamic_sidebar('currencyswitcher' );
														} ?>
												</div><!-- .currency-switcher -->

												<!-- language-switcher -->
												<div class="bootstrap-switcher language-switcher-wrapper">
													<?php if (is_dynamic_sidebar('langswitcher' )) {
															dynamic_sidebar('langswitcher' );
														} ?>
												</div><!-- language-switcher -->
											</div>
										</div>
										<div class="table-cell v-align-middle right-content">
										<?php if (isset($GLOBALS['woocommerce'])): ?>
											
										
										    <div id="dropdown-cart-wrapper" class="cart-wrapper">
										    	<a href="#" class="cart-handler text-center">
										    		<span class="fa fa-shopping-cart"></span>
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
										    </div>
										<?php endif ?>
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
							<div class="main-menu-wrapper">
								
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
			</div><!-- .main-menu -->

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
		</div><!-- #header-style-8 -->
	</header><!-- end header -->