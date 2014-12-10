<?php

class Config
{
    private static $config;

    public static function init($dev)
    {
        self::$config = require ROOT_PATH.'/framework/config/default.php';
        $config2=require ROOT_PATH.'/application/config/dev/'.$dev.'.php';
        array_merge(self::$config, $config2);
        print_r(self::$config);
    }
    public static function getConfig()
    {

    }
}