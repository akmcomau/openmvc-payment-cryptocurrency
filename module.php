<?php
$_MODULE = [
	'name' => 'Payment - Cryptocurrency',
	'description' => 'Support for cryptocurrency within the checkout',
	'namespace' => '\\modules\\payment_cryptocurrency',
	'config_controller' => 'administrator\\PaymentCryptocurrency',
	'controllers' => [
		'administrator\\PaymentCryptocurrency',
		'PaymentCryptocurrency'
	],
	'default_config' => [
		'currency' => 'AUD',
		'bitcoin' => NULL,
		'bitcoin_cash' => NULL,
		'ethereum' => NULL,
		'ethereum_classic' => NULL,
		'litecoin' => NULL,
	]
];
