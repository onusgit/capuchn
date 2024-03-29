<?php
/* SVN FILE: $Id: database.php.default 4409 2007-02-02 13:20:59Z phpnut $ */
/**
 * This is core configuration file.
 *
 * Use it to configure core behaviour ofCake.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2007, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2007, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.app.config
 * @since			CakePHP(tm) v 0.2.9
 * @version			$Revision: 4409 $
 * @modifiedby		$LastChangedBy: phpnut $
 * @lastmodified	$Date: 2007-02-02 07:20:59 -0600 (Fri, 02 Feb 2007) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * In this file you set up your database connection details.
 *
 * @package		cake
 * @subpackage	cake.config
 */
/**
 * Database configuration class.
 * You can specify multiple configurations for production, development and testing.
 *
 * driver =>
 * mysql, postgres, sqlite, adodb, pear-drivername
 *
 * connect =>
 * MySQL set the connect to either mysql_pconnect of mysql_connect
 * PostgreSQL set the connect to either pg_pconnect of pg_connect
 * SQLite set the connect to sqlite_popen  sqlite_open
 * ADOdb set the connect to one of these
 *	(http://phplens.com/adodb/supported.databases.html) and
 *	append it '|p' for persistent connection. (mssql|p for example, or just mssql for not persistent)
 *
 * host =>
 * the host you connect to the database
 * MySQL 'localhost' to add a port number use 'localhost:port#'
 * PostgreSQL 'localhost' to add a port number use 'localhost port=5432'
 *
 */
class DATABASE_CONFIG
{
	var $default = array('driver' => 'mysql',
								'connect' => 'mysql_connect',
								'host' => 'localhost',
								'login' => 'stillboy_sv',
								'password' => 's1nv3rt',
								'database' => 'stillboy_sinvertical',
								'prefix' => '');

	var $test = array('driver' => 'mysql',
							'connect' => 'mysql_connect',
							'host' => 'localhost',
							'login' => 'user',
							'password' => 'password',
							'database' => 'project_name-test',
							'prefix' => '');
}
?>