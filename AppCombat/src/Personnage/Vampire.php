<?php declare(strict_types=1);

namespace App\Personnage;

class Vampire extends Personnage implements Ennemi
{
    // variable privée : accessible uniquement depuis la classe.
    // la variable $cri vaudra de base GROAR !!!
    protected $puissance = 30;
    protected $cri = "KSSSSSSSS !!!";
}
