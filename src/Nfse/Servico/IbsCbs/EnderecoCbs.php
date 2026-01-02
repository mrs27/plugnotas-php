<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

class EnderecoCbs extends BuilderAbstract  
{

    private int $codigoCidade;
    private string $cep;
    private ?string $codigoPais = null;
    private ?string $codigoPostalExterior = null;
    private ?string $estadoProvinciaRegiao = null;
    private ?string $descricaoCidade = null;
    private ?string $estado = null;
    private string $logradouro;
    private string $numero;
    private ?string $complemento = null;
    private ?string $bairro = null;

    public function getCodigoCidade(): int
    {
        return $this->codigoCidade;
    }

    public function setCodigoCidade(int $codigoCidade): self
    {
        $this->codigoCidade = $codigoCidade;
        return $this;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function setCep(string $cep): self
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCodigoPais(): ?string
    {
        return $this->codigoPais;
    }

    public function setCodigoPais(?string $codigoPais): self
    {
        $this->codigoPais = $codigoPais;
        return $this;
    }

    public function getCodigoPostalExterior(): ?string
    {
        return $this->codigoPostalExterior;
    }

    public function setCodigoPostalExterior(?string $codigoPostalExterior): self
    {
        $this->codigoPostalExterior = $codigoPostalExterior;
        return $this;
    }

    public function getEstadoProvinciaRegiao(): ?string
    {
        return $this->estadoProvinciaRegiao;
    }

    public function setEstadoProvinciaRegiao(?string $estadoProvinciaRegiao): self
    {
        $this->estadoProvinciaRegiao = $estadoProvinciaRegiao;
        return $this;
    }

    public function getDescricaoCidade(): ?string
    {
        return $this->descricaoCidade;
    }

    public function setDescricaoCidade(?string $descricaoCidade): self
    {
        $this->descricaoCidade = $descricaoCidade;
        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        $this->estado = $estado;
        return $this;
    }

    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    public function setLogradouro(string $logradouro): self
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    public function setComplemento(?string $complemento): self
    {
        $this->complemento = $complemento;
        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(?string $bairro): self
    {
        $this->bairro = $bairro;
        return $this;
    }
}
