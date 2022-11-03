<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoverNews
 */

?>
<!doctype html>
<html <?php //language_attributes(); ?> lang="vi">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Th&agrave;nh phố Hồ Ch&iacute; Minh" />
    <meta name="geo.position" content="10.793751;106.642389" />
    <meta name="ICBM" content="10.793751, 106.642389" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="alternate" href="<?php echo getCurrentURL(); ?>" hreflang="vi-vn" />
    <link rel = "canonical" href = "<?php echo getCurrentPageURL(); ?>" />

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="y7Du03hl"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
} ?>

<?php
function getCurrentPageURL() {

    global $_SERVER;

    $pageURL = 'http';

    if(isset($_SERVER["HTTPS"]))

    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}

    $pageURL .= "://";

    if ($_SERVER["SERVER_PORT"] != "80") {

        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

    } else {

        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

    }

    $pageURL = explode("/page/", $pageURL);

    return $pageURL[0];

}

function getCurrentURL() {

    global $_SERVER;

    $pageURL = 'http';

    if(isset($_SERVER["HTTPS"]))

    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}

    $pageURL .= "://";

    if ($_SERVER["SERVER_PORT"] != "80") {

        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

    } else {

        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

    }

    return $pageURL;

}
$enable_preloader = covernews_get_option('enable_site_preloader');
if ( 1 == $enable_preloader ):
    ?>
    <div id="af-preloader">
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
    </div>
<?php endif; ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'covernews'); ?></a>

<?php covernews_get_block('header-layout-1'); ?>
    <div id="content" class="container">
<?php
    do_action('covernews_action_get_breadcrumb');