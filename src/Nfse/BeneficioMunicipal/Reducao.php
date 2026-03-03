<?php

namespace TecnoSpeed\Plugnotas\Nfse\BeneficioMunicipal;

use PhpParser\Node\Scalar\Float_;
use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Traits\Communication;

class Reducao extends BuilderAbstract
{
    use Communication;

    private $valor;
    private $percentual;

    public function setValor($valor)
    {
        $this->valor = (float)$valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setPercentual($percentual)
    {
        $this->percentual = (float)$percentual;
    }

    public function getPercentual()
    {
        return $this->percentual;
    }
}
