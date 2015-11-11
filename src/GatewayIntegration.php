<?php

class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_GatewayIntegration {
	public function __construct() {
		$this->id = 'frieslandbank-ideal-zakelijk-plus';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvanced_Gateway';
	}
}
