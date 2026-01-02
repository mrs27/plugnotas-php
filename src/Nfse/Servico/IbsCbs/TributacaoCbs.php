<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

class TributacaoCbs extends BuilderAbstract
{
    private ?string $cst = null;
    private ?string $cct = null;
    private ?string $codigoCreditoPresumido = null;
    private ?RegularTributacaoCbs $regular = null;
    private ?Diferimento $diferimento = null;

    public function getCst(): ?string
    {
        return $this->cst;
    }

    public function setCst(?string $cst): self
    {
        $this->cst = $cst;
        return $this;
    }

    public function getCct(): ?string
    {
        return $this->cct;
    }

    public function setCct(?string $cct): self
    {
        $this->cct = $cct;
        return $this;
    }

    public function getCodigoCreditoPresumido(): ?string
    {
        return $this->codigoCreditoPresumido;
    }

    public function setCodigoCreditoPresumido(?string $codigoCreditoPresumido): self
    {
        $this->codigoCreditoPresumido = $codigoCreditoPresumido;
        return $this;
    }

    public function getRegular(): ?object
    {
        return $this->regular;
    }

    public function setRegular(RegularTributacaoCbs $regular): self
    {
        $this->regular = $regular;
        return $this;
    }

    public function getDiferimento(): ?object
    {
        return $this->diferimento;
    }

    public function setDiferimento(?object $diferimento): self
    {
        $this->diferimento = $diferimento;
        return $this;
    }
}

class RegularTributacaoCbs extends BuilderAbstract
{
    private string $cst;
    private string $cct;

    public function getCst(): string
    {
        return $this->cst;
    }

    public function setCst(string $cst): self
    {
        $this->cst = $cst;
        return $this;
    }

    public function getCct(): string
    {
        return $this->cct;
    }

    public function setCct(string $cct): self
    {
        $this->cct = $cct;
        return $this;
    }
}

class Diferimento extends BuilderAbstract
{
    private float $percentualEstadual;
    private float $percentualMunicipal;
    private float $percentualCBS;

    public function getPercentualEstadual(): float
    {
        return $this->percentualEstadual;
    }

    public function setPercentualEstadual(float $percentualEstadual): self
    {
        $this->percentualEstadual = $percentualEstadual;
        return $this;
    }

    public function getPercentualMunicipal(): float
    {
        return $this->percentualMunicipal;
    }

    public function setPercentualMunicipal(float $percentualMunicipal): self
    {
        $this->percentualMunicipal = $percentualMunicipal;
        return $this;
    }
    
    public function getPercentualCBS(): float
    {
        return $this->percentualCBS;
    }

    public function setPercentualCBS(float $percentualCBS): self
    {
        $this->percentualCBS = $percentualCBS;
        return $this;
    }
}

