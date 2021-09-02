<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Freestyle BC
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
        <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid justify-content-end">
                <div id="header-buttons">
                    <a href="/resources"><button type="button" class="btn btn-blue btn-sm">Resources</button></a>
                    <a href="/join"><button type="button" class="btn btn-red btn-sm">Join Now</button></a>
                </div>
            </div>
        </nav>

        <header id="masthead" class="site-header sticky-top <?php echo wp_bootstrap_starter_bg_class(); ?>"
            role="banner">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="navbar-brand">
                        <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>"
                                alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                        <?php else : ?>
                        <a class="site-title"
                            href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                        aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                wp_nav_menu(array(
                'theme_location'  => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-center',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

                    <div id="social-icons">
                        <button type="button" class="btn btn-ins"><a href="https://instagram.com/freestylebc"
                                class="social-link" target="blank"><i class="fab fa-instagram"></i></a></button>
                        <button type="button" class="btn btn-yt"><a
                                href="https://www.youtube.com/channel/UC7dl7h5SCcMXfYVcpimS18w" class="social-link"
                                target="blank"><i class="fab fa-youtube"></i></a></button>
                        <button type="button" class="btn btn-fb"><a
                                href="https://www.facebook.com/BCFreestyleSkiAssociation" class="social-link"
                                target="blank"><i class="fab fa-facebook-f"></i></a></button>
                    </div>

                </nav>

            </div>
        </header>
        <?php endif; ?>