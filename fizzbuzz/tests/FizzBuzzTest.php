<?php

namespace DundeePHP\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @var  FizzBuzz */
    private $testSubject;

    public function setUp()
    {
        parent::setUp();

        $this->testSubject = new FizzBuzz();
    }

    public function testToArray()
    {
        $this->assertEquals(["1", "2", "Fizz"], $this->testSubject->toArray(3));
    }
}