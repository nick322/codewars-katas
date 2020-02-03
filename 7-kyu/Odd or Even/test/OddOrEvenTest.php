<?php

use PHPUnit\Framework\TestCase;

class OddOrEvenTest extends TestCase
{
    public function testOddOrEvenTestDescriptionExamples()
    {
        $this->assertEquals('even', odd_or_even([0]));
        $this->assertEquals('odd', odd_or_even([2, 5, 34, 6]));
        $this->assertEquals('even', odd_or_even([0, -1, -5]));
    }
}
