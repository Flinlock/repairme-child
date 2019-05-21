<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

$theme_options = repairme_get_theme_mods();
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Inject proper tracking codes and structured data -->
    <!-- shared between both sites -->

    <!-- Local business markup - shared between sites-->
    <script type='application/ld+json'> 
        {
            "@context": "http://www.schema.org",
            "@type": "LocalBusiness",
            "name": "Edge Computer Repair & Data Recovery",
            "url": "https://edgecomputerrepair.com",
            "logo": "https://edgedacomputerrepair.com/wp-content/uploads/favicon.png",
            "image": "https://edgedatarecovery.com/wp-content/uploads/edge-pic.jpg",
            "description": "Professional data recovery services on all forms of media, specializing in severely damaged devices that were declared \"unrecoverable\" by other companies.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1720 West Mulberry Street STE B10",
                "addressLocality": "Fort Collins",
                "addressRegion": "Colorado",
                "postalCode": "80525",
                "addressCountry": "US"
            },
            "areaServed": {
                "@type": "geoCircle",
                "name": "Edge Service Area",
                "geoMidpoint": {
                    "@type": "GeoCoordinates",
                    "postalCode": "80521",
                    "latitude": "40.582520",
                    "longitude": "-105.107485",
                    "description": "Edge serves all of Northern Colorado",
                    "name": "Edge Geo Location"
                },
                "geoRadius": "96560.6"
            },
            "numberOfEmployees": "2",
            "telephone": "+1 (970) 568-8478",
            "hasMap": "https://goo.gl/maps/ncHe1F14MSpesaQu8",
            "openingHours": "Mo, Tu, We, Th, Fr 10:00-17:30 Sa 11:00-16:00",
            "priceRange": "$80 - $1300",
            "currenciesAccepted": "USD",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+1 (970) 568-8478",
                "contactType": "customer service"
            }
        }
    </script>

    <?php
    if (strpos(site_url(), 'edgedatarecovery') !== false) {
        ?>
        <!-- Analytics tracking tag for Edge Data Recovery -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133456637-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-133456637-2');
        </script>
        
        <?php
    } elseif (strpos(site_url(), 'edgecomputerrepair') !== false) {
        ?>
        <!-- Analytics tracking tag for Edge Computer Repair -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133456637-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-133456637-1');
        </script>

       
        <?php
    } ?>



    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if ( ! repairme_get_customizer_option( 'hide_preloader' ) ) { ?>
    <!-- PRELOADER -->
    <div id="preloader">
        <div id="preloader-status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
            <div id="preloader-title"><?php esc_html_e( 'Loading', 'repairme' ) ?></div>
        </div>
    </div>
    <!-- /PRELOADER -->
<?php } ?>

<div class="body-overlay"></div>

<?php
// before header
if ( repairme_is_frontpage() ) {
	do_action( 'repairme_before_header' );
}
// HEADER
if ( ! empty( $_GET[ "header" ] ) ) {
	$query_header_value = esc_attr( $_GET[ "header" ] );
}
if ( isset( $query_header_value ) && in_array( $query_header_value, array ( "header1", "header2", "header3" ) ) ) {
	repairme_print_header( $query_header_value, $theme_options );
} else {
	if ( is_front_page() && repairme_get_customizer_option( 'homepage_header' ) != '' ) {
		// header with main slider
		repairme_print_header( 'header1', $theme_options );
	} elseif ( is_front_page() || is_home() ) {
		// header homepage
		repairme_print_header( 'header1', $theme_options );
	} else {
		// header default
		$page_header = get_theme_mod( 'main_menu_style', 'header1' );
		repairme_print_header( $page_header, $theme_options );
	}
}
// after header
if ( repairme_is_frontpage() ) {
	do_action( 'repairme_after_header' );
}
?>
