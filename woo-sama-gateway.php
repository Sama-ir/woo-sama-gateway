<?php

if (!defined("ABSPATH")) {
    exit();
}
/**
 * Plugin Name: درگاه پرداخت تضمین شده سما
 * Author: علی فروزنده
 * Description: این افزونه درگاه پرداخت تضمین شده سما را به ووکامرس اضافه می کند.
 * Version: 1.0.0
 * Author URI: https://www.ponisha.ir/profile/forouzandea
 * Author Email: forouzandea@gmail.com
 * Requires at least: 6.0.0
 * Requires PHP: 7.4
 * WC requires at least: 7.3
 * WC tested up to: 7.3
 */

define("WOO_GSAMA_GATEWAY_DIR", trailingslashit(plugin_dir_path(__FILE__)));

require_once WOO_GSAMA_GATEWAY_DIR . "action.php";

// add_action("woocommerce_checkout_before_order_review", function () {
// $sama = new WC_GSama();
// $message = $sama->before_payment_description;
// wc_add_notice($message, "success");
// });
