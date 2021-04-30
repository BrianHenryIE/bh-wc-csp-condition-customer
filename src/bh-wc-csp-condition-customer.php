<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           BrianHenryIE\WC_CSP_Condition_Customer
 *
 * @wordpress-plugin
 * Plugin Name:       Customer Conditions for WooCommerce Conditional Shipping and Payments
 * Plugin URI:        http://github.com/BrianHenryIE/bh-wc-csp-condition-customer/
 * Description:       Use customer is-paying-customer, order count, and total spend as restrictions.
 * Version:           1.0.1
 * Author:            Brian Henry
 * Author URI:        http://BrianHenryIE.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bh-wc-csp-condition-customer
 * Domain Path:       /languages
 */

namespace BrianHenryIE\WC_CSP_Condition_Customer;

use BrianHenryIE\WC_CSP_Condition_Customer\Includes\BH_WC_CSP_Condition_Customer;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path( __FILE__ ) . 'autoload.php';

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BH_WC_CSP_CONDITION_CUSTOMER_VERSION', '1.0.1' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function instantiate_bh_wc_csp_condition_customer() {

	$plugin = new BH_WC_CSP_Condition_Customer();

	return $plugin;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and frontend-facing site hooks.
 */
$GLOBALS['bh_wc_csp_condition_customer'] = $bh_wc_csp_condition_customer = instantiate_bh_wc_csp_condition_customer();
