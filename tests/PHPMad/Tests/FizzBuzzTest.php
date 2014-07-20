<?php

namespace PHPMad\Tests;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    private $result;

    function setUp() {
        $fizzBuzz = new \PHPMad\FizzBuzz();

        $this->result = $fizzBuzz->generate();
    }

    function testCount() {
        $this->assertCount(100, $this->result);
    }

    function testAllRegular() {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 != 0 && $i % 5 != 0) {
                $this->assertEquals($i, $this->result[$i]);
            }
        }
    }

    function testAllFizz() {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 15 != 0) {
                $this->assertEquals('Fizz', $this->result[$i]);
            }
        }
    }

    function testAllBuzz() {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 5 == 0 && $i % 15 != 0) {
                $this->assertEquals('Buzz', $this->result[$i]);
            }
        }
    }

    function testAllFizzBuzz() {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 15 == 0) {
                $this->assertEquals('FizzBuzz', $this->result[$i]);
            }
        }
    }
}
