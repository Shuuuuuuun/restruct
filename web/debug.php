<?php
/**
 * Created by PhpStorm.
 * User: kimura
 * Date: 14/07/07
 * Time: 18:49
 */

require '../bootstrap.php';

$request = new Request();

var_dump($request->getRequestUri());
var_dump($request->getBaseUrl());
var_dump($request->getPathInfo());