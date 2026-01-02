<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Destinatario;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Imovel;
use TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs\Valores;

class IbsCbs extends BuilderAbstract
{

    private int $finalidadeNFSe = 0;
    private int $operacaoPessoal = 0;
    private ?string $codigoOperacao = null;
    private ?int $tipoOperacao = null;
    private ?int $tipoEnteGovernamental = null;
    private ?string $descTipoEnteGovernamental = null;
    private bool $pagamentoParceladoAntecipado = false;
    private ?string $municipioIncidencia = null;
    
    /*
    * @var ReferenciaNFSe[]
    */
    private ?array $referenciasNFSe = null;
    private ?Destinatario $destinatario = null;
    private ?Imovel $imovel = null;
    private ?Valores $valores = null;


     public function getFinalidadeNFSe(): int
    {
        return $this->finalidadeNFSe;
    }

    public function setFinalidadeNFSe(int $finalidadeNFSe): self
    {
        $this->finalidadeNFSe = $finalidadeNFSe;
        return $this;
    }

    public function getOperacaoPessoal(): int
    {       
        return $this->operacaoPessoal;
    }

    public function setOperacaoPessoal(int $operacaoPessoal): self
    {
          $allowedTypes = [0, 1];

          if (!in_array($operacaoPessoal, $allowedTypes)) {
            throw new ValidationError(
                'Operação pessoal não suportado.'
            );
        }
        $this->operacaoPessoal = $operacaoPessoal;
        return $this;
    }

    public function getCodigoOperacao(): ?string
    {
        return $this->codigoOperacao;
    }

    public function setCodigoOperacao(?string $codigoOperacao): self
    {
        $this->codigoOperacao = $codigoOperacao;
        return $this;
    }

    public function getTipoOperacao(): ?int
    {
        return $this->tipoOperacao;
    }

    public function setTipoOperacao(?int $tipoOperacao): self
    {
        $this->tipoOperacao = $tipoOperacao;
        return $this;
    }

    public function getTipoEnteGovernamental(): ?int
    {
        return $this->tipoEnteGovernamental;
    }

    public function setTipoEnteGovernamental(?int $tipoEnteGovernamental): self
    {
        $this->tipoEnteGovernamental = $tipoEnteGovernamental;
        return $this;
    }

    public function getDescTipoEnteGovernamental(): ?string
    {
        return $this->descTipoEnteGovernamental;
    }

    public function setDescTipoEnteGovernamental(?string $descTipoEnteGovernamental): self
    {
        $this->descTipoEnteGovernamental = $descTipoEnteGovernamental;
        return $this;
    }

    public function isPagamentoParceladoAntecipado(): bool
    {
        return $this->pagamentoParceladoAntecipado;
    }

    public function setPagamentoParceladoAntecipado(bool $pagamentoParceladoAntecipado): self
    {
        $this->pagamentoParceladoAntecipado = $pagamentoParceladoAntecipado;
        return $this;
    }

    public function getMunicipioIncidencia(): ?string
    {
        return $this->municipioIncidencia;
    }

    public function setMunicipioIncidencia(?string $municipioIncidencia): self
    {
        $this->municipioIncidencia = $municipioIncidencia;
        return $this;
    }

    public function getReferenciasNFSe(): ?array
    {
        return $this->referenciasNFSe;
    }

    public function setReferenciasNFSe(?array $referenciasNFSe): self
    {
        $this->referenciasNFSe = $referenciasNFSe;
        return $this;
    }

    public function getDestinatario(): ?Destinatario
    {
        return $this->destinatario;
    }

    public function setDestinatario(?Destinatario $destinatario): self
    {
        $this->destinatario = $destinatario;
        return $this;
    }

    public function getImovel(): ?Imovel
    {
        return $this->imovel;
    }

    public function setImovel(?Imovel $imovel): self
    {
        $this->imovel = $imovel;
        return $this;
    }

    public function getValores(): ?Valores
    {
        return $this->valores;
    }

    public function setValores(?Valores $valores): self
    {
        $this->valores = $valores;
        return $this;
    }
}
