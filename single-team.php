<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Freestyle BC
 */

get_header(); ?>

<?php if( get_field('hero_image') ): ?>
<header class="hero-header" class="content-area col-12">
	<div id="jumbotron" class="jumbotron-inner position-relative">
		<div class="jumbotron-item jumbotron-fluid" style="background-image: url('<?php the_field('hero_image'); ?>');">
			<div class="col col-lg-4 bg-highlight py-2 px-3 p-lg-5 athlete-name">
				<?php the_title( '<h1 class="hero text-white">', '</h1>' ); ?>
				<?php $discipline = wp_get_post_terms( get_the_ID(), 'team-disc'); ?>
                <h4 class="text-white"><?php echo $discipline[0]->name; ?></h4>
				<div id="social" class="mb-2">
					<?php if( get_field('instagram') ): ?>
					<a href="<?php the_field('instagram'); ?>" class="social-link mr-2" target="blank"><i
							class="fab fa-instagram"></i></a></button>
					<?php endif; ?>
					<?php if( get_field('athlete_profile') ): ?>
					<a href="<?php the_field('athlete_profile'); ?>" class="social-link" target="blank"><i
							class="fab fa-youtube"></i></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

</header>
<?php endif; ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-4 py-2 px-3 p-lg-5 bg-blue">
					<h1 class="text-white mb-2">Quick Facts</h1>
					<?php if( get_field('date_of_birth') ): ?>
					<h4 class="text-white pb-2" style="display: inline;">Age: </h4>
					<h5 class="text-white pb-2" style="display: inline;">
					<?php
  					//date in mm/dd/yyyy format; or it can be in other formats as well
  					$birthDate = get_field('date_of_birth');
  					//explode the date to get month, day and year
  					$birthDate = explode("/", $birthDate);
  					//get age from date or birthdate
  					$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    				? ((date("Y") - $birthDate[2]))
    				: (date("Y") - $birthDate[2]));
  					echo $age;
					?>
					</h5>
					<br />
					<?php endif; ?>
					<?php if( get_field('home_town') ): ?>
					<h4 class="text-white pb-2" style="display: inline;">Home Town: </h4>
					<h5 class="text-white pb-2" style="display: inline;"><?php the_field('home_town'); ?></h5>
					<?php endif; ?>
					<br />
					<?php if( get_field('home_club') ): ?>
					<h4 class="text-white pb-2" style="display: inline;">Home Club: </h4>
					<h5 class="text-white pb-2" style="display: inline;"><?php the_field('home_club'); ?></h5>
					<?php endif; ?>
					<br />
					<?php if( get_field('year_joined') ): ?>
					<h4 class="text-white pb-2" style="display: inline;">Year Joined BC Team: </h4>
					<h5 class="text-white pb-2" style="display: inline;"><?php the_field('year_joined'); ?></h5>
					<?php endif; ?>
				</div>
				<div class="col-12 col-lg-8 p-3 p-lg-5">

					<?php if (have_posts()) ;
        			while ( have_posts() ) : the_post();
        
        			the_content();

					endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();