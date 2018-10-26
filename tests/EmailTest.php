<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use foo\Email;

class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }


    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);


        Email::fromString('invalid');
    }


    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}




//run tests with bootstrap ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest
//./vendor/bin/phpunit