<?php


class Logger {

    private $fh = null;
    
    public function __construct($filename) {
        echo "Constructor called.";
        $this->fh = fopen($filename, "a");
    }

    public function error($errorMessage)
    {
        echo "Error called.";
        fwrite($this->fh, $errorMessage . "\n");
    }
    
    public function __destruct() {
        echo "Destruct called.";
        fclose($this->fh);
    }
    
}
