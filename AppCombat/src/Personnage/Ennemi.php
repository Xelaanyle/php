<?php 

namespace App\Personnage;

interface Ennemi
{
    public function getVie();
    public function setVie($vie);
    public function getPuissance();
    public function setPuissance($puissance);
    public function crier();
}