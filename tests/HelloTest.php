<?php

require dirname(__DIR__).'/src/Hello.php';

class HelloTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test Hello class construct function
     */
    public function testSetOwnerWithConstructor()
    {
        $helloObj = new Hello('phper');
        /**
         * assertAttributeEquals function
         * @param first  expect value
         * @param second attribute name
         * @param third  checked object
         */
        $this->assertAttributeEquals('phper', 'owner', $helloObj);
    }

    public function testSayHelloToOwner()
    {
        $helloObj = new Hello('chenyuanqi');
        /**
         * assertEquals function
         * @param first  assert value what expect
         * @param second checked value
         */
        $this->assertEquals('Hello, phper', $helloObj->sayHello());
    }
}