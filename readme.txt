=== Display WooCommerce User Info ===
Contributors: richymilo
Donate link: http://wobble.co.za/
Tags: woo , wooCommerce , shipping info , billing info , shortcodes
Requires at least: 3.0.1
Tested up to: 4.1.1
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Displays formatted copy of Woo Commerce Shipping and/or Billing information in a shortcode.

== Description ==

Displays formatted copy of Woo Commerce Shipping and/or Billing information in a shortcode.

The following shortcodes can be used:
 [billing_info] 
 [shipping_info]

 if the "id" parameter is added (e.g. [billing_info id="1"] ), that users information will be displayed.
 Otherwise the current users information will be displayed by default.

 The output information will be formatted with the default wooCommerce styling.

== Installation ==


1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add Shortcode to post or page
4. Additionally <?php echo do_shortcode( '[billing_info]' ); ?> can be used to display the shorcode within a theme or plugin.

== Frequently Asked Questions ==

== Screenshots ==


== Changelog ==
= 1.0 =
* First Version, Basic Working copy
