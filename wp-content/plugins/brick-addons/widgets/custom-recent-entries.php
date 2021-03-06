<?php

add_action('widgets_init', 'Brick_register_recent_posts_widget');
function Brick_register_recent_posts_widget(){
	register_widget( 'Brick_WP_Widget_Recent_Posts' );
}

class Brick_WP_Widget_Recent_Posts extends WP_Widget {

	function __construct() {
		$widget_ops = array('classname' => 'widget_nz_recent_entries', 'description' => esc_html__( "Your site&#8217;s most recent Posts.", 'brick') );
		parent::__construct('nz-recent-posts', esc_html__('*Recent Posts', 'brick'), $widget_ops);
		$this->alt_option_name = 'widget_nz_recent_entries';
	}

	function widget($args, $instance) {

		global $post;

		$cache = array();
		if ( ! $this->is_preview() ) {
			$cache = wp_cache_get( 'widget_recent_posts', 'widget' );
		}

		if ( ! is_array( $cache ) ) {
			$cache = array();
		}

		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Recent Posts', 'brick');

		/** This filter is documented in wp-includes/default-widgets.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( esc_attr($instance['number']) ) : 5;
		if ( ! $number )
			$number = 5;

		/**
		 * Filter the arguments for the Recent Posts widget.
		 *
		 * @since 3.4.0
		 *
		 * @see WP_Query::get_posts()
		 *
		 * @param array $args An array of arguments used to retrieve the recent posts.
		 */
		$r = new WP_Query( apply_filters( 'widget_posts_args', array(
			'posts_per_page'      => $number,
			'no_found_rows'       => true,
			'post_status'         => 'publish'
		) ) );

		if ($r->have_posts()) :
?>
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<div class="widget-content">
		<?php while ( $r->have_posts() ) : $r->the_post(); ?>
			<div class="table-content">
								<div class="table-cell blog-image">
									<a href="#"><?php the_post_thumbnail('69'); ?></a>
								</div>
								<div class="table-cell blog-content">
									<p><?php the_title(); ?></p>
									<span class="date"><a href="#"><?php the_time('j M Y'); ?></a></span>
								</div>
							</div>
			

		<?php endwhile; ?>
		</div>
		<?php echo $after_widget; ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;

		if ( ! $this->is_preview() ) {
			$cache[ $args['widget_id'] ] = ob_get_flush();
			wp_cache_set( 'widget_nz_recent_posts', $cache, 'widget' );
		} else {
			ob_end_flush();
		}
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_nz_recent_entries']) )
			delete_option('widget_nz_recent_entries');

		return $instance;
	}

	function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html__( 'Title:', 'brick'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php esc_html__( 'Number of posts to show:', 'brick'); ?></label>
		<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

<?php
	}
}