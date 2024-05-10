<?php 
use PHPUnit\Framework\TestCase;


class PdoConnectTest extends TestCase {

    public function testGetInstance()
    {
        include 'classes/PdoConnect.php';
        $pdoConnect = PdoConnect::getInstance();
        $this->assertInstanceOf(PdoConnect::class, $pdoConnect);
    }
    
}