<section <?php post_class(); ?>>
    <header>
        <h2><?php the_title(); ?></h2>
        <p class="byline">
            by <?php the_title(); ?> on <?php the_date(); ?>
        </p>
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
    </header>
    <footer>
        <a href="<?php the_permalink(); ?>">Post link</a>
    </footer>
</section>