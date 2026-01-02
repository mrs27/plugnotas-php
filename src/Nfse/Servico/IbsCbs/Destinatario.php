<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Common\Telefone;

class Destinatario extends BuilderAbstract
{

    private int $indicador = 0;
    private ?string $cpfCnpj = null;
    private ?string $codigoEstrangeiro = null;
    private ?int $nif = null;
    private ?int $naoNif = null;
    private ?string $razaoSocial = null;
    private ?EnderecoCbs $endereco = null;
    private ?Telefone $telefone = null;
    private ?string $email = null;

    public function getIndicador(): int
    {
        return $this->indicador;
    }

    public function setIndicador(int $indicador): self
    {
        $this->indicador = $indicador;
        return $this;
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj(?string $cpfCnpj): self
    {
        $this->cpfCnpj = $cpfCnpj;
        return $this;
    }

    public function getCodigoEstrangeiro(): ?string
    {
        return $this->codigoEstrangeiro;
    }

    public function setCodigoEstrangeiro(?string $codigoEstrangeiro): self
    {
        $this->codigoEstrangeiro = $codigoEstrangeiro;
        return $this;
    }

    public function getNif(): ?int
    {
        return $this->nif;
    }

    public function setNif(?int $nif): self
    {
        $this->nif = $nif;
        return $this;
    }

    public function getNaoNif(): ?int
    {
        return $this->naoNif;
    }

    public function setNaoNif(?int $naoNif): self
    {
        $this->naoNif = $naoNif;
        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(?string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function getEndereco(): ?object
    {
        return $this->endereco;
    }

    public function setEndereco(EnderecoCbs $endereco): self
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getTelefone(): ?Telefone
    {
        return $this->telefone;
    }

    public function setTelefone(?Telefone $telefone): self
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
}
