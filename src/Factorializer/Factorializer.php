<?php


namespace Factorializer;


use InvalidArgumentException;

class Factorializer
{
    const MSG_NB_NEGATIF = 'Vous devez fournir un nombre positif';

    /**
     * Retourne la factorielle de l'entier fourni
     * Si cet entier est représenté par la lettre n, factorielle de n est le produit de tous les entiers positifs
     * inférieurs ou égaux à n et supérieur à 0.
     * Factorielle est représenté par le caractère '!'
     * Ainsi : 5! = 5 * 4 * 3 * 2 * 1 = 120
     * Et 0! = 1
     * @param int $n
     * @return int
     * @throws InvalidArgumentException si n < 0
     */
    public function factorialize(int $n): int
    {
        return $n;
    }
}