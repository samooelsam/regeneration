<?php
/*
Plugin Name: Divi Table Of Contents Maker
Plugin URI:  https://www.peeayecreative.com/product/divi-table-of-contents-maker/
Description: Improve your blog post navigation, readability, and SEO with the first and only table of contents module for Divi! Includes hundreds of customization settings and design styling options.
Version:     1.3.1
Author:      Pee-Aye Creative
Author URI:  https://www.peeayecreative.com/
Update URI: https://elegantthemes.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: pac-divi-table-of-contents
Domain Path: /languages

Divi Table Of Contents is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Table Of Contents is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Table Of Contents. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if (!defined('pac_dtoc_plugin_basename')) {
    define('pac_dtoc_plugin_basename', plugin_basename(__FILE__));
}
if (!defined('pac_dtoc_plugin_version')) {
    define('pac_dtoc_plugin_version', "1.3.1");
}

if ( ! function_exists( 'dtoc_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function dtoc_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviTableOfContents.php';
}
add_action( 'divi_extensions_init', 'dtoc_initialize_extension' );
endif;


// Add Documentation & Support header
function plugin_extra_headers_divi_table_of_contents($headers){
	
	if (!in_array('DocumentationURI', $headers)) {
		$headers[] = 'DocumentationURI';
	}
	return $headers;
}
function plugin_meta_links_divi_table_of_contents($links, $file)
{
    if (pac_dtoc_plugin_basename !== $file) {
        return $links;
    }
    $links[] = sprintf('<a href="%s"  target="_blank">'.esc_html__('Documentation & Support', 'pac-divi-table-of-contents').'</a>', esc_url('https://www.peeayecreative.com/docs/divi-table-of-contents-maker/'));
    return $links;
}

add_filter('extra_plugin_headers', 'plugin_extra_headers_divi_table_of_contents');
add_filter('plugin_row_meta', 'plugin_meta_links_divi_table_of_contents', 10, 2);


// Integer our plugin with rankmath
if (!function_exists('is_plugin_active')) {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
}
if ( is_plugin_active( 'seo-by-rank-math/rank-math.php' ) ) {
    add_filter( 'rank_math/researches/toc_plugins', function( $toc_plugins ) {
        $toc_plugins['divi-table-of-contents-maker/divi-table-of-contents.php'] = 'Divi Table Of Contents Maker';
        return $toc_plugins;
    });
}