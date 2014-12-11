<?php

class Config
{
    private static $config;

    public static function init($dir)
    {
        $configTemp = require_once ROOT_PATH . '/framework/config/default.php';
        $pathConfig = ROOT_PATH . '/application/config/' . $dir . '/';
        if (is_dir($pathConfig)) {
            $keys = array_keys($configTemp);
            foreach ($keys as $k) {
                if (file_exists($pathConfig . $k . '.php')) {
                    $confDev = require_once $pathConfig . $k . '.php';
                    $configTemp[$k] = array_merge($configTemp[$k], $confDev[$k]);
                }
            }
        }
        self::$config = $configTemp;
    }

    public static function getConfig($key=false)
    {
        if(isset(self::$config[$key])) return self::$config[$key];
        elseif ($key==false) return self::$config;
        else return false;

    }
}
