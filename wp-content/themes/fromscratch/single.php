<?php get_header();  ?>
    <main class="site-main">
        <?php
            if(have_posts()):

            while(have_posts()):
                the_post();?>
                <section <?php post_class(); ?>>
                    <header>
                        <h2><?php the_title(); ?></h2>
                        <p class="byline">
                            by <a class="author-name" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a> on <?php the_date(); ?>
                        </p>
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                        <div class="tag">
                            <?php the_tags(); ?>
                        </div>
                    </header>
                    <footer>
                        <a href="<?php the_permalink(); ?>">Post link</a>
                    </footer>
                </section>
                <?php comments_template(); ?>
                
            <?php
                endwhile;
            else:
                echo '404! Not Found';
            endif;
        ?>             
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>