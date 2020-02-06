<?php

use PHPUnit\Framework\TestCase;

class PopulationGrowthCasesTest extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $this->revTest(nbYear(1500, 5, 100, 5000), 15);
        $this->revTest(nbYear(1500000, 2.5, 10000, 2000000), 10);
    }
}