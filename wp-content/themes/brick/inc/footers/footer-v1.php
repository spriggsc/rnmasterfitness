<footer>
		<div class="top-footer style-1">
			<div class="container">
				<div class="row footer-widgets">
					<!-- contact-widget -->
					<div class="col-md-3 col-sm-6 footer-widget widget ">
						 <?php if ( is_active_sidebar( 'footer_sidebar_1' ) ) : ?>
                                <?php dynamic_sidebar('footer_sidebar_1' ); ?>
                            <?php endif; ?>
					</div><!-- .contact-widget -->

					<!-- blog-post-widget -->
					<div class="col-md-3 col-sm-6 footer-widget widget ">
						 <?php if ( is_active_sidebar( 'footer_sidebar_2' ) ) : ?>
                                <?php dynamic_sidebar('footer_sidebar_2' ); ?>
                            <?php endif; ?>
					</div><!-- .blog-post-widget -->

					<!-- mailing-list -->
					<div class="col-md-3 col-sm-6 footer-widget widget ">
						<?php if ( is_active_sidebar( 'footer_sidebar_3' ) ) : ?>
                                <?php dynamic_sidebar('footer_sidebar_3' ); ?>
                            <?php endif; ?>
					</div><!-- .mailing-list -->

					<!-- flickr-stream -->
					<div class="col-md-3 col-sm-6 footer-widget widget ">
						 <?php if ( is_active_sidebar( 'footer_sidebar_4' ) ) : ?>
                                <?php dynamic_sidebar('footer_sidebar_4' ); ?>
                            <?php endif; ?>
					</div><!-- .flickr-stream -->
				</div>
			</div>
		</div>

		<div class="footer-inverse style-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="copyright-table">
							<div class="footer-menu">
								<?php
								if(has_nav_menu('footer_navigation')) {
                                        wp_nav_menu( array(
                                             'theme_location' => 'footer_navigation',
                                             'container' =>false,
                                             'menu_id' => '',
                                             'echo' => true,
                                             'menu_class' => '',
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
                                    }?>
							</div>
							<div class="copyright">
								<?php $options =  get_option('brick_option'); echo wp_kses_post($options['footer_right_text']); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- end footer -->