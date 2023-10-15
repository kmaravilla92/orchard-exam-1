<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>
    <main class="main">
        <section class="section">
            <?php the_content(); ?>
        </section>
    </main>
<?php get_footer(); ?>