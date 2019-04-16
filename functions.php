<?php

add_action( 'wp_enqueue_scripts', 'repairme_child_css', 99999 );
add_action( 'wp_enqueue_scripts', 'repairme_child_js', 99999 );

// Load CSS
function repairme_child_css() {

	// repairme child theme styles

	$parent_style = 'repairme-style';

	wp_enqueue_style( 'repairme-child-theme-css',
		get_stylesheet_directory_uri() . '/style.css',
		array ( $parent_style ),
		wp_get_theme()->get( 'Version' )
	);

	if ( is_rtl() ) {

		wp_enqueue_style( 'repairme-child-theme-css-rtl',
			get_stylesheet_directory_uri() . '/rtl.css',
			array ( $parent_style ),
			wp_get_theme()->get( 'Version' )
		);
	}
}

/* Load JS */
function repairme_child_js() {

    // repairme child theme styles

    wp_enqueue_script( 'repairme-child-theme-js',
        get_stylesheet_directory_uri() . '/scripts.js',
        null,
        null,
        true
    );

    wp_enqueue_script( 'readmore-js',
        get_stylesheet_directory_uri() . '/node_modules/readmore-js/readmore.min.js',
        null,
        null,
        true
    );
}
