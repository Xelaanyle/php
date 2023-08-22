<?php declare(strict_types=1);

namespace App\Personnage;

// le mot clé "abstract" empêche que la classe soit instanciéé directement 

abstract class Personnage
{
    protected $vie = 100;
    protected $puissance = 0;
    protected $cri = '';

    public function getVie()
    {
        return $this->vie;
    }

    public function setVie($vie)
    {
        if ($vie < 0) {
            $vie = 0;
        }
        $this->vie = $vie;
        return $this;
    }

    public function getPuissance()
    {
        return $this->puissance;
    }

    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function setCri($cri)
    {

        if (strrpos($cri, '!!!') !== strlen($cri) - 3) {
            throw new \Exception('Les cris doivent terminer avec !!! à la fin');
        }

        $this->cri = $cri;
        return $this;
    }

    public function crier()
    {
        echo $this->cri . "\n";
        return $this;
    }
}
