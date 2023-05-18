<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="site container">
            <header class="site-header">
                <h1 class="site-title"><a href="http://php.dv">WPSITE</a></h1>
                <?php from_scratch_primary_menu(); ?>
            </header>
            <div id="content" class="site-content">