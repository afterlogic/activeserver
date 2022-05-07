<?php
/**********************************************************************************
 *  AURORA settings
 */

	// DAV server settings
	
	// CardDAV
	// Server protocol: http or https
	define('CARDDAV_PROTOCOL', 'http');
	// Server name
	define('CARDDAV_SERVER', 'localhost');
	// Server port
	define('CARDDAV_PORT', 8008);
	
	// CalDAV
	// Server protocol: http or https
	define('CALDAV_PROTOCOL', 'http');
	// Server name
	define('CALDAV_SERVER', 'localhost');
	// Server port
	define('CALDAV_PORT', 8008);

	// IMAP settings
	// Defines the server to which we want to connect
	define('IMAP_SERVER', 'localhost');
	// connecting to default port (143)
	define('IMAP_PORT', 143);
	// best cross-platform compatibility (see http://php.net/imap_open for options)
	define('IMAP_OPTIONS', '/novalidate-cert');
	
	// SMTP settings
	// The server to connect. Default is localhost
	// IMPORTANT: If you want to use SSL with port 25 or port 465 you must preppend "ssl://" before the hostname or IP of your SMTP server
	define('AURORA_SMTP_SERVER', 'localhost');
	// The port to connect. Default is 25
	define('AURORA_SMTP_PORT', 25);
	// Whether or not to use SMTP authentication. Default is FALSE
	define('AURORA_SMTP_AUTH', false);
	// The username to use for SMTP authentication. "imap_username" for using the same username as the imap server
	define('AURORA_SMTP_USER_NAME', 'imap_username');
	//The password to use for SMTP authentication. "imap_password" for using the same password as the imap server
	define('AURORA_SMTP_USER_PASSWORD', 'imap_password');
	// Require verification of SSL certificate used. Default is FALSE
	define('AURORA_SMTP_VERIFY_PEER', false);
	// Require verification of peer name. Default is FALSE
	define('AURORA_SMTP_VERIFY_PEER_NAME', false);
	// IMPORTANT: To use SSL you must use PHP 5.1 or later, install openssl libs and use ssl:// within the host variable
	// IMPORTANT: To use SSL with PHP 5.6 you should set verify_peer, verify_peer_name and allow_self_signed
	// Allow self-signed certificates. Requires verify_peer. Default is FALSE
	define('AURORA_SMTP_ALLOW_SELF_SIGNED', false);

	
/**********************************************************************************/


set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . '/vendor/awl/inc');