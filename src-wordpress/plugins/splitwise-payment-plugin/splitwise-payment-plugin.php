<?php
 /**
 * Plugin Name:       Splitwise Payment Plugin
 * Plugin URI:        https://www.makingweb.site
 * Description:       Handle the payment with Splitwise.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rafael Jacome
 * Author URI:        https://www.makingweb.site
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       splitwise-payment-plugin
 * Domain Path:       /languages
 */


 if( !in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))){
    return;
 } 

 add_action( 'plugins_loaded', 'splitwise_payment_init', 11 );

 function splitwise_payment_init() {
     if( class_exists('WC_Payment_Gateway') ){
         class WC_Splitwise_payment_Gateway extends WC_Payment_Gateway {
            public function __construct() {
                $this->id = "splitwise_payment";
                $this->icon = apply_filters(
                    'woocommerce_splitwise_icon', plugins_url('./assets/icon.svg', __FILE__)
                );
                $this->title = $this->get_option('title');
                $this->description = $this->get_option('description');
                $this->has_fields = false;
                $this->method_title = __( 'Splitwise Paymen', 'splitwise-payment-plugin');
                $this->method_description = __('Handle payment with splitwise', 'splitwise-payment-plugin');
                $this->init_form_fields();
                $this->init_settings();

                add_action( 'woocommerce_update_options_payment_gateways_'. $this->id, array( $this, 'process_admin_options'));
                add_action( 'woocommerce_thank_you_' . $this->id, array( $this, 'thank_you_page'));
            }


            public function init_form_fields() {
                $this->form_fields = apply_filters(
                    'splitwise_payment_fields', array(
                        'enable' => array(
                            'title' => __('Enable/Disable',
                            'splitwise-payment-plugin'),
                            'type' => 'checkbox',
                            'label' => __('Enable or Disable Splitwise Payments Gateway', 'splitwise-payment-plugin')
                        ),

                        'title' => array(
                            'title' => __('Splitwise Payments Gateway Title',
                            'splitwise-payment-plugin'),
                            'type' => 'text',
                            'description' => __('Add a new title for the Splitwise Payments Gateway',  'splitwise-payment-plugin'),
                            'default' => __('Splitwise Payments Gateway', 'splitwise-payment-plugin'),
                            'desc_tip' => true
                        ),

                        'description' => array(
                            'title' => __('Splitwise Payments Gateway Description',
                            'splitwise-payment-plugin'),
                            'type' => 'textarea',
                            'description' => __('Make your payment with Splitwise',  'splitwise-payment-plugin'),
                            'default' => __('Make your payment with Splitwise Payment Gateway', 'splitwise-payment-plugin'),
                            'desc_tip' => true
                        )
                    )
                );
            }

            public function process_payments ( $order_id ) {
                $order = wc_get_order( $order_id );

                $order->update_status('on-hold', __('Awaitin Splitwise Payment', 'splitwise-payment-plugin'));

                $order->reduce_order_stock();

                WC()->cart->empty_cart();

                return array(
                    'result' => 'success',
                    'redirect' => $this->get_return_url( $order)
                );
            }

            public function thank_you_page() {
                if( $this->instructions ) {
                    echo wpautop( $this->instructions );
                }
            }
        }
    }
 }

 add_filter('woocommerce_payment_gateways', 'add_to_woo_splitwise_payment_gateway');

 function add_to_woo_splitwise_payment_gateway( $gateways ) {
    $gateways[] = 'WC_Splitwise_payment_Gateway';
    return $gateways;
}