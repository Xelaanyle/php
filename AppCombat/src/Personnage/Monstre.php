<?php declare(strict_types=1);

namespace App\Personnage;
use App\Personnage\Personnage;

class Monstre extends Personnage implements Ennemi
{
    // variable privée : accessible uniquement depuis la classe.
    // la variable $cri vaudra de base GROAR !!!
    protected $puissance = 10;
    protected $cri = "GROAR !!!";
}
