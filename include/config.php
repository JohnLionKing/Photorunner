<?php
ob_start();
session_start();

define( 'DB_HOST', 'localhost');
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', '');
define( 'DB_NAME', 'photorunner');


if (!defined("PAGILIMIT")) define("PAGILIMIT", 20);

if (!defined("APP_NAME")) define("APP_NAME", "Photo Runner");
if (!defined("ADMIN_EMAIL")) define("ADMIN_EMAIL", "info@photorunner.no");

if (!defined("APP_FOLDER")) define("APP_FOLDER", "");
if (!defined("APP_ROOT")) define("APP_ROOT", $_SERVER["DOCUMENT_ROOT"]."/".APP_FOLDER);
if (!defined("APP_URL")) define("APP_URL", "http://".$_SERVER["HTTP_HOST"]."/".APP_FOLDER."photorunner/");
if (!defined("APP_FULL_URL")) define("APP_FULL_URL", "http://".$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']);

// function __autoload($class)
// {
// 	$parts = end(explode('_', $class));
// 	require_once APP_ROOT.'include/' . $parts . '.php';
// }
include('include/Messages.php');
include('include/DBclass.php');
include('include/Common.php');
$msgs  = new Cl_Messages();
$common  = new Cl_Common();
?>
