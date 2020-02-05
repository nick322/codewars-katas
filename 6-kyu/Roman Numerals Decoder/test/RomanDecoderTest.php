<?php

use PHPUnit\Framework\TestCase;

class RomanDecoderTest extends TestCase
{
    // test function names should start with "test"
    public function testRomanDecoderBasics()
    {
        $this->assertEquals(1000, romanDecoder("M"));
        $this->assertEquals(50, romanDecoder("L"));
        $this->assertEquals(4, romanDecoder("IV"));
        $this->assertEquals(95, romanDecoder("XCV"));
    }

    public function testRomanDecoderComplex()
    {
        $this->assertEquals(2017, romanDecoder("MMXVII"));
        $this->assertEquals(1337, romanDecoder("MCCCXXXVII"));
    }
}
