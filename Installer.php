<?php

namespace modules\payment_cryptocurrency;

use ErrorException;
use core\classes\Config;
use core\classes\Database;
use core\classes\Language;
use core\classes\Model;
use core\classes\Menu;

class Installer {
	protected $config;
	protected $database;

	public function __construct(Config $config, Database $database) {
		$this->config = $config;
		$this->database = $database;
	}

	public function install() {
	}

	public function uninstall() {
	}

	public function enable() {
		$config = $this->config->getSiteConfig();
		$config['sites'][$this->config->getSiteDomain()]['checkout']['payment_methods']['cryptocurrency'] = [
			'name' => 'Cryptocurrency',
			'public' => '\modules\payment_cryptocurrency\controllers\PaymentCryptocurrency',
			'administrator' => '\modules\payment_cryptocurrency\controllers\administrator\PaymentCryptocurrency',
		];
		$this->config->setSiteConfig($config);
	}

	public function disable() {
		$config = $this->config->getSiteConfig();
		unset($config['sites'][$this->config->getSiteDomain()]['checkout']['payment_methods']['cryptocurrency']);
		$this->config->setSiteConfig($config);
	}
}
