<?php

namespace Besmer;

class Logger {
    
    private static $loggers = array();
    
    private $fd = null;
    
    public static function getInstance($filename)
    {
        if(isset(self::$loggers[$filename]))
        {
            return self::$loggers[$filename];
        }
        
        return self::$loggers[$filename] = new Logger($filename);
    }
    
    
    private function __construct($filename)
    {
        $this->fd = fopen($filename, "a");
    }
    
    public function log($line)
    {
        fwrite($this->fd, $line . "\n");
    }
    
    public function __destruct()
    {
        fclose($this->fd);
    }
}
