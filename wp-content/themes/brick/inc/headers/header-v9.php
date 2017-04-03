<?php $options = get_option('brick_option');  
brick_global_variables(); 

$class = '';

 if (!is_front_page() ): ?>
	<?php $class='class=header7withbg'; ?>
	
<?php endif ?>
	<!-- header -->
	<header>
		<!-- header-style-7 -->
		<div id="header-style-7" <?php echo esc_attr( $class ); ?>>
			<div class="container-fluid desktop-menu">
				<div class="row">
					<div class="col-sm-12">
						<div class="table-content">
							<div class="table-cell v-align-middle logo">
								<a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo-v" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt=""></a>
							</div>
							<div class="table-cell v-align-middle main-menu">
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
		</div><!-- #header-style-7 -->
	</header><!-- end header -->

	<!-- mobile-menu -->
	<div class="mobile-menu-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
							<div class="table-content">
								<div class="table-cell logo">
									<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php if (isset($options['media_logo']['url']) && !empty($options['media_logo']['url'])): ?>
										<img class="logo-v3" src="<?php echo esc_url($options['media_logo']['url']); ?>" alt="">
									<?php else: ?>
									<?php bloginfo( 'name' ); ?>	
									<?php endif ?> 
									</a>
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
