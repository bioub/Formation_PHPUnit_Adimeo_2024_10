<?php

namespace Romain\HelloPhpUnit\Erreurs;

class Exercices
{
    public function racineCarree(float $nombre): float {
        if ($nombre < 0) {
            throw new Exception("La racine carrée d'un nombre négatif n'est pas définie.");
        }
        return sqrt($nombre);
    }

    public function diviser(float $dividende, float $diviseur): float {
        if ($diviseur === 0) {
            throw new Exception("Division par zéro impossible.");
        }
        return $dividende / $diviseur;
    }
}