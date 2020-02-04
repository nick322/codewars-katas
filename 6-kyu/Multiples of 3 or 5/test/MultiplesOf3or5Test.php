<?php

use PHPUnit\Framework\TestCase;

class MultiplesOf3or5Test extends TestCase
{
    public function testMultiplesOf3or5Test()
    {
        $this->assertEquals(23, multiplesOf3or5(10));
    }
}
