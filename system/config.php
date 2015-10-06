<?php
/**
	AbanteCart, Ideal OpenSource Ecommerce Solution
	http://www.AbanteCart.com
	Copyright © 2011-'.date('Y').' Belavier Commerce LLC

	Released under the Open Software License (OSL 3.0)
*/
// Admin Section Configuration. You can change this value to any name. Will use ?s=name to access the admin
define('ADMIN_PATH', 'kitschykulture');

// Database Configuration
define('DB_DRIVER', 'amysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'abante');
define('DB_PASSWORD', 'rVENvnr5anzGNVQf');
define('DB_DATABASE', 'abante');
define('DB_PREFIX', 'abc_');
// Unique AbanteCart store ID
define('UNIQUE_ID', '0579f18a9cb7132fab3c2e105f593328');
// Salt key for oneway encryption of passwords. NOTE: Change of SALT key will cause a loss of all existing users' and customers' passwords!
define('SALT', '6gaD');
// Encryption key for protecting sensitive information. NOTE: Change of this key will cause a loss of all existing encrypted information!
define('ENCRYPTION_KEY', '21CraF');
