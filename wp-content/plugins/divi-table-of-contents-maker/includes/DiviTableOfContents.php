<?php

class DTOC_DiviTableOfContents extends DiviExtension {

	/**
	 * The gettext domain for the extension's translations.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $gettext_domain = 'pac-divi-table-of-contents';

	/**
	 * The extension's WP Plugin name.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $name = 'divi-table-of-contents';

	

	/**
	 * DTOC_DiviTableOfContents constructor.
	 *
	 * @param string $name
	 * @param array  $args
	 */
	public function __construct( $name = 'divi-table-of-contents', $args = array() ) {
		$this->version 		  = pac_dtoc_plugin_version;
		$this->plugin_dir     = plugin_dir_path( __FILE__ );
		$this->plugin_dir_url = plugin_dir_url( $this->plugin_dir );

		parent::__construct( $name, $args );
	}
}

new DTOC_DiviTableOfContents;
