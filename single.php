<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Freestyle BC
 */

get_header(); ?>

<?php if ( has_post_thumbnail() ) {
				$thumb = get_the_post_thumbnail_url();
				} else { ?>
<?php $thumb = "/wp-content/themes/freestyle-bc-2020/images/mountains-img.jpg" ?>
<?php } ?>

<header class="hero-header">
    <div id="jumbotron" class="jumbotron-inner">
        <div class="jumbotron-item jumbotron-fluid" style="background-image: url('<?php echo $thumb;?>');" data-aos="fade-up">
        </div>
    </div>
</header>

<section id="primary" class="content-area col py-5 mt-2">
    <main id="main" class="site-main" role="main">
        <div class="container" data-aos="fade-up">
            

            <div class="entry-header">
                    <?php the_title( '<h1 class="hero">', '</h1>' ); ?>
                </div>

                <?php
        
        $date = get_the_date();

        if (have_posts()) ;
        while ( have_posts() ) : the_post();
        
        echo '<h1 class="entry-title">'.$date.'</h1>';
        the_content();

    
			    the_post_navigation();

		endwhile; // End of the loop.
		?>
            </div>
        </div>

        <section id="news" class="bg-light">
        <div class="container-fluid p-4">
            <div class="row py-2 px-3">
                <a href="/news"><button type="button" class="btn btn-purple">All News</button></a>
            </div>
            <div class="row">

                <?php 
                $args = array( 'posts_per_page' => '3' );
                $recent_posts = new WP_Query($args);
                while( $recent_posts->have_posts() ) :  
                $recent_posts->the_post() ?>

                <?php if ( has_post_thumbnail() ) {
				$thumb_src = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' );
				} else { ?>
                <?php $thumb_src = "/wp-content/themes/freestyle-bc-2020/images/mountains-img.jpg" ?>
                <?php } ?>

                <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_srcset = wp_get_attachment_image_srcset( $thumb_id, 'large' );
                $thumb_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ); 
                ?>

                <div class="col-xs-12 col-lg-4 my-2" data-aos="fade-up">
                    <a href="<?php echo get_permalink() ?>">
                    <img class="box" loading="lazy" src="<?php echo esc_attr( $thumb_src ); ?>" srcset="<?php echo esc_attr( $thumb_srcset ); ?>" sizes="100vw" alt="<?php echo esc_attr( $thumb_alt ); ?>">
                    </a>
                    <p>
                        <?php echo get_the_date( ' F j, Y' ); ?>
                    </p>
                    <h2>
                        <?php the_title() ?>
                    </h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-purple btn-sm">Read More &rarr;</a>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); # reset post data so that other queries/loops work ?>
            </div>
        </div>
    </section>


    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();