<?php declare(strict_types = 1);

namespace App\Mixin;

trait Criable
{
    protected $cri = '';
    
    public function getCri(): string
    {
        return $this->cri;
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