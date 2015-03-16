<?php
/*
Plugin Name: WooCommerce User Shortcode
Description: Displays formatted copy of Woo Commerce Shipping and/or Billing information in a shortcode.
Author: Richard Miles
Version: 1.0
Author URI: http://richymiles.wordpress.com
*/


// [shipping_info id="default get current user id"]
function shipping_info_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'id' => get_current_user_id(),
    ), $atts );

    $first_name = get_usermeta($a['id'],'shipping_first_name') ;
	$last_name = get_usermeta($a['id'],'shipping_last_name');
	$company = get_usermeta($a['id'],'shipping_company');
	$shipping_address_1 = get_usermeta($a['id'],'shipping_address_1');
	$shipping_address_2 = get_usermeta($a['id'],'shipping_address_2');
	$suburb = get_usermeta($a['id'],'shipping_city');	
	$state = get_usermeta($a['id'],'shipping_state');
	$shipping_postcode = get_usermeta($a['id'],'shipping_postcode');
	ob_start();
	?>
	<header class="title">
		<h3>Shipping Address</h3>
	</header>
	<i>
		<?php echo $first_name ? "$first_name " : ''; ?>
		<?php echo $last_name ? "$last_name " : ''; ?><br>
		<?php echo $company ?: ''; ?><br>
		<?php echo $shipping_address_1 ?: ''; ?><br>
		<?php echo $shipping_address_2 ?: ''; ?><br>
		<?php echo $suburb ?: ''; ?><br>
		<?php echo $state ?: ''; ?><br>
		<?php echo $shipping_postcode ?: ''; ?><br>
	</i>
	<?php
	$ret = ob_get_contents();
	ob_end_clean();
    return $ret;
}
add_shortcode( 'shipping_info', 'shipping_info_shortcode' );

// [billing_info id="default get current user id"]
function billing_info_shortcode( $atts ) {
    $a = shortcode_atts( array(
        'id' => get_current_user_id(),
    ), $atts );

    $first_name = get_usermeta($a['id'],'billing_first_name') ;
	$last_name = get_usermeta($a['id'],'billing_last_name');
	$company = get_usermeta($a['id'],'billing_company');
	$billing_address_1 = get_usermeta($a['id'],'billing_address_1');
	$billing_address_2 = get_usermeta($a['id'],'billing_address_2');
	$suburb = get_usermeta($a['id'],'billing_city');	
	$state = get_usermeta($a['id'],'billing_state');
	$billing_postcode = get_usermeta($a['id'],'billing_postcode');
	ob_start();
	?>
	<header class="title">
		<h3>Billing Address</h3>
	</header>
	<i>
		<?php echo $first_name ? "$first_name " : ''; ?>
		<?php echo $last_name ? "$last_name " : ''; ?><br>
		<?php echo $company ?: ''; ?><br>
		<?php echo $billing_address_1 ?: ''; ?><br>
		<?php echo $billing_address_2 ?: ''; ?><br>
		<?php echo $suburb ?: ''; ?><br>
		<?php echo $state ?: ''; ?><br>
		<?php echo $billing_postcode ?: ''; ?><br>
	</i>
	<?php
	$ret = ob_get_contents();
	ob_end_clean();
    return $ret;
}
add_shortcode( 'billing_info', 'billing_info_shortcode' );