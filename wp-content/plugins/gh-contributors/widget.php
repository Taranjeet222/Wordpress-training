<?php
class DGHC_widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
            false,
            'Display Github Constructors Widget'
        );
	}

	public function widget( $args, $instance ) {
        $args['before_widget'];
        $args['before_title'];
        echo "WIDGET TITLE";
        $args['after_title'];
        $args['after_widget'];
	}

	public function form( $instance ) {
		// outputs the options form in the admin
	}

	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

add_action( 'widgets_init', 'wpdocs_register_widgets' );
function wpdocs_register_widgets() {
	register_widget( 'DGHC_widget' );
}