<?php

namespace Romain\HelloPhpUnitTest\Erreurs;

use PHPUnit\Framework\TestCase;
use Romain\HelloPhpUnit\Erreurs\Exercices;

class ExercicesTest extends TestCase
{
    public function testRacineCarreWithPositive()
    {
        $ex = new Exercices();
        $this->assertEquals(2, $ex->racineCarree(4));
    }
}