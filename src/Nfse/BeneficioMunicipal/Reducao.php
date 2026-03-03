<?php

namespace TecnoSpeed\Plugnotas\Nfse\BeneficioMunicipal;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Traits\Communication;

class Reducao extends BuilderAbstract
{
    use Communication;

    private ?float $valor;
    private ?float $percentual;

    public function setValor(?float $valor)
    {
        $this->valor = $valor;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function setPercentual(?float $percentual)
    {
        $this->percentual = $percentual;
    }

    public function getPercentual(): ?float
    {
        return $this->percentual;
    }
    
}
