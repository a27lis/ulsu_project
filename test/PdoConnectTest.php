<?php 
use PHPUnit\Framework\TestCase;

class PdoConnectTest extends TestCase {

    public function testPdoConnect {
        spl_autoload_register(function ($class) {
            include 'classes/' . $class . '.php';
        });
        
        $PDO = PdoConnect::getInstance();
    }
}