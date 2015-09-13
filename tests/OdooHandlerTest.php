<?php


class OdooHandlerTest extends PHPUnit_Framework_TestCase
{
    public function testAuthen()
    {
        $url = "http://192.168.1.33:8069";
        $db = "test3";
        $username = "admin";
        $password = "admin";


        $handler = new OdooHandler($url, $db, $username, $password);
        $uid = $handler->getUid();
        $this->assertTrue($uid > 0);

    }
}