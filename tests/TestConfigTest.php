<?php

/**
 * Title: Rabobank - iDEAL Professional - Config test test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_TestConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_TestConfig();

		$this->assertEquals( 'https://testidealkassa.frieslandbank.nl/ideal/iDEAL', $config->get_payment_server_url() );
	}
}
