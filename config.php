<?php // SITE CONSTANTS
/* -----------------------------------------------
					PATHS
-------------------------------------------------*/

define("URL_ROOT", 'http://techtalksfsu.edu/'); // LOCALHOST
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/"); //(goes in includes & requires)

define('CSS_PATH', 'css/');
define('JS_PATH', 'js/');
// define ('IMG_PATH');

/* -----------------------------------------------
                  Database
-------------------------------------------------*/
// Local
if ('localhost' == $_SERVER['HTTP_HOST']) {
	define('DB_HOST', '127.0.0.1');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', '');

// Production
} else {
	define('DB_HOST', 'localhost');
	define('DB_USER', '');
	define('DB_PASS', '');
	define('DB_NAME', '');
}