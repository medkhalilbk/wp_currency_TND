add_filter('woocommerce_currency_symbol', 'wc_change_uae_currency_symbol', 10, 2);

function wc_change_uae_currency_symbol($currency_symbol, $currency)
{
switch ($currency) {
case 'TND':
$currency_symbol = 'TND';
break;
}

return $currency_symbol;
}