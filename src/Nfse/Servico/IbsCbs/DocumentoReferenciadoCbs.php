<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

class DocumentoReferenciadoCbs extends BuilderAbstract
{
    private ?Nacional $nacional = null;
    private ?Fiscal $fiscal = null;
    private ?NaoFiscal $naoFiscal = null;
    private ?Fornecedor $fornecedor = null;
    private string $dataEmissao;
    private string $competencia;
    private string $tipoOperacao;
    private ?string $descricaoOperacao = null;
    private float $valorOperacao;

    public function getNacional(): ?object
    {
        return $this->nacional;
    }

    public function setNacional(?object $nacional): self
    {
        $this->nacional = $nacional;
        return $this;
    }

    public function getFiscal(): ?object
    {
        return $this->fiscal;
    }

    public function setFiscal(?object $fiscal): self
    {
        $this->fiscal = $fiscal;
        return $this;
    }

    public function getNaoFiscal(): ?object
    {
        return $this->naoFiscal;
    }

    public function setNaoFiscal(?object $naoFiscal): self
    {
        $this->naoFiscal = $naoFiscal;
        return $this;
    }

    public function getFornecedor(): ?object
    {
        return $this->fornecedor;
    }

    public function setFornecedor(?object $fornecedor): self
    {
        $this->fornecedor = $fornecedor;
        return $this;
    }

    public function getDataEmissao(): string
    {
        return $this->dataEmissao;
    }

    public function setDataEmissao(string $dataEmissao): self
    {
        $this->dataEmissao = $dataEmissao;
        return $this;
    }

    public function getCompetencia(): string
    {
        return $this->competencia;
    }

    public function setCompetencia(string $competencia): self
    {
        $this->competencia = $competencia;
        return $this;
    }

    public function getTipoOperacao(): string
    {
        return $this->tipoOperacao;
    }

    public function setTipoOperacao(string $tipoOperacao): self
    {
        $this->tipoOperacao = $tipoOperacao;
        return $this;
    }

    public function getDescricaoOperacao(): ?string
    {
        return $this->descricaoOperacao;
    }

    public function setDescricaoOperacao(?string $descricaoOperacao): self
    {
        $this->descricaoOperacao = $descricaoOperacao;
        return $this;
    }

    public function getValorOperacao(): float
    {
        return $this->valorOperacao;
    }

    public function setValorOperacao(float $valorOperacao): self
    {
        $this->valorOperacao = $valorOperacao;
        return $this;
    }
}

class Nacional extends BuilderAbstract
{
    private int $tipoChave;
    private string $descricaoChave;
    private string $chave;

    public function getTipoChave(): int
    {
        return $this->tipoChave;
    }

    public function setTipoChave(int $tipoChave): self
    {
        $this->tipoChave = $tipoChave;
        return $this;
    }

    public function getDescricaoChave(): string
    {
        return $this->descricaoChave;
    }

    public function setDescricaoChave(string $descricaoChave): self
    {
        $this->descricaoChave = $descricaoChave;
        return $this;
    }

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

class Fiscal extends BuilderAbstract
{
    private int $codigoCidade;
    private string $numero;
    private string $descricao;

    public function getCodigoCidade(): int
    {
        return $this->codigoCidade;
    }

    public function setCodigoCidade(int $codigoCidade): self
    {
        $this->codigoCidade = $codigoCidade;
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

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }
}

class NaoFiscal extends BuilderAbstract
{
    private string $descricao;
    private string $numero;

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;
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
}

class Fornecedor extends BuilderAbstract
{
    private string $cpfCnpj;
    private ?string $codigoEstrangeiro = null;
    private int $nif;
    private int $naoNif;
    private string $razaoSocial;
    private string $email;

    public function getCpfCnpj(): string
    {
        return $this->cpfCnpj;
    }

    public function setCpfCnpj(string $cpfCnpj): self
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

    public function getNif(): int
    {
        return $this->nif;
    }

    public function setNif(int $nif): self
    {
        $this->nif = $nif;

        return $this;
    }

    public function getNaoNif(): int
    {
        return $this->naoNif;
    }

    public function setNaoNif(int $naoNif): self
    {
        $this->naoNif = $naoNif;

        return $this;
    }

    public function getRazaoSocial(): string
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
