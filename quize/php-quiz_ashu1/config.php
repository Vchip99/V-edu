<?php
/**
@author Sanjeev
@copyright http:www.phptpoint.com
 */

require_once 'messages.php';

//site specific configuration declartion
//define( 'BASE_PATH', 'http://localhost/php-quiz/');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', 'vchip');
define( 'DB_NAME', 'user');

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
