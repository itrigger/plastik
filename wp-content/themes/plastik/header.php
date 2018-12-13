<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<link rel="stylesheet" href="/wp-content/themes/plastik/assets/css/jquery.fancybox.min.css" />
<script src="/wp-content/themes/plastik/assets/js/jquery.fancybox.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
        <div class="in">
		<div class="logo">
		    <a href="/"></a>
		</div>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

        <div class="phone">
            <a href="tel:+79185838761">+7 918 583-87-61</a>
        </div>

        <div class="top_contact_btn">
            <a data-fancybox data-src="#contactus" href="javascript:;">Написать нам</a>
            <div id="contactus" style="display: none;">
                    <h2>Hello</h2>
	                <p>You are awesome.</p>
            </div>
        </div>
        </div>
	</header><!-- #masthead -->


	<div class="site-content-contain">
		<div id="content" class="site-content">
