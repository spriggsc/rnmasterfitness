<?php
$options = get_option('brick_option');
?>
<!-- breadcrumb -->
	<div id="breadcrumb">
		<div class="breadcrumb-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="table-content breadcrumb-table">
							<div class="table-cell v-align-middle page-title">
								<?php if (is_author() || is_archive() || is_day() || is_tag() || is_category() || is_month() || is_day() || is_year()): ?>
                    
                        <?php if (is_category()): ?>
                            <?php echo single_cat_title("", true); ?>
                        <?php elseif(is_tag()): ?>
                            <?php echo single_tag_title("", true); ?>
                        <?php elseif(is_day()): ?>
                            <?php echo get_the_date('F dS Y'); ?>
                        <?php elseif(is_month()): ?>
                            <?php echo get_the_date('Y, F'); ?>
                        <?php elseif(is_year()): ?>
                            <?php echo get_the_date('Y'); ?>
                        <?php elseif(is_author()): ?>
                            <?php $userdata = get_userdata($GLOBALS['author']); ?>
                            <?php echo esc_html__("Articles posted by", 'brick'); ?> "<?php echo esc_html($userdata->display_name); ?>"
                        <?php else: ?>
                            <?php echo esc_html__("Archive", 'brick'); ?>
                        <?php endif ?>
                    
                <?php else: ?>
                   	<?php echo esc_html( $options['blog-title'] ); ?>
                <?php endif; ?>
							</div>
							<div class="table-cell v-align-middle breadcrumb-content">
								<span><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'brick' ); ?></a></span>
								<span class="separator">/</span>
								<span><?php if (is_author() || is_archive() || is_day() || is_tag() || is_category() || is_month() || is_day() || is_year()): ?>
                    
                        <?php if (is_category()): ?>
                            <?php echo single_cat_title("", true); ?>
                        <?php elseif(is_tag()): ?>
                            <?php echo single_tag_title("", true); ?>
                        <?php elseif(is_day()): ?>
                            <?php echo get_the_date('F dS Y'); ?>
                        <?php elseif(is_month()): ?>
                            <?php echo get_the_date('Y, F'); ?>
                        <?php elseif(is_year()): ?>
                            <?php echo get_the_date('Y'); ?>
                        <?php elseif(is_author()): ?>
                            <?php $userdata = get_userdata($GLOBALS['author']); ?>
                            <?php echo esc_html__("Articles posted by", 'brick'); ?> "<?php echo esc_html($userdata->display_name); ?>"
                        <?php else: ?>
                            <?php echo esc_html__("Archive", 'brick'); ?>
                        <?php endif ?>
                    
                <?php else: ?>
                   	<?php echo esc_html( $options['blog-title'] ); ?>
                <?php endif; ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- #breadcrumb -->