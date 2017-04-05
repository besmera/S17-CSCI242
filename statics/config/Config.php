<?php


class Config {
    private static $config = array();
    
    public static function getKey($key)
    {
        if(isset(self::$config[$key]))
        {
            return self::$config[$key];
        }
        else
        {
            return null;
        }
    }
    
    public static function setKey($key, $value)
    {
        return self::$config[$key] = $value;
    }
    
}
