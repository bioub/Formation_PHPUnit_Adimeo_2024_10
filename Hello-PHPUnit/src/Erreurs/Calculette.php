<?php

namespace Romain\HelloPhpUnit\Erreurs;

class Calculette
{
    public function sumWithMax(int $a, int $b, int $max)
    {
        $result = $a + $b;

        if ($result > $max) {
            throw new \Exception('max limit exceeded');
        }

        return $result;
    }
}