<?php

use PHPUnit\Framework\TestCase;

class ExesAndOhsTest extends TestCase
{
    public function testSampleTests() {
        $this->assertEquals(true, XO('xo'));
        $this->assertEquals(true, XO('XO'));
        $this->assertEquals(true, XO('xo0'));
        $this->assertEquals(false, XO('xxxoo'));
        $this->assertEquals(true, XO("xxOo"));
      }
}