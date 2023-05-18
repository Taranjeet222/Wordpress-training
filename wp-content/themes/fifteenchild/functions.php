<?php
add_action( 'wp_enqueue_scripts', 'fifteenchild_enque_parent_and_child_styles' );

function fifteenchild_enque_parent_and_child_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}
if ( ! function_exists( 'twentyfifteen_post_thumbnail' ) ) :
	/**
	 * Display an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * @since Twenty Fifteen 1.0
	 */
	function twentyfifteen_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

		<div class="post-thumbnail fifteenchild">
			<?php the_post_thumbnail( array(
                'alt' => '',
            )
            ); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
		?>
	</a>

		<?php
	endif; // End is_singular().
	}
endif;
?>
