<?php 
use PHPUnit\Framework\TestCase;

class PdoConnectTest extends TestCase {

    public function testGetInstance()
    {
        $pdoConnect = PdoConnect::getInstance();
        $this->assertInstanceOf(PdoConnect::class, $pdoConnect);
    }
    
}