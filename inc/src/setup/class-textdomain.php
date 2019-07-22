<?php
/**
 * Textdomain class
 *
 * @package Aztec
 */

namespace Aztec\Setup;

use Aztec\Base;

/**
 * Load traslation files
 */
class Textdomain extends Base {

	/**
	 * Execute hooks
	 */
	public function init() {
		add_action( 'after_setup_theme', $this->callback( 'load_textdomain' ) );
	}

	/**
	 * Load the installation locale theme language file
	 */
	public function load_textdomain() {
		load_theme_textdomain( 'env-theme', get_stylesheet_directory() . '/languages' );
		load_textdomain( 'env-theme_inc', ABSPATH . '../../inc/languages/env-theme_inc-pt_BR.mo' );
	}
}
