<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name');?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
<div class="container">
    <!-- site-header -->
    <header class="site-header">

        <!-- hd-search-->
        <?php get_search_form(); ?>
        <H1><a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a></H1>
        <h5><?php bloginfo('description'); ?><?php if (is_page('about-me')) {?>
        - here is the changed page
        <?php }?></h5>
        <nav class="site-nav">
        <?php 
            $args = array(
                'theme_location' => 'primary'
            );
         ?>
        <?php wp_nav_menu( $args ); ?>
        </nav>
    </header><!-- site-header -->