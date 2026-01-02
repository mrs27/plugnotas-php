<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

class Valores extends BuilderAbstract
{
    private float $baseCalculo;
    private float $aliquotaIbsMunicipal;
    private float $aliquotaIbsEstadual;
    private float $aliquotaCbs;
    private float $valorIbsMunicipal;
    private float $valorIbsEstadual;
    private float $valorCbs;
    private Operacao $operacao;
    private TributacaoCbs $tributacao;
    private ResumoCbs $resumo;


    /**
     * Get the value of baseCalculo
     *
     * @return float
     */
    public function getBaseCalculo(): float
    {
        return $this->baseCalculo;
    }

    /**
     * Set the value of baseCalculo
     *
     * @param float $baseCalculo
     *
     * @return self
     */
    public function setBaseCalculo(float $baseCalculo): self
    {
        $this->baseCalculo = $baseCalculo;

        return $this;
    }

    /**
     * Get the value of aliquotaIbsMunicipal
     *
     * @return float
     */
    public function getAliquotaIbsMunicipal(): float
    {
        return $this->aliquotaIbsMunicipal;
    }

    public function setAliquotaIbsMunicipal(float $aliquotaIbsMunicipal): self
    {
        $this->aliquotaIbsMunicipal = $aliquotaIbsMunicipal;

        return $this;
    }

    public function getAliquotaIbsEstadual(): float
    {
        return $this->aliquotaIbsEstadual;
    }

    public function setAliquotaIbsEstadual(float $aliquotaIbsEstadual): self
    {
        $this->aliquotaIbsEstadual = $aliquotaIbsEstadual;

        return $this;
    }

    public function getAliquotaCbs(): float
    {
        return $this->aliquotaCbs;
    }

    public function setAliquotaCbs(float $aliquotaCbs): self
    {
        $this->aliquotaCbs = $aliquotaCbs;

        return $this;
    }

    public function getValorIbsMunicipal(): float
    {
        return $this->valorIbsMunicipal;
    }

    public function setValorIbsMunicipal(float $valorIbsMunicipal): self
    {
        $this->valorIbsMunicipal = $valorIbsMunicipal;

        return $this;
    }

    public function getValorIbsEstadual(): float
    {
        return $this->valorIbsEstadual;
    }

    public function setValorIbsEstadual(float $valorIbsEstadual): self
    {
        $this->valorIbsEstadual = $valorIbsEstadual;

        return $this;
    }

    public function getValorCbs(): float
    {
        return $this->valorCbs;
    }

    public function setValorCbs(float $valorCbs): self
    {
        $this->valorCbs = $valorCbs;

        return $this;
    }

    public function getOperacao(): Operacao
    {
        return $this->operacao;
    }

    public function setOperacao(Operacao $operacao): self
    {
        $this->operacao = $operacao;

        return $this;
    }

    public function getTributacao(): TributacaoCbs
    {
        return $this->tributacao;
    }

    public function setTributacao(TributacaoCbs $tributacao): self
    {
        $this->tributacao = $tributacao;

        return $this;
    }

    public function getResumo(): ResumoCbs
    {
        return $this->resumo;
    }

    public function setResumo(ResumoCbs $resumo): self
    {
        $this->resumo = $resumo;

        return $this;
    }
}




class Operacao extends BuilderAbstract
{
    /*
     * @var DocumentosReferenciadosCbs
     */
    private array $documentosReferenciados = [];

    public function getDocumentosReferenciados(): array
    {
        return $this->documentosReferenciados;
    }

    public function setDocumentosReferenciados(array $documentosReferenciados): self
    {
        $this->documentosReferenciados = $documentosReferenciados;
        return $this;
    }
}