<?php

namespace Romain\HelloPhpUnitTest\Erreurs;

use PHPUnit\Framework\TestCase;
use Romain\HelloPhpUnit\Erreurs\Calculette;

class CalculetteTest extends TestCase
{
    public function testSumWithinMax()
    {
        $calc = new Calculette();

        $this->assertEquals(3, $calc->sumWithMax(1, 2, 100));
    }

    public function testSumWithException()
    {
        $this->expectException('Exception');

        $calc = new Calculette();
        $this->assertEquals(3, $calc->sumWithMax(1, 2, 2));
    }
}