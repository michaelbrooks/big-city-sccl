<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <div id="header-wrapper">
        <div id="header">
            <a id="header-link" href="<?php echo home_url(); ?>">
                <h1><?php bloginfo('name'); ?></h1>
            </a>
            <div id="search-box">
                <?php get_search_form(); ?>
            </div><!-- end of #search-box -->
            <h2><?php bloginfo('description'); ?></h2>
        </div>
    </div>
    <div id="access-wrapper">
        <div id="access" role="navigation">
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main' ) ); ?>
            <div class="clearfix"></div>
        </div>
    </div>
    <div id="root">
        <div id="main">