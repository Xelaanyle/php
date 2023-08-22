<?php declare(strict_types=1);

namespace App\Combat;
use App\Personnage\Ennemi;
use App\Personnage\Hero;

class Combat
{
    private $hero = null;
    private $ennemi = null;

    public function __construct(Hero $hero, Ennemi $ennemi)
    {
        $this->hero = $hero;
        $this->ennemi = $ennemi;
    }

    public function getHero(): Hero
    {
        return $this->hero;
    }

    public function setHero(Hero $hero): static
    {
        $this->hero = $hero;
        return $this;
    }

    public function getEnnemi(): Ennemi
    {
        return $this->ennemi;
    }

    public function setennemi(Hero $ennemi): static
    {
        $this->ennemi = $ennemi;
        return $this;
    }

    public function action()
    {
        // le ennemi attaque 
        $this->ennemi->crier();
        $attaque = $this->ennemi->getPuissance() * random_int(5, 15) / 10;
        $vie = $this->hero->getVie() - $attaque;
        $this->hero->setVie($vie);

        if ($this->hero->getVie() == 0) {
            return;
        }

        // et le héros contre attaque
        $this->hero->crier();
        $attaque = $this->hero->getPuissance() * random_int(5, 15) / 10;
        $vie = $this->ennemi->getVie() - $attaque;
        $this->ennemi->setVie($vie);
    }

    public function isFini()
    {
        if ($this->hero->getVie() == 0 || $this->ennemi->getVie() == 0) {
            return true;
        };
        return false;
    }
}
