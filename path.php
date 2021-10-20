<?php
define("ROOT_PATH", realpath(dirname(__FILE__)));
define("BASE_URL", "http://127.0.0.1/wordkwik/");
define ('THEME_DIR',BASE_URL .'/bp-content/themes');
define ('uploads_url',BASE_URL .'/bp-content/uploads/');
define ('ADMIN_URL',BASE_URL .'bp-admin');
define ('BLOGPRESS_JS',BASE_URL .'bp-admin/includes/js/');
define ('BLOGPRESS_CSS',BASE_URL .'bp-admin/includes/css/');
define ('BLOGPRESS_LOGO',BASE_URL .'bp-admin/includes/img/');
define('THEME', 'classic');
define('VERSION', '5.0.0');
define('LANGUAGE', 'hi');
include(ROOT_PATH . "/bp-admin/translation/".LANGUAGE.".php"); 
//SOCIAL LOGIN//
define('CONSUMER_KEY', 'f56lg5ZxXQyAnlkaAVvlG7sKS');
define('CONSUMER_SECRET', 'J06Int1cRnnh9g2eQFt8mdRV2gE85qxOCkFlL5s197YNCUDmZo');
define('OAUTH_CALLBACK', 'http://127.0.0.1/wordkwik/bp-admin/login/process.php');

function get_site_settings() {
$query=mysql_query('SELECT * FROM `wk_settings`');
$results= mysql_fetch_array($query);
$settings=array();
$i=0;

//changing all the keys from `nameopt` column and `valueopt`
// to corresponding `values column

foreach ($results as $key){

$settings[$key['nameopt']]=$key['valueopt'];

$i++;
}

return $settings;
}
/**
 @ Version : 1.0.0
 @ Function: Wordkwik script version Checking and Notification
 @ Contributer : Wordkwik Team
**/
define ('KWIK_VERSION',ADMIN_URL .'/version.php?api=V1');$kwik_latest = file_get_contents(KWIK_VERSION); $kwik_current = VERSION;

/**
 @ Version : 1.0.0
 @ Function:
 @ Contributer : 
**/

$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$bpmenu = basename($_SERVER['PHP_SELF'], ".php"); 

                 
                