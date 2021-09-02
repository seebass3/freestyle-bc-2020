<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Freestyle BC
 */

get_header(); ?>

<?php if( get_field('hero_image') ): ?>
<header class="hero-header" class="content-area col-12"> 
    <div id="jumbotron" class="jumbotron-inner">
        <div class="jumbotron-item jumbotron-fluid" style="background-image: url('<?php the_field('hero_image'); ?>');">
        </div>
    </div>  
                   
</header>
<?php endif; ?>


<section id="primary" class="content-area col p-0">
<main id="main" class="site-main" role="main">
        <div class="container-fluid body">
        
            <div class="container page">
            <?php the_title( '<h1 class="hero">', '</h1>' ); ?>
                <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
            ?>
                        </div>
                </div>

        </main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();