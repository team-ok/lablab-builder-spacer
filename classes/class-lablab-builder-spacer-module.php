<?php

/**
 * The lablab builder spacer module core class.
 *
 * @since     1.0.0
 */

if ( class_exists( 'Lablab_Module_Builder' ) ):

	class Lablab_Builder_Spacer_Module extends Lablab_Module_Builder {

		public function __construct(){

			// The module title.
			$this->title = __( 'Spacer', 'lablab-spacer' );

			// The acf field key of the module.
			$this->key = 'field_lablab_spacer';

			// The acf field name of the module.
			$this->name = 'lablab-spacer';

			// The current version of the module.
			$this->version = '1.0.0';

			// The module-specific acf fields of the module.
			$this->fields = plugin_dir_path( __DIR__ ) . 'fields/';

			// The absolute path to a partial template file that both retrieves content data and prints the output.
			$this->template_path = plugin_dir_path( __DIR__ ) . 'template/lablab-spacer.php';

			// The less fragment(s) to be added to the beans uikit less compiler.
			$this->less_fragments = plugin_dir_path( __DIR__ ) . 'less/';

		}
	}
	
endif;