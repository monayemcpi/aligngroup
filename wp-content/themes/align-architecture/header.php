<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Align_Architecture
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" />
    <meta name="description" content="Align Architechture" />
    <meta name="generator" content="Align Architechture" />
    <meta name="robots" content="index,follow" />
	<?php wp_head(); ?>
</head>

<body class="<?php echo customBodyClass(); ?>">
<div id="app">

<?php //var_dump(getMenu()) ; ?>

<!--=============== Start Header ==================-->
<header class="header-main">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".align-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url() ; ?>">
                    <img src="<?php echo getLogo() ; ?>" class="img-responsive">
                    <span class="text-uppercase"> <?php echo get_bloginfo(); ?> </span>
                </a>
            </div>
            <div class="collapse navbar-collapse align-collapse">
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'primary-menu',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav navbar-nav navbar-right main-navigation',
                    ) ); 
                ?>
            </div>
        </div>
    </nav>
</header>
<!--=============== End Header   ==================-->
