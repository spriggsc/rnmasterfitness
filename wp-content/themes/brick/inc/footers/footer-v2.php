<!-- footer -->
	<footer>
		<div class="footer-inverse">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="copyright-table">
							<div class="copyright">
								<?php $options =  get_option('brick_option'); echo wp_kses_post($options['footer_right_text']); ?>
							</div>
							<div class="social-links">
								<div class="social-links-content">
									<?php include(get_template_directory().'/inc/social-links.php'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- end footer -->