<?php

use PHPUnit\Framework\TestCase;

class ARuleOfDivisibilityBy13Test extends TestCase
{
    public function testARuleOfDivisibilityBy13() 
    {
        $this->assertEquals(79, aRuleOfDivisibilityBy13(8529));
        $this->assertEquals(31, aRuleOfDivisibilityBy13(85299258));
    }
}