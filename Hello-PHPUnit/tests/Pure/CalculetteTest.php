<?php

namespace Romain\HelloPhpUnitTest\Pure;

use PHPUnit\Framework\TestCase;
use Romain\HelloPhpUnit\Pure\Calculette;

class CalculetteTest extends TestCase
{
    protected Calculette $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculette();
    }

    public function testSum()
    {
        $this->assertEquals(3, $this->calc->sum(1, 2));
        $this->assertEquals(9, $this->calc->sum(3, 6));
    }
}
