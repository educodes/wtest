<?php
/**
 * Plugin Name:       weppy 3d
 * Plugin URI:        https://weppy.co/
 * Description:       modelviewer
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            weppy co
 * Author URI:        https://weppy.co/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:       https://co.weppy.co/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
define('WEPPY_3D', plugin_dir_path( ( __FILE__ ) ) );
define('WEPPY_3D_URL', plugin_dir_url( ( __FILE__ ) ) );
define('WEPPY_3D_SETTING_URL', admin_url( '/admin.php?page=weppy-3d' ) );
include(WEPPY_3D.'/public/model_viewer.php');
$file_dir = WP_CONTENT_DIR . '/uploads/model_3D/';
function pluginprefix_activate() { 
	if(!file_exists($file_dir))wp_mkdir_p($file_dir);
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );
function pluginprefix_deactivate() {
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );