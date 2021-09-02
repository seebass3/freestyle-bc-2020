<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Freestyle BC
 */

get_header(); ?>

<section id="primary" class="container-fluid py-4 bg-light">
	<main id="main" class="site-main content-area" role="main">
	<header class="page-header">
				<?php
					the_archive_title( '<h1 class="hero m-0 p-3">', ' News</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
	<div class="row p-lg-3">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
                    <a href="<?php the_permalink(); ?>" class="btn btn-blue btn-sm">Read More &rarr;</a>
                </div>

		<?php endwhile; ?>
		</div>

		<div class="news-nav px-lg-3">
			<div class="next-posts btn p-0"><?php next_posts_link(); ?></div>
			<div class="prev-posts btn p-0"><?php previous_posts_link(); ?></div>
		</div>

		<?php else : ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h1>Not Found</h1>
		</div>

		<?php endif; ?>


	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();