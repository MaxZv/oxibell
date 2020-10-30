<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oxibell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!--	<meta charset="--><?php //bloginfo( 'charset' ); ?><!--">-->
<!--	<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans+Condensed" />
	<?php wp_head(); ?>
</head>

<body id="oxibell" <?php body_class(); ?>>
<?php //wp_body_open(); ?>
	<header>
        <nav class="oxi-navigation">
            <ul>
                <li><a href="/">Главная</a>
                <li><a href="news.html">Новости</a>
                <li><a href="blog.html">Блог</a>
                <li><a href="#assortment">О блоге</a>
            </ul>
        </nav>
	</header><!-- #masthead -->
