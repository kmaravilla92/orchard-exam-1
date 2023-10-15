<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchard Exam 1</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__inner">
            <a href="" class="header__logo"></a>
            <nav class="header__nav">
                <?php wp_nav_menu(); ?>
            </nav>
        </div>
    </header>