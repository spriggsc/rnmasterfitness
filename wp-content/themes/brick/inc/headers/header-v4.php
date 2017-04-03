<?php $options = get_option('brick_option');  
brick_global_variables(); 
if (isset($GLOBALS['woocommerce'])) {
$items = $GLOBALS['woocommerce']->cart->cart_contents_count; 
$total = $GLOBALS['woocommerce']->cart->cart_contents_total;}?>
<!-- header -->
	<header>
		<!-- header-style-9 -->
		<div id="header-style-9">
			<!-- top-content -->
			<div class="top-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell v-align-middle">
									<!-- email -->
									<div class="left-widget email">
										<span class="icon"><i class="fa fa-envelope-o"></i></span>
										<span class="text"><?php esc_html_e( 'EMAIL', 'brick' ); ?>:</span>
										<span class="content"><a href="mailto:<?php echo esc_attr($options['headeremail']); ?>"><?php echo esc_attr($options['headeremail']); ?></a></span>
									</div><!-- .email -->

									<!-- phone -->
									<div class="left-widget phone">
										<span class="icon"><i class="fa fa-life-ring"></i></span>
										<span class="text"><?php esc_html_e( 'SUPPORT TIME', 'brick' ); ?></span>
										<span class="content"><?php echo esc_attr($options['headerphone']); ?></span>
									</div><!-- .phone -->

									<!-- Offer the day -->
									<div class="left-widget offer-day">
										<span class="offer-button"><?php echo esc_html($options['offertitle']); ?><span class="round"></span></span>
										<span class="offer"><?php echo esc_html($options['offertext']); ?></span>
									</div><!-- Offer the day -->
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
						<div class="col-md-3 logo">
							<div class="row text-center">
								<a href="<?php echo esc_url(home_url('/')); ?>">
								<?php if (isset($options['media_logo']['url']) && !empty($options['media_logo']['url'])): ?>
										<img class="logo-v" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt="">
									<?php else: ?>
									<?php bloginfo( 'name' ); ?>	
									<?php endif ?>
								</a>
							</div>
						</div>
						<div class="col-md-7 menu">
							<div class="row">
								<div class="b-clear primary-menu">
									
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
								<div class="b-clear sub-menu">
									
									<?php 
                                    if(has_nav_menu('main_navigation')) {
                                        wp_nav_menu( array(
                                             'theme_location' => 'shop_navigation',
                                             'container' =>false,
                                             'menu_id' => 'shopmenu',
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
						<div class="col-md-2 cart">
							<div class="row cart-n-search">
							<?php if (isset($GLOBALS['woocommerce'])): ?>
								<div class="mini-shop">
									<div class="shopping-bag">
										<span class="fa fa-shopping-bag"></span>
										<?php esc_html_e( 'SHOPPING BAG', 'brick' ); ?>
									</div>
									<div class="item-n-cost">
										<span class="item"><?php echo esc_html($items); ?> <?php esc_html_e( 'items', 'brick' ); ?></span>
										<span class="cost">$<?php echo esc_html($total); ?><sup>00</sup></span>
									</div>
								</div>

							    <div id="dropdown-cart-wrapper" class="table-cell v-align-middle cart-wrapper">
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
								<div id="hidden-search-form" class="search-wrapper">
									<a href="#" class="dropdown-handler"><i class="fa fa-search"></i></a>
									<div class="menu-search-form">
										<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
														<input type="text" class="search-input" name="s" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'brick' ); ?>">
														<button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
													</form>
									</div>
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
		</div><!-- #header-style-9 -->
	</header><!-- end header -->