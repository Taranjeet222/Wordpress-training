<?php get_header();  ?>
    <main class="site-main">
        <?php
            if(have_posts()):
                the_archive_title('<h3>', '</h3>');
            while(have_posts()):
                the_post();
                get_template_part('content','entity');
            ?>
            <?php
                endwhile;
                the_posts_pagination(
                    array(
                        'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                        'next_text'          => __( 'Next page', 'twentyfifteen' ),
                        /* translators: Hidden accessibility text. */
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                    )
                );
            else:
                echo '404! Not Found';
            endif;
            ?>             
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>