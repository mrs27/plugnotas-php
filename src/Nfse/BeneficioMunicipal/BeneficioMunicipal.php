<?php

namespace TecnoSpeed\Plugnotas\Nfse\BeneficioMunicipal;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Traits\Communication;

class BeneficioMunicipal extends BuilderAbstract
{
    use Communication;

    private ?int $numero;
    private ?Reducao $reducao;

    public function setNumero(?int $numero)
    {
        $this->numero = $numero;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setReducao(?Reducao $reducao)
    {
        $this->reducao = $reducao;
    }

    public function getReducao(): ?Reducao
    {
        return $this->reducao;
    }
}
