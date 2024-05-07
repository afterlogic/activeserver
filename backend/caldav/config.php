<?php
/***********************************************
* File      :   config.php
* Project   :   Z-Push
* Descr     :   CalDAV backend configuration file
*
* Created   :   27.11.2012
*
* Copyright 2012 - 2014 Jean-Louis Dupond
*
* Jean-Louis Dupond released this code as AGPLv3 here: https://github.com/dupondje/PHP-Push-2/issues/93
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License, version 3,
* as published by the Free Software Foundation.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* Consult LICENSE file for details
************************************************/

// ************************
//  BackendCalDAV settings
// ************************


// Afterlogic customization: defined in aurora.config.php
// Server protocol: http or https
// define('CALDAV_PROTOCOL', 'https');

// Afterlogic customization: defined in aurora.config.php
// Server name
// define('CALDAV_SERVER', 'caldavserver.domain.com');

// Afterlogic customization: defined in aurora.config.php
// Server port
// define('CALDAV_PORT', '443');

// Base URL to principals calendar collection: use '%l' for local part or '%u' for full username
// Afterlogic customization
// define('CALDAV_PATH', '/caldav.php/%u/');
define('CALDAV_PATH', '/calendars/');

// Default CalDAV folder (calendar folder/principal). This will be marked as the default calendar in the mobile
// Afterlogic customization
// define('CALDAV_PERSONAL', 'PRINCIPAL');
define('CALDAV_PERSONAL', 'MyCalendar');

// If the CalDAV server supports the sync-collection operation
// DAViCal, SOGo and SabreDav support it
// SabreDav version must be at least 1.9.0, otherwise set this to false
// Setting this to false will work with most servers, but it will be slower
define('CALDAV_SUPPORTS_SYNC', true); // Afterlogic customization


// Maximum period to sync.
// Some servers don't support more than 10 years so you will need to change this
define('CALDAV_MAX_SYNC_PERIOD', 2147483647);