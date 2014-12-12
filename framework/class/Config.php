<?php

class Config
{
    private static $config;
     public static function init($dir = null)
    {
        $pathDefault = $_SERVER['DOCUMENT_ROOT'] . '/framework/config/';
        $confDefault = Config::assembleConfig($pathDefault);
        self::$config = $confDefault;

        if (isset($dir)) {
            $pathConfig = $_SERVER['DOCUMENT_ROOT'] . '/application/config/' . $dir . '/';
            $confUser = Config::assembleConfig($pathConfig);
            self::$config = array_replace_recursive($confDefault, $confUser);
        }
        if (isset(self::$config['registry'])){
            foreach (self::$config['registry'] as $key=>$v){
                Registry::set($key, $v);
            }
        }
    }

    public function assembleConfig($path)
    {
        $filesList = glob($path . '*.php');
        $config = array();
        foreach ($filesList as $file) {
            $confTemp = require_once $file;
            $config = array_merge($config, $confTemp);
        }
        return $config;
    }


    public static function getConfig($key = false, $subKey=false)
    {
        if (isset(self::$config[$key][$subKey]))
            return self::$config[$key][$subKey];
        elseif ($subKey == false && isset(self::$config[$key]))
            return self::$config[$key];
        elseif ($key == false)
            return self::$config;
        else return fase;

    }
}
