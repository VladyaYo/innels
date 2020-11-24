<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Innels
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header>
        <div class="container">
            <a href="#top" class="logo">
                <?php get_template_part( 'template-parts/logo', 'include' ); ?>
            </a>
                <?php
                wp_nav_menu( [
                    'container'       => 'nav',
                    'menu_class'      => 'menu',
                    'echo'            => true,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ] );
                ?>
            <div class="brgBtn" id="brgMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
	</header>
