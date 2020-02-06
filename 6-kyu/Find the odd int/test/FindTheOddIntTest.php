<?php

use PHPUnit\Framework\TestCase;

class FindTheOddIntTest extends TestCase
{
    public function testFindItReturnsValueAppearingOddNumberOfTimes() 
    {
        $this->assertEquals(5, findTheOddInt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]));
        $this->assertEquals(-1, findTheOddInt([1,1,2,-2,5,2,4,4,-1,-2,5]));
        $this->assertEquals(5, findTheOddInt([20,1,1,2,2,3,3,5,5,4,20,4,5]));
        $this->assertEquals(10, findTheOddInt([10]));
        $this->assertEquals(10, findTheOddInt([1,1,1,1,1,1,10,1,1,1,1]));
    }
}