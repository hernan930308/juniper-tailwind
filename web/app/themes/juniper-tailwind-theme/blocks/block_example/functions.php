<?php

add_action(
	'wp_enqueue_scripts',
	function () {
		if ( has_block( 'acf/block_example' ) ) {
			$time       = time();
			$theme_path = get_template_directory_uri();

			wp_enqueue_style( 'block_example-css', $theme_path . '/dist/blocks/block_example/style.css', array(), $time, 'all' );
			wp_enqueue_script( 'block_example-js', $theme_path . '/dist/blocks/block_example/script.js', array(), $time, true );
		}
	}
);

add_action(
	'admin_init',
	function () {
		add_editor_style( '/dist/blocks/block_example/style.css' );
	}
);

add_filter(
	'timber/acf-gutenberg-blocks-data/block_example',
	function ( $context ) {
		return $context;
	}
);
