<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Freestyle_BC
 */

get_header();
?>

<main id="primary" class="site-main">

  <section id="athletes" class="container-fluid py-5"
    x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'park' }" id="tab_wrapper">
    <nav class="row flex justify-content-center top">
      <ul class="list-unstyled">
        <li class="float-left">
          <a :class="{ 'underline': tab === 'park' }" @click.prevent="tab = 'park'" href="#">Park & Pipe</a>
        </li>
        <li class="float-right">
          <a a :class="{ 'underline': tab === 'moguls' }" @click.prevent="tab = 'moguls'" href="#">Moguls</a>
        </li>
      </ul>
    </nav>
    <div x-show.transition.in.opacity.duration.750ms="tab === 'park'">
      <div class="container-fluid" x-data="{ selected: 'Athletes.Park & Pipe' }">
        <nav class="row flex justify-content-center sub">
          <ul class="list-unstyled">
            <li class="py-2 float-left" :class="{ 'underline': selected === 'Athletes.Park & Pipe' }">
              <a href="#" @click="selected = 'Athletes.Park & Pipe'"
                x-bind:class="{ 'underline': selected === 'Athletes.Park & Pipe' }">Athletes</a>
            </li>
            <li class="py-2 float-right" :class="{ 'underline': selected === 'Coaches.Park & Pipe' }">
              <a href="#" @click="selected = 'Coaches.Park & Pipe'"
                x-bind:class="{ 'underline': selected === 'Coaches.Park & Pipe' }">Coaches</a>
            </li>
          </ul>
        </nav>
        <div class="row">
          <?php
      /* Start the Loop */
      while ( have_posts() ) :
        the_post();
        $level = wp_get_post_terms( get_the_ID(), 'team-cat');
        $discipline = wp_get_post_terms( get_the_ID(), 'team-disc');
        $thumb_src = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' );
        $thumb_id = get_post_thumbnail_id();
        $thumb_srcset = wp_get_attachment_image_srcset( $thumb_id, 'large' );
        $thumb_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
         ?>
          <a class="col-lg-4 py-2" href="<?php the_permalink();?>" id="<?php echo $discipline[0]->name; ?>"
            x-show.transition.in.opacity.duration.750ms="selected === '<?php echo $level[0]->name;?>.<?php echo $discipline[0]->name;?>'">
            <div class="overflow-hidden single-bg-image">
              <div class="square">
                <img class="profile-image" loading="lazy" src="<?php echo $thumb_src; ?>"
                  srcset="<?php echo esc_attr( $thumb_srcset ); ?>" sizes="100vw" />
                <div class="justify-content-center align-items-center overlay-image-opacity">
                  <h3 class="text-center text-white text-uppercase">
                    <?php $title = get_the_title(); echo str_replace(' ', '<br />', $title);?>
                  </h3>
                </div>
              </div>
            </div>
          </a>
          <?php endwhile;
                      ?>
        </div>
      </div>
    </div>

    <div x-show.transition.in.opacity.duration.750ms="tab === 'moguls'">
      <div class="container-fluid" x-data="{ selected: 'Athletes.Moguls' }">
        <nav class="row flex justify-content-center sub">
          <ul class="list-unstyled">
            <li class="py-2 float-left" :class="{ 'underline': selected === 'Athletes.Mogulss' }">
              <a href="#" @click="selected = 'Athletes.Moguls'"
                x-bind:class="{ 'underline': selected === 'Athletes.Moguls' }">Athletes</a>
            </li>
            <li class="py-2 float-right" :class="{ 'underline': selected === 'Coaches.Moguls' }">
              <a href="#" @click="selected = 'Coaches.Moguls'"
                x-bind:class="{ 'underline': selected === 'Coaches.Moguls' }">Coaches</a>
            </li>
          </ul>
        </nav>
        <div class="row">
          <?php
      /* Start the Loop */
      while ( have_posts() ) :
        the_post();
        $level = wp_get_post_terms( get_the_ID(), 'team-cat');
        $discipline = wp_get_post_terms( get_the_ID(), 'team-disc');
        $thumb_src = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' );
        $thumb_id = get_post_thumbnail_id();
        $thumb_srcset = wp_get_attachment_image_srcset( $thumb_id, 'large' );
        $thumb_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ); 
         ?>
          <a class="col-lg-4 py-2" href="<?php the_permalink();?>" id="<?php echo $discipline[0]->name; ?>"
            x-show.transition.in.opacity.duration.750ms="selected === '<?php echo $level[0]->name;?>.<?php echo $discipline[0]->name;?>'">
            <div class="overflow-hidden single-bg-image">
              <div class="square">
                <img class="profile-image" loading="lazy" src="<?php echo $thumb_src; ?>"
                  srcset="<?php echo esc_attr( $thumb_srcset ); ?>" sizes="100vw" />
                <div class="justify-content-center align-items-center overlay-image-opacity">
                  <h3 class="text-center text-white text-uppercase">
                    <?php $title = get_the_title(); echo str_replace(' ', '<br />', $title);?>
                  </h3>
                </div>
              </div>
            </div>
          </a>
          <?php endwhile;
                          ?>
        </div>
      </div>
    </div>
  </section>

</main><!-- #main -->

<?php
get_footer();