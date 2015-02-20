<?php

/**
 * 
 */
class FooTest extends \PHPUnit_Framework_TestCase
{
    
    protected $foo; 

    public function setUp()
    {
        $this->foo = new Foo;
    }

    public function testObjectMethods()
    {
        $this->assertTrue(method_exists($this->foo, 'bar'));
        $this->assertTrue($this->foo->bar());
       
    }
}