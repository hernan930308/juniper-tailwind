<?php

require_once 'gutenberg-styles.php';
require_once 'pattern-categories.php';

$juniper_blocks = new \Juniper\Blocks\JuniperBlocks();
$juniper_blocks->include_blocks_functions();
$juniper_cpt_example       = new \Juniper\Cpt\Cpt_example();
$juniper_categoria_ejemplo = new \Juniper\Taxonomies\categoria_ejemplo();
