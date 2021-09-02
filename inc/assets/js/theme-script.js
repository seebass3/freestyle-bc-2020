jQuery(document).ready(function($) {
    'use strict';
    // here for each comment reply link of WordPress
    $('.comment-reply-link').addClass('btn btn-primary');

    // here for the submit button of the comment reply form
    $('#commentsubmit').addClass('btn btn-primary');

    // The WordPress Default Widgets
    // Now we'll add some classes for the WordPress default widgets - let's go

    // the search widget
    $('.widget_search input.search-field').addClass('form-control');
    $('.widget_search input.search-submit').addClass('btn btn-default');
    $('.variations_form .variations .value > select').addClass('form-control');
    $('.widget_rss ul').addClass('media-list');

    $('.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul, .widget_product_categories ul').addClass('nav flex-column');
    $('.widget_meta ul li, .widget_recent_entries ul li, .widget_archive ul li, .widget_categories ul li, .widget_nav_menu ul li, .widget_pages ul li, .widget_product_categories ul li').addClass('nav-item');
    $('.widget_meta ul li a, .widget_recent_entries ul li a, .widget_archive ul li a, .widget_categories ul li a, .widget_nav_menu ul li a, .widget_pages ul li a, .widget_product_categories ul li a').addClass('nav-link');

    $('.widget_recent_comments ul#recentcomments').css('list-style', 'none').css('padding-left', '0');
    $('.widget_recent_comments ul#recentcomments li').css('padding', '5px 15px');

    $('table#wp-calendar').addClass('table table-striped');

    // Adding Class to contact form 7 form
    $('.wpcf7-form-control').not(".wpcf7-submit, .wpcf7-acceptance, .wpcf7-file, .wpcf7-radio").addClass('form-control');
    $('.wpcf7-submit').addClass('btn btn-primary');

    // Adding Class to Woocommerce form
    $('.woocommerce-Input--text, .woocommerce-Input--email, .woocommerce-Input--password').addClass('form-control');
    $('.woocommerce-Button.button').addClass('btn btn-primary mt-2').removeClass('button');

    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');
    });

    // Fix woocommerce checkout layout
    $('#customer_details .col-1').addClass('col-12').removeClass('col-1');
    $('#customer_details .col-2').addClass('col-12').removeClass('col-2');
    $('.woocommerce-MyAccount-content .col-1').addClass('col-12').removeClass('col-1');
    $('.woocommerce-MyAccount-content .col-2').addClass('col-12').removeClass('col-2');

    // Add Option to add Fullwidth Section
    function fullWidthSection() {
        var screenWidth = $(window).width();
        if ($('.entry-content').length) {
            var leftoffset = $('.entry-content').offset().left;
        } else {
            var leftoffset = 0;
        }
        $('.full-bleed-section').css({
            'position': 'relative',
            'left': '-' + leftoffset + 'px',
            'box-sizing': 'border-box',
            'width': screenWidth,
        });
    }
    fullWidthSection();
    $(window).resize(function () {
        fullWidthSection();
    });

    // Counter
    if ($("#clubmap").length) {
        var a = 0;
        $(window).scroll(function () {

            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function () {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {

                            duration: 3000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });
                });
                a = 1;
            }

        });
    }

    //Tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $('svg #Apex').tooltip({
        title: '<h5>Apex Freestyle Ski Club</h5><ul><li>Penticton, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Silverstar').tooltip({
        title: '<h5>Silverstar Freestyle Ski Club</h5><ul><li>Vernon, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Shames').tooltip({
        title: '<h5>Shames Freestyle Club</h5><ul><li>Terrace, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Kamloops').tooltip({
        title: '<h5>Sun Peaks Freestyle</h5><ul><li>Kamloops, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Vancouver').tooltip({
        title: '<h5>Freestyle Vancouver</h5><ul><li>Vancouver, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Whistler').tooltip({
        title: '<h5>Freestyle Whistler</h5><ul><li>Whistler, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Kimberley').tooltip({
        title: '<h5>Kimberley Ski Club</h5><ul><li>Kimberley, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Panorama').tooltip({
        title: '<h5>Freestyle Panorama</h5><ul><li>Invermere, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Mountwashington').tooltip({
        title: '<h5>Mount Washington Freestyle</h5><ul><li>Courtenay, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Northernbc').tooltip({
        title: '<h5>Northern BC Freestyle Ski Club</h5><ul><li>Prince George, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('svg #Bigwhite').tooltip({
        title: '<h5>Big White Freestyle</h5><ul><li>Kelowna, BC</li></ul>',
        html: true,
        placement: 'bottom',
        container: 'body'
    });

    $('a.nomobile').click(function (event) {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            event.preventDefault();
        }
    });

    var width = $(window).width();
    if (width < 1024) {
        $("a.nomobile").click(function (e) {
            e.preventDefault();
        });
    }

}); //JS Closed put JS before this. 