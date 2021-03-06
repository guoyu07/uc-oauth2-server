<?php

/**
 * oauth2系统根目录
 */
define('UC_OAUTHDIR', __DIR__ . DIRECTORY_SEPARATOR);

/**
 * 兼容uc_server所在目录 oauth2在uc_server的plugin下
 */
!defined('UC_ROOT') && define('UC_ROOT', dirname(dirname(UC_OAUTHDIR)) . DIRECTORY_SEPARATOR);

!defined('UC_DATADIR') && define('UC_DATADIR', UC_ROOT . 'data' . DIRECTORY_SEPARATOR);
/**
 * oauth2所在目录的绝对url
 */
define('STATIC_URL', ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/')));

require_once UC_ROOT . 'release/release.php';
require_once UC_DATADIR . 'config.inc.php';

ini_set('display_errors', UC_DEBUG ? true : false);
error_reporting(UC_DEBUG ? E_ALL: 0);

require_once(__DIR__ . '/vendor/bshaffer/oauth2-server/src/OAuth2/Autoloader.php');
require_once(__DIR__ . '/vendor/UCServer/Autoloader.php');

\OAuth2\Autoloader::register();
\TimeCheer\UCServer\Autoloader::register();