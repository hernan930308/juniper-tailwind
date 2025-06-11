<?php

namespace Juniper\Taxonomies;

class categoria_ejemplo {
	public string $taxonomy_slug;
	public string $taxonomy_name;

	public function __construct() {
		$this->taxonomy_slug = 'categoria_ejemplo';
		$this->taxonomy_name = 'categoria_ejemplo';

		add_action( 'init', array( $this, 'register_custom_taxonomy' ) );
	}

	public function register_custom_taxonomy() {
		$args = array(
			'label'        => $this->taxonomy_name,
			'public'       => true,
			'rewrite'      => false,
			'hierarchical' => true
		);

		register_taxonomy( $this->taxonomy_slug, 'cpt_example', $args );
	}

}
