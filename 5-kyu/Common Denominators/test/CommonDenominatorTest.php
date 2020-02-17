<?php

use PHPUnit\Framework\TestCase;

class CommonDenominatorTest extends TestCase
{
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics()
    {
        $lst = [[1, 2], [1, 3], [1, 4]];
        $this->revTest(convertFrac($lst), "(6,12)(4,12)(3,12)");
        $lst = [[69, 130], [87, 1310], [3, 4]];
        $this->revTest(convertFrac($lst), "(18078,34060)(2262,34060)(25545,34060)");
        $lst = [];
        $this->revTest(convertFrac($lst), "");
        $lst = [[77, 130], [84, 131], [3, 4]];
        $this->revTest(convertFrac($lst), "(20174,34060)(21840,34060)(25545,34060)");
    }
}
