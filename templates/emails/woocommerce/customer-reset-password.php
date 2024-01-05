<?php
/**
 * Customer Reset Password email
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$email_heading = get_option( 'ec_woocommerce_customer_reset_password_heading' );
?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php echo get_option( 'ec_woocommerce_customer_reset_password_main_text' ); ?>

<?php
/**
 * Show user-defined additonal content - this is set in each email's settings.
 */
if ( isset( $additional_content ) && $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}
?>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
