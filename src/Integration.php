<?php

class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'frieslandbank-ideal-zakelijk-plus';
		$this->name       = 'Friesland Bank - iDEAL Zakelijk Plus';
		$this->provider   = 'frieslandbank';
		$this->deprecated = true;
	}
}
