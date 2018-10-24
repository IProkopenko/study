<?php
use PHPUnit\Framework\TestCase;

class SomeClass
{
    public $test;
public function __construct($test)
{
    $this->test = $test;
}

    public function doSomething()
    {
        // Do something.
    }
}

class StubTest extends TestCase
{
    public function testStub()
    {

        $stub = $this->getMockBuilder(SomeClass::class)
            ->

            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        // Configure the stub.
        $stub->method('doSomething')
            ->willReturn('foo');

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }
}


