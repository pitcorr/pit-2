<?php

include_once ROOT_PATH . '/framework/class/Config.php';
include_once ROOT_PATH . '/framework/class/Registry.php';
include_once ROOT_PATH . '/framework/core/Model.php';
include_once ROOT_PATH . '/framework/core/View.php';
include_once ROOT_PATH . '/framework/core/Controller.php';
include_once ROOT_PATH . '/framework/core/Dispatcher.php';
Config::init('dev');
//Dispatcher::start();
ChromePhp::log(Registry::get('title'));