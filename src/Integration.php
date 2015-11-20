<?php

/**
 * Title: Friesland Bank - iDEAL Zakelijk Plus integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'frieslandbank-ideal-zakelijk-plus';
		$this->name       = 'Friesland Bank - iDEAL Zakelijk Plus';
		$this->provider   = 'frieslandbank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_ConfigFactory';
	}
}
