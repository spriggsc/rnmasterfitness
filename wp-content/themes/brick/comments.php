<?php 
if ( post_password_required() ) { ?>
	<?php esc_html_e('This post is password protected. Enter the password to view comments.', 'brick'); ?>
	<?php
		return;
	}
 ?>
 <div id="comments">
	<div class="comments-title">
		<div class="table-content">
			<div class="table-cell v-align-middle hexagon-cell">
				<div class="hexagon"><span class="fa fa-comments"></span></div>
			</div>
			<div class="table-cell v-align-middle">
				<h4><?php comments_number(__('Comments', 'brick'), esc_html__('Comment (1) ', 'brick'), esc_html__('Comments (%) ', 'brick') );?></h4>
				<?php esc_html_e('join the conversation', 'brick'); ?>
			</div>
		</div>
	</div>
<div class="comment">
   
    <ul class="comments">
       	<?php wp_list_comments(array( 'callback' => 'brick_comment' )); ?>
    </ul>
    <?php the_comments_navigation(); ?>
</div>
<div class="leave-comment">
							<div class="title"><?php esc_html_e('Leave A Comment', 'brick'); ?></div>
							<div class="form">
        <?php
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			//Custom Fields
			$fields =  array(
					'author'=> '<p class="name">
									<input type="text" name="author" placeholder="Name">
									<span class="fa fa-user"></span>
								</p>',
					'email' => '<p class="email">
									<input type="text" name="email" placeholder="Email">
									<span class="fa fa-envelope"></span>
								</p>',
					'url' 	=> '<p class="website">
									<input type="text" name="url" placeholder="Website">
									<span class="fa fa-globe"></span>
								</p>',
				);
			//Comment Form Args
			$comments_args = array(
					'fields' => $fields,
						'title_reply'=> '',
						'comment_field' => '<p class="comment">
									<textarea id="comment" name="comment" cols="30" rows="10"></textarea>
								</p>',
						'label_submit' => esc_html__('Submit Comment','brick')
					);											
			// Show Comment Form
			comment_form($comments_args); 
		?>
    </div>
</div>
</div>