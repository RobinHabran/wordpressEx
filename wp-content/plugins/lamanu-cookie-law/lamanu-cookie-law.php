<?php
/*
Plugin Name: LAMANU-cookie-law
Version: 0.1
Plugin URI: http://wordpress
Description: WordPress Plugin for european cookie law.
Author: Robin Habran
Author URI: https://www.linkedin.com/in/robin-habran-759b42119/
*/

// $par_1 = name of the action to which the function 'lamanu_scripts' is hooked
// $par_2 = name of the function you want to call

add_action('wp_enqueue_scripts','lamanu_scripts');
function lamanu_scripts() {
  wp_enqueue_script('tarteaucitron','http://wordpress/wp-content/plugins/lamanu-cookie-law/js/tarteaucitron/tarteaucitron.js');
}

add_action('wp_head','addScript');
function addScript() {
    ?>
    <script type="text/javascript">
        tarteaucitron.init({
    	  "privacyUrl": "", /* Privacy policy url */

    	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
    	  "cookieName": "tarteaucitron", /* Cookie name */
    
    	  "orientation": "middle", /* Banner position (top - bottom) */
    	  "showAlertSmall": true, /* Show the small banner on bottom right */
    	  "cookieslist": true, /* Show the cookie list */

    	  "adblocker": false, /* Show a Warning if an adblocker is detected */
    	  "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
    	  "highPrivacy": true, /* Disable auto consent */
    	  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

    	  "removeCredit": false, /* Remove credit link */
    	  "moreInfoLink": true, /* Show more info link */
    	  "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */

    	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                          
    	  "readmoreLink": "/cookiespolicy" /* Change the default readmore link */
        }),
        tarteaucitron.user.analyticsUa = 'UA-XXXXXXX-XX';
        tarteaucitron.user.analyticsMore = function () { /* add here your optionnal ga.push() */ };
        (tarteaucitron.job = tarteaucitron.job || []).push('analytics');
    </script>

<?php }

// à comprendre : 
add_action('admin_menu', 'plugin_setup_menu');
function plugin_setup_menu() {
    add_menu_page('Gestion de cookie', 'Cookie', 'manage_options', 'cookie-plugin', 'setup_init');
}
function setup_init() {
    include_once 'view/option.php';
}