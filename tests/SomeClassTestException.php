<?php
use PHPUnit\Framework\TestCase;

class SomeClass
{

    public function doSomething()
    {
    //blabla
    }
}

class StubTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(SomeClass::class);

        // Configure the stub.
        $stub->method('doSomething')
            ->will($this->throwException(new LengthException));

        // $stub->doSomething() throws Exception
        $this->expectException(InvalidArgumentException::class);

         new Exception()
        $stub->doSomething();
        $this->assertInstanceOf('some Object here', '$bla->createSomeObject()');

    }
}


