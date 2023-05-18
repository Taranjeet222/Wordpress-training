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
        echo $instance['title'];
        $args['after_title'];
        $contributors = dghc_get_repository_contributors(
            $instance['repo']
        );
        include plugin_dir_path(__FILE__).'templates/widget.php';
        $args['after_widget'];
	}

	public function form( $instance ) {
        $title_id = $this->get_field_id('title');
        $title_name = $this->get_field_name('title');
        $title = '';
        if( isset($instance['title']) ){
            $title = esc_attr($instance['title']);
        }
        $repo_id = $this->get_field_id('repo');
        $repo_name = $this->get_field_name('repo');
        $repo = '';
        if( isset($instance['repo']) ){
            $repo = esc_attr($instance['repo']);
        }
		include plugin_dir_path(__FILE__).'templates/widget-form.php';
	}

	public function update( $new_instance, $old_instance ) {
        $new_instance['title'] = strip_tags($new_instance['title']);
        $new_instance['repo'] = strip_tags($new_instance['repo']);
		return $new_instance;
	}
}

add_action( 'widgets_init', 'wpdocs_register_widgets' );
function wpdocs_register_widgets() {
	register_widget( 'DGHC_widget' );
}