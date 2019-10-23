<?php
/**********************************************************************************
 *  AURORA settings
 */

	// DAV server settings
	
	// Server protocol: http or https
	define('CARDDAV_PROTOCOL', 'http');	
	// Server name
	define('CARDDAV_SERVER', 'localhost');
	// Server port
	define('CARDDAV_PORT', 8008);
	
	// Server protocol: http or https
	define('CALDAV_PROTOCOL', 'http');	
	// Server name
	define('CALDAV_SERVER', 'localhost');
	// Server port
	define('CALDAV_PORT', 8008);

	// IMAP settings
	
	// Defines the server to which we want to connect
	define('IMAP_SERVER', 'afterlogic.com');
	// connecting to default port (143)
	define('IMAP_PORT', 143);	
	
	// SMTP settings
	// Defines the server to which we want to connect (ssl://host)
	define('AURORA_SMTP_SERVER', 'ssl://mail.afterlogic.com');
	// connecting to default port (25)
	define('AURORA_SMTP_PORT', 465);
/**********************************************************************************/


set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . '/vendor/awl/inc');
