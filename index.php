<?php

class Single {
	
    private static $_instance = null;
    
    static public function getInstance() {
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
	private function __construct() {}
    protected function __clone() {}
}