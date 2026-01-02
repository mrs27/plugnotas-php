<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

class Imovel extends BuilderAbstract
{
    private string $inscricaoFiscal;
    private string $codigoCIB;
    private string $codigoObra;
    private EnderecoCbs $endereco;

    public function getInscricaoFiscal(): string
    {
        return $this->inscricaoFiscal;
    }

    public function setInscricaoFiscal(string $inscricaoFiscal): self
    {
        $this->inscricaoFiscal = $inscricaoFiscal;
        return $this;
    }

    public function getCodigoCIB(): string
    {
        return $this->codigoCIB;
    }

    public function setCodigoCIB(string $codigoCIB): self
    {
        $this->codigoCIB = $codigoCIB;
        return $this;
    }

    public function getCodigoObra(): string
    {
        return $this->codigoObra;
    }

    public function setCodigoObra(string $codigoObra): self
    {
        $this->codigoObra = $codigoObra;
        return $this;
    }

    public function getEndereco(): object
    {
        return $this->endereco;
    }

    public function setEndereco(EnderecoCbs $endereco): self
    {
        $this->endereco = $endereco;
        return $this;
    }

}
