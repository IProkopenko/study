<?php
use PHPUnit\Framework\TestCase;

class SomeClass
{
public function __construct($test)
{

}

    public function doSomething()
    {
        // Do something.
    }
    public function runPayment(){}
}

class StubTest extends TestCase
{
    public function testStub()
    {

        $mock = $this->createMock(SomeClass::class);

        $mock->method('runPayment')
            ->willReturn(true);


        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals(true, $mock->runPayment());


    }
}


