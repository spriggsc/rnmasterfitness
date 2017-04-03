<?php $options =  get_option('brick_option'); ?>
<!-- footer -->
	<footer>
		<div id="home-v5-footer" class="footer-with-bg">
			<div class="container">
				<div class="row top">
					<div class="footer-logo text-center">
						<a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo-v" src="<?php echo esc_url($options['footer_logo']['url']); ?>" alt=""></a>
					</div>
					<div class="col-sm-5 col-md-4">
						<h1><?php echo esc_html( $options['footertitle'] ); ?></h1>
						<h4><?php echo esc_html( $options['footersubtext'] ); ?></h4>
						<div ><a href="<?php echo esc_html( $options['btnlink'] ); ?>" class="btn well-button-large style-3"><?php echo esc_html( $options['btntitle'] ); ?></a></div>
					</div>
					<div class="col-sm-2 col-md-3"></div>
					<div class="col-sm-5">
						<h1 class="with-right-circle"><?php echo esc_html( $options['footertitle2'] ); ?></h1>
						<table>
							<tr>
								<td><?php echo esc_html( $options['footersubtext1'] ); ?></td>
								<td><?php echo esc_html( $options['footersubtext2'] ); ?></td>
							</tr>
							<tr>
								<td><?php echo esc_html( $options['footersubtext3'] ); ?></td>
								<td><?php echo esc_html( $options['footersubtext4'] ); ?></td>
							</tr>
						</table>
					</div>
				</div>

				<!-- gap -->
				<div class="gap" style="height:100px;line-height:100px;"></div>
				<!-- gap -->

				<div class="row bottom">
					<div class="col-sm-6">
						<div class="copyright">
							<?php  echo wp_kses_post($options['footer_right_text']); ?>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="social-links text-center">
							
							<?php include(get_template_directory().'/inc/social-links.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- end footer -->