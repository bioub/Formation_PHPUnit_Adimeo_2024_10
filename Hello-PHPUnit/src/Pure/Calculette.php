<?php

namespace Romain\HelloPhpUnit\Pure;

class Calculette
{
    // Pure function
    // - prédictive
    // ex: sum(1, 3) === 3
    // contre-ex : rand(0, 100) === ???
    // - ne modifie pas ses params
    // ex : extraireElementsPairs($nbs) === [2, 4] (<- $nbs n'est pas modifié)
    // - n'a pas de side effect
    // ne manipule pas de variable/propriété externe
    // appelle d'autres fonctions si elles sont pures
    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }
}