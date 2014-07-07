<?php
/**
 * Created by PhpStorm.
 * User: kimura
 * Date: 14/07/07
 * Time: 18:03
 */

require 'core/Classloader.php';

$loader = new ClassLoader();
$loader->registerDir(dirname(__FILE__).'/core');
$loader->registerDir(dirname(__FILE__).'/models');
$loader->register();