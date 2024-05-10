<?php 
use PHPUnit\Framework\TestCase;

class PdoConnectTest extends TestCase {

    public function testGetInstance()
    {
        spl_autoload_register(function ($class) {
            include 'classes/' . $class . '.php';
        });
        $pdoConnect = PdoConnect::getInstance();
        $this->assertInstanceOf(PdoConnect::class, $pdoConnect);
    }
    
}