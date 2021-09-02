<!-- Parnters section starts here -->
<section id="partners">
        <div id="our-partners" class="container-fluid">
            <div class="flex-row partners">
                <div class="d-flex partners flex-wrap justify-content-center">

                    <a href="https://www2.gov.bc.ca/gov/content/home" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                            src="<?php bloginfo('template_url'); ?>/images/BC-Gov-Logo.png" loading="lazy" height="40"
                            alt="Government of British Columbia Logo"></a>


                    <a href="https://www.viasport.ca/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                            src="<?php bloginfo('template_url'); ?>/images/Viasport-Logo.png" loading="lazy" height="40"
                            alt="ViaSport Logo"></a>


                    <a href="https://www.freestylecanada.ski/en/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                            src="<?php bloginfo('template_url'); ?>/images/FC-Logo.png" loading="lazy" height="60"
                            alt="Freestyle Canada Logo"></a>


                    <a href="https://www.csipacific.ca/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                            src="<?php bloginfo('template_url'); ?>/images/CSI-Logo.png" loading="lazy" height="60"
                            alt="Canadian Sport Institute Logo"></a>

                            <a href="https://libertyskis.com/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                            src="<?php bloginfo('template_url'); ?>/images/Liberty-Logo.png" loading="lazy" height="30"
                            alt="Liberty Skis Logo"></a>


                    <a href="https://www.orage.com/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                            src="<?php bloginfo('template_url'); ?>/images/Orage-Logo.png" loading="lazy" height="30"
                            alt="Government of British Columbia Logo"></a>

                    <a href="https://www.technoalpin.com/en.html" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                            src="<?php bloginfo('template_url'); ?>/images/TechnoAlpin-Logo.png" loading="lazy"
                            height="50" alt="Techno Alpin Logo"></a>

                            <a href="https://stokodesign.com/" target="_blank" rel="noreferrer noopener" class="p-logo"><img
                            src="<?php bloginfo('template_url'); ?>/images/stoko.png" loading="lazy"
                            height="35" alt="Stoko Logo"></a>

                </div>
            </div>
        </div>
    </section>
    <!-- Parnters section ends here -->

<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
        <div id="footer-widget" class="row m-0 <?php if(!is_theme_preset_active()){ echo 'bg-dark text-white'; } ?>">
            <div class="container">
                <div class="row footer">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-md-4"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-md-4"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-12 col-md-4"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

<?php }