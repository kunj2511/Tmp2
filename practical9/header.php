<?php
/**
 * The header for our theme
 * @package customTheme
 * @version 1.0
 */
?>
<style>
    .site-branding {
    display: inline-flex;
    }
    .site-details {
    padding-left: 20px;
    }
</style>
<!doctype html>
<html <?php language_attributes();?>>
<head>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
 
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar gradient-bg main-custom-nav">

        <div class="container">
           <?php if ( get_theme_mod('site_logo') )  ?>

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" />
                    </a>
                    
                    <div class="site-details">
                        <?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
                        <<?php echo $heading_tag; ?> class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </<?php echo $heading_tag; ?>>
                        <div class="site-description"><?php bloginfo( 'description' ); ?></div>
                    </div><!-- .site-details -->
                        
          
    

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ui class="nav1 navbar-nav navbar-right">
	                <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_class' => 'primary-menu',
                            'container' => false,
                            'items_wrap' => '%3$s'
                        ));
                    ?>
                </ui>

        </div>
    </nav>