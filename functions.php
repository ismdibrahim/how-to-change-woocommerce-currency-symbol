<?php

// The currency code for Serbian Dinar

add_filter('woocommerce_currency_symbol', 'custom_woocommerce_currency_symbol', 10, 2);

function custom_woocommerce_currency_symbol($currency_symbol, $currency) {
    switch($currency) {
        case 'RSD': // The currency code for Serbian Dinar
            $currency_symbol = 'RSD';
            break;
    }
    return $currency_symbol;
}

add_filter('woocommerce_currencies', 'add_rsd_currency');

function add_rsd_currency($currencies) {
    $currencies['RSD'] = __('Serbian Dinar (RSD)', 'woocommerce');
    return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_rsd_currency_symbol', 10, 2);

function add_rsd_currency_symbol($currency_symbol, $currency) {
    switch ($currency) {
        case 'RSD':
            $currency_symbol = 'RSD';
            break;
    }
    return $currency_symbol;
}
