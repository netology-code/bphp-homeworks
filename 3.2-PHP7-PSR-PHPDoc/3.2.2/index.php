<?php
/**
 * frontfile of menu
 *
 * @var array $menu
 * @var array $post
 */

require_once 'const.php';
require_once 'loadJSON.php';
require_once 'renderView.php';
$menu = loadJSON('menu');
renderView('default', 'main', ['menu' => $menu]);