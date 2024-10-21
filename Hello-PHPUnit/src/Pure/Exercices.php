<?php

namespace Romain\HelloPhpUnit\Pure;

class Exercices
{
    public function hello(string $name): string
    {
        return "Hello $name";
    }

    public function estPair(int $nombre): bool {
        return $nombre % 2 === 0;
    }

    public function concatener(string $chaine1, string $chaine2): string {
        return $chaine1 . $chaine2;
    }

    public function extraireElementsPairs(array $tableau): array {
        $elementsPairs = [];

        foreach ($tableau as $element) {
            if ($element % 2 === 0) {
                $elementsPairs[] = $element;
            }
        }

        return $elementsPairs;
    }


}