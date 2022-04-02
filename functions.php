<?php
/**
 * Child theme functions and definitions.
 */
function goya_child_enqueue_styles() {
wp_enqueue_style( 'goya-style' , get_template_directory_uri() . '/style.css' );    
    wp_enqueue_style( 'goya-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'goya-style' ),
        1.0
    );
}
add_action(  'wp_enqueue_scripts', 'goya_child_enqueue_styles', 99 );

function goya_child_javascript() {
    ?>
    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//matomo.gravity-race.fr/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '2']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <!-- End Matomo Code -->

    <!-- Start cookieyes banner -->
    <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/4506d62c78997106e503fcc3/script.js"></script>
    <!-- End cookieyes banner -->
    <?php
}
add_action('wp_head', 'goya_child_javascript');

