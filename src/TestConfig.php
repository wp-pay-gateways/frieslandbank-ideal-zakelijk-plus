<?php

/**
 * Title: Friesland Bank - iDEAL Zakelijk Plus config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_TestConfig extends Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlus_Config {
	public function get_payment_server_url() {
		return 'https://testidealkassa.frieslandbank.nl/ideal/iDEAL';
	}
}
