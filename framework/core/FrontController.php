<?php

include_once ROOT_PATH . '/framework/class/Config.php';
Config::init('dev');
include_once ROOT_PATH . '/framework/core/Model.php';
include_once ROOT_PATH . '/framework/core/View.php';
include_once ROOT_PATH . '/framework/core/Controller.php';
include_once ROOT_PATH . '/framework/core/Dispatcher.php';
//Dispatcher::start();
v(Config::getConfig('db'));