<?php

/**
 * Title: Rabobank - iDEAL Professional - Config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_ConfigTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$config = new Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_Config();

		$this->assertEquals( 'https://idealkassa.frieslandbank.nl/ideal/iDEAL', $config->get_payment_server_url() );
	}

	public function test_certificates() {
		$config = new Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_Config();

		$certificates = $config->get_certificates();

		foreach ( $certificates as $certificate ) {
			$this->assertFileExists( $certificate );
		}
	}
}
