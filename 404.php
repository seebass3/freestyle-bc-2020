<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Freestyle BC
 */

get_header(); ?>

<section id="primary" class="content-area col">
	<main id="main" class="site-main" role="main">
		<div class="container-fluid not-found">
			<div class="container page">


				<section class="error-404 not-found" data-aos="fade-up">
					<header class="page-header">
						<h1 class="page-title">
							<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp-bootstrap-starter' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wp-bootstrap-starter' ); ?>
						</p>

						<?php
						get_search_form();


					?>
					</div>
			</div>


		</div><!-- .page-content -->
</section><!-- .error-404 -->

</main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();