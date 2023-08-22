<?php declare(strict_types=1);


// La calsse Monstre dépends de la classe Personnage
use App\Personnage\Monstre;
// La calsse Héros dépends de la classe Personnage
use App\Personnage\Hero;
// La calsse Monstre est composé des classes Monstre Hero, Monstre et Vampire
use App\Combat\Combat;
// La classe Vampire est composé de la classe Personnage
use App\Personnage\Vampire;

use App\Personnage\Personnage;

require __DIR__.'/vendor/autoload.php';

// Attention : la classe Personnage est une classe abstraite, elle ne peut pas être 
// PHP Fatal error:  Uncaught Error: Cannot instantiate abstract class App\Personnage\Personnage in /home/chemin/projects/php/app.php:17
// Stack trace:
// #0 {main}
//  thrown in /home/chemin/projects/php/app.php on line 22
// $p = new Personnage();
// $p  ->setCri("Miaaou !!!") 
//     ->Crier()
// ;
//création d'un nouveau monstre (nouvelle instance/objet de la classe Monstre)
$m = new Monstre();
//appel du setter pour modifier la valeur de $cri
//renvoie GROAR !!! car cela reprend la valeur de base de $cri (defini dans la classe)
$m->crier();
echo $m->getPuissance() . "\n";

//une autre instance de Monstre
$v = new Vampire();
$v
    ->crier()
    ->setPuissance(30);
echo $v->getPuissance() . "\n";

// $m3 = new Monstre();
// //impossible de modifier directement $cri car la variable est privée dans la classe
// //PHP Fatal error:  Uncaught Error: Cannot access private property Monstre::$cri in /home/hugo/projects/php/app.php:20
// $m3->cri = 'BLAAAAAH';
// $m3->crier();
// $m4 = new Monstre();
// //impossible à cause du test ligne 14 dans Monstre.php
// //PHP Fatal error:  Uncaught Exception: Les monstres doivent crier avec !!! à la fin in /home/hugo/projects/php/src/Monstre.php:15
// $m4->setCri('BLAAAAH');
// $m4->crier();

$hero = new Hero();
$hero
    ->crier()
    ->setVie(100)
    ->setPuissance(50);


$combat1 = new Combat($hero, $m);
// $combat1->setMonstre($m);
// $combat1->setHero($hero);

$combat2 = new Combat($hero, $v);
// $combat2->setMonstre($v);
// $combat2->setHero($hero);

while ($combat1->isFini() == false || $combat2->isFini() == false) {
    //le combat continue
    $combat1->action();
    $combat2->action();
    echo "\n";
    echo "Vie du Monstre = " . $m->getVie() . "\n";
    echo "Vie du Vampire 2 = " . $v->getVie() . "\n";
    echo "Vie du Héros = " . $hero->getVie() . "\n";
    echo "\n";
};

if ($hero->getVie() == 0 && $m->getVie() == 0 && $v->getVie() == 0) {
    echo "Match nul !!!\n";
} elseif ($hero->getVie() > 0) {
    echo "WINNER !!!\n";
} else { // $hero->getVie() == 0
    echo "GAME OVER !!!\n";
};
