<?php
/**
 * project global constants
 *
 * @var 'location of site' TASK_DOMAIN constant with site location
 * @var 'location of path' TASK_PATH constant with path location
 * @var string $protocol
 * @var string $directory
 */

$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$directory = preg_replace('/\/[a-z0-9-_\.]+\.php$/i', '/', $_SERVER['REQUEST_URI']);
define('TASK_DOMAIN', $protocol . $_SERVER['SERVER_NAME'] . $directory);
define('TASK_PATH', __DIR__ . '/');