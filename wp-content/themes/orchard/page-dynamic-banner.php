<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Template Name: Dynamic Banner
 */

get_header();
?>
    <main class="main">
        <section class="section">
            <h1><?php the_title(); ?></h1>
            <?php
            echo wp_get_attachment_image(
                orchard_find_page_banner_image(
                    get_the_ID()
                ),
                'full'
            );
            ?>
        </section>
    </main>
<?php
get_footer();
?>