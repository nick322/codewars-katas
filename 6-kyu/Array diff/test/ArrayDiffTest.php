<?php

use PHPUnit\Framework\TestCase;

class ArrayDiffTest extends TestCase
{
    public function testArrayDiff()
    {
        $this->assertEquals([2], arrayDiff([1, 2], [1]), "a was [1,2], b was [1], expected [2]");
        $this->assertEquals([2, 2], arrayDiff([1, 2, 2], [1]), "a was [1,2,2], b was [1], expected [2,2]");
        $this->assertEquals([1], arrayDiff([1, 2, 2], [2]), "a was [1,2,2], b was [2], expected [1]");
        $this->assertEquals([1, 2, 2], arrayDiff([1, 2, 2], []), "a was [1,2,2], b was [], expected [1,2,2]");
        $this->assertEquals([], arrayDiff([], [1, 2]), "a was [], b was [1,2], expected []");
    }
}
