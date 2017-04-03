<?php

	add_action('widgets_init', 'Brick_register_schedule_widget');
	function Brick_register_schedule_widget(){
		register_widget( 'Brick_WP_Widget_Schedule' );
	}

	class  Brick_WP_Widget_Schedule extends WP_Widget {

		public function __construct() {
			parent::__construct(
				'schedule',
				esc_html__('* Schedule', 'brick'),
				array( 'description' => esc_html__('Schedule Form', 'brick'))
			);
		}

		public function widget( $args, $instance ) {

			extract($args);

			$output = "";

			$title = apply_filters( 'widget_title', $instance['title'] );
			$mo = $instance['mo'] ? wp_kses($instance['mo'], array('span'=>array('style'=>array()))) : '';
			$tu = $instance['tu'] ? wp_kses($instance['tu'], array('span'=>array('style'=>array()))) : '';
			$we = $instance['we'] ? wp_kses($instance['we'], array('span'=>array('style'=>array()))) : '';
			$th = $instance['th'] ? wp_kses($instance['th'], array('span'=>array('style'=>array()))) : '';
			$fr = $instance['fr'] ? wp_kses($instance['fr'], array('span'=>array('style'=>array()))) : '';
			$sa = $instance['sa'] ? wp_kses($instance['sa'], array('span'=>array('style'=>array()))) : '';
			$su = $instance['su'] ? wp_kses($instance['su'], array('span'=>array('style'=>array()))) : '';

			$output .= $before_widget;
			if ( ! empty( $title ) ){$output .= $before_title . $title . $after_title;}
			$output .='<div class="nz-schedule">';
				$output .= '<ul>';
					$output .= '<li class="nz-clearfix"><div class="day">'.esc_html__('Monday', 'brick').'</div><div class="hours">'.$mo.'</div></li>';
					$output .= '<li class="nz-clearfix"><div class="day">'.esc_html__('Tuesday', 'brick').'</div><div class="hours">'.$tu.'</div></li>';
					$output .= '<li class="nz-clearfix"><div class="day">'.esc_html__('Wednesday', 'brick').'</div><div class="hours">'.$we.'</div></li>';
					$output .= '<li class="nz-clearfix"><div class="day">'.esc_html__('Thursday', 'brick').'</div><div class="hours">'.$th.'</div></li>';
					$output .= '<li class="nz-clearfix"><div class="day">'.esc_html__('Friday', 'brick').'</div><div class="hours">'.$fr.'</div></li>';
					$output .= '<li class="nz-clearfix"><div class="day">'.esc_html__('Saturday', 'brick').'</div><div class="hours">'.$sa.'</div></li>';
					$output .= '<li class="nz-clearfix"><div class="day">'.esc_html__('Sunday', 'brick').'</div><div class="hours">'.$su.'</div></li>';
				$output .= '</ul>';
			$output .='</div>';
			$output .= $after_widget;
			echo $output;
		}

	 	public function form( $instance ) {

			$defaults = array(
	 			'title'       => esc_html__('Schedule', 'brick'),
	 			'mo'      => '',
	 			'tu'      => '',
	 			'we'      => '',
	 			'th'      => '',
	 			'fr'      => '',
	 			'sa'      => '',
	 			'su'      => ''
	 		);

	 		$instance = wp_parse_args((array) $instance, $defaults);
			?>
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo esc_html__( 'Title:', 'brick' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'mo' ); ?>"><?php echo esc_html__( 'Monday:', 'brick' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'mo' ); ?>" name="<?php echo $this->get_field_name( 'mo' ); ?>" type="text" value="<?php echo $instance['mo']; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'tu' ); ?>"><?php echo esc_html__( 'Tuesday:', 'brick' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'tu' ); ?>" name="<?php echo $this->get_field_name( 'tu' ); ?>" type="text" value="<?php echo $instance['tu']; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'we' ); ?>"><?php echo esc_html__( 'Wednesday:', 'brick' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'we' ); ?>" name="<?php echo $this->get_field_name( 'we' ); ?>" type="text" value="<?php echo $instance['we']; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'th' ); ?>"><?php echo esc_html__( 'Thursday:', 'brick' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'th' ); ?>" name="<?php echo $this->get_field_name( 'th' ); ?>" type="text" value="<?php echo $instance['th']; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'fr' ); ?>"><?php echo esc_html__( 'Friday:', 'brick' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'fr' ); ?>" name="<?php echo $this->get_field_name( 'fr' ); ?>" type="text" value="<?php echo $instance['fr']; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'sa' ); ?>"><?php echo esc_html__( 'Saturday:', 'brick' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'sa' ); ?>" name="<?php echo $this->get_field_name( 'sa' ); ?>" type="text" value="<?php echo $instance['sa']; ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'su' ); ?>"><?php echo esc_html__( 'Sunday:', 'brick' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'su' ); ?>" name="<?php echo $this->get_field_name( 'su' ); ?>" type="text" value="<?php echo $instance['su']; ?>" />
			</p>
			<?php
		}

		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['title']   = strip_tags( $new_instance['title'] );
			$instance['mo']      = $new_instance['mo'];
			$instance['tu']      = $new_instance['tu'];
			$instance['we']      = $new_instance['we'];
			$instance['th']      = $new_instance['th'];
			$instance['fr']      = $new_instance['fr'];
			$instance['sa']      = $new_instance['sa'];
			$instance['su']      = $new_instance['su'];
			return $instance;
		}
	}

?>