<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

class ReferenciaNFSe extends BuilderAbstract
{
    private string $chave;

    public function getChave(): string
    {
        return $this->chave;
    }

    public function setChave(string $chave): self
    {
        $this->chave = $chave;
        return $this;
    }
}
