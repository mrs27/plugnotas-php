<?php

namespace TecnoSpeed\Plugnotas\Nfse\Servico\IbsCbs;

use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;

class ResumoCbs extends BuilderAbstract
{

    private IbsMunicipal $ibsMunicipal;
    private IbsEstadual $ibsEstadual;
    private CbsFederal $cbsFederal;
    private Totalizador $totalizador;

    public function getIbsMunicipal(): IbsMunicipal
    {
        return $this->ibsMunicipal;
    }

    public function setIbsMunicipal(IbsMunicipal $ibsMunicipal): self
    {
        $this->ibsMunicipal = $ibsMunicipal;

        return $this;
    }

    public function getIbsEstadual(): IbsEstadual
    {
        return $this->ibsEstadual;
    }

    public function setIbsEstadual(IbsEstadual $ibsEstadual): self
    {
        $this->ibsEstadual = $ibsEstadual;

        return $this;
    }

    public function getCbsFederal(): CbsFederal
    {
        return $this->cbsFederal;
    }

    public function setCbsFederal(CbsFederal $cbsFederal): self
    {
        $this->cbsFederal = $cbsFederal;

        return $this;
    }

    public function getTotalizador(): Totalizador
    {
        return $this->totalizador;
    }

    public function setTotalizador(Totalizador $totalizador): self
    {
        $this->totalizador = $totalizador;

        return $this;
    }
}
class IbsMunicipal extends BuilderAbstract
{
    private float $percentualReducao;
    private float $aliquotaEfetiva;

    public function getPercentualReducao(): float
    {
        return $this->percentualReducao;
    }
    public function setPercentualReducao(float $percentualReducao): self
    {
        $this->percentualReducao = $percentualReducao;
        return $this;
    }
    public function getAliquotaEfetiva(): float
    {
        return $this->aliquotaEfetiva;
    }
    public function setAliquotaEfetiva(float $aliquotaEfetiva): self
    {
        $this->aliquotaEfetiva = $aliquotaEfetiva;
        return $this;
    }
}

class IbsEstadual extends BuilderAbstract
{
    private float $percentualReducao;
    private float $aliquotaEfetiva;

    public function getPercentualReducao(): float
    {
        return $this->percentualReducao;
    }
    public function setPercentualReducao(float $percentualReducao): self
    {
        $this->percentualReducao = $percentualReducao;
        return $this;
    }
    public function getAliquotaEfetiva(): float
    {
        return $this->aliquotaEfetiva;
    }
    public function setAliquotaEfetiva(float $aliquotaEfetiva): self
    {
        $this->aliquotaEfetiva = $aliquotaEfetiva;
        return $this;
    }
}

class CbsFederal extends BuilderAbstract
{
    private float $percentualReducao;
    private float $aliquotaEfetiva;

    public function getPercentualReducao(): float
    {
        return $this->percentualReducao;
    }
    public function setPercentualReducao(float $percentualReducao): self
    {
        $this->percentualReducao = $percentualReducao;
        return $this;
    }
    public function getAliquotaEfetiva(): float
    {
        return $this->aliquotaEfetiva;
    }
    public function setAliquotaEfetiva(float $aliquotaEfetiva): self
    {
        $this->aliquotaEfetiva = $aliquotaEfetiva;
        return $this;
    }
}

class Totalizador extends BuilderAbstract
{
    private int $valorIbsCbs;
    private Ibs $ibs;
    private Cbs $cbs;
    private Regular $regular;
    private CompraGovernamental $compraGovernamental;

    public function getValorIbsCbs(): int
    {
        return $this->valorIbsCbs;
    }

    public function setValorIbsCbs(int $valorIbsCbs): self
    {
        $this->valorIbsCbs = $valorIbsCbs;

        return $this;
    }

    public function getIbs(): Ibs
    {
        return $this->ibs;
    }

    public function setIbs(Ibs $ibs): self
    {
        $this->ibs = $ibs;

        return $this;
    }

    public function getCbs(): Cbs
    {
        return $this->cbs;
    }

    public function setCbs(Cbs $cbs): self
    {
        $this->cbs = $cbs;

        return $this;
    }

    public function getRegular(): Regular
    {
        return $this->regular;
    }

    public function setRegular(Regular $regular): self
    {
        $this->regular = $regular;

        return $this;
    }

    public function getCompraGovernamental(): CompraGovernamental
    {
        return $this->compraGovernamental;
    }

    public function setCompraGovernamental(CompraGovernamental $compraGovernamental): self
    {
        $this->compraGovernamental = $compraGovernamental;
        return $this;
    }
}

class Ibs extends BuilderAbstract
{
    private float $valor;
    private float $valorDiferimentoMunicipal;
    private float $valorDiferimentoEstadual;
    private float $percentualCreditoPresumido;
    private float $valorCreditoPresumido;

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;
        return $this;
    }

    public function getValorDiferimentoMunicipal(): float
    {
        return $this->valorDiferimentoMunicipal;
    }

    public function setValorDiferimentoMunicipal(float $valorDiferimentoMunicipal): self
    {
        $this->valorDiferimentoMunicipal = $valorDiferimentoMunicipal;
        return $this;
    }

    public function getValorDiferimentoEstadual(): float
    {
        return $this->valorDiferimentoEstadual;
    }

    public function setValorDiferimentoEstadual(float $valorDiferimentoEstadual): self
    {
        $this->valorDiferimentoEstadual = $valorDiferimentoEstadual;
        return $this;
    }

    public function getPercentualCreditoPresumido(): float
    {
        return $this->percentualCreditoPresumido;
    }

    public function setPercentualCreditoPresumido(float $percentualCreditoPresumido): self
    {
        $this->percentualCreditoPresumido = $percentualCreditoPresumido;
        return $this;
    }

    public function getValorCreditoPresumido(): float
    {
        return $this->valorCreditoPresumido;
    }

    public function setValorCreditoPresumido(float $valorCreditoPresumido): self
    {
        $this->valorCreditoPresumido = $valorCreditoPresumido;
        return $this;
    }
}


class Cbs extends BuilderAbstract
{
    private float $valorDiferimento;
    private float $percentualCreditoPresumido;
    private float $valorCreditoPresumido;

    public function getValorDiferimento(): float
    {
        return $this->valorDiferimento;
    }

    public function setValorDiferimento(float $valorDiferimento): self
    {
        $this->valorDiferimento = $valorDiferimento;
        return $this;
    }

    public function getPercentualCreditoPresumido(): float
    {
        return $this->percentualCreditoPresumido;
    }

    public function setPercentualCreditoPresumido(float $percentualCreditoPresumido): self
    {
        $this->percentualCreditoPresumido = $percentualCreditoPresumido;
        return $this;
    }

    public function getValorCreditoPresumido(): float
    {
        return $this->valorCreditoPresumido;
    }

    public function setValorCreditoPresumido(float $valorCreditoPresumido): self
    {
        $this->valorCreditoPresumido = $valorCreditoPresumido;
        return $this;
    }

}

class Regular extends BuilderAbstract
{
    private ?float $aliquotaEfetivaEstadual = null;
    private ?float $aliquotaEfetivaMunicipal = null;
    private ?float $valorIbsMunicipal = null;
    private ?float $valorIbsEstadual = null;
    private ?float $aliquotaEfetivaCbs = null;
    private ?float $valorCbs = null;

    public function getAliquotaEfetivaEstadual(): ?float
    {
        return $this->aliquotaEfetivaEstadual;
    }

    public function setAliquotaEfetivaEstadual(?float $aliquotaEfetivaEstadual): self
    {
        $this->aliquotaEfetivaEstadual = $aliquotaEfetivaEstadual;
        return $this;
    }

    public function getAliquotaEfetivaMunicipal(): ?float
    {
        return $this->aliquotaEfetivaMunicipal;
    }

    public function setAliquotaEfetivaMunicipal(?float $aliquotaEfetivaMunicipal): self
    {
        $this->aliquotaEfetivaMunicipal = $aliquotaEfetivaMunicipal;
        return $this;
    }

    public function getValorIbsMunicipal(): ?float
    {
        return $this->valorIbsMunicipal;
    }

    public function setValorIbsMunicipal(?float $valorIbsMunicipal): self
    {
        $this->valorIbsMunicipal = $valorIbsMunicipal;
        return $this;
    }

    public function getValorIbsEstadual(): ?float
    {
        return $this->valorIbsEstadual;
    }

    public function setValorIbsEstadual(?float $valorIbsEstadual): self
    {
        $this->valorIbsEstadual = $valorIbsEstadual;
        return $this;
    }

    public function getAliquotaEfetivaCbs(): ?float
    {
        return $this->aliquotaEfetivaCbs;
    }

    public function setAliquotaEfetivaCbs(?float $aliquotaEfetivaCbs): self
    {
        $this->aliquotaEfetivaCbs = $aliquotaEfetivaCbs;
        return $this;
    }

    public function getValorCbs(): ?float
    {
        return $this->valorCbs;
    }

    public function setValorCbs(?float $valorCbs): self
    {
        $this->valorCbs = $valorCbs;
        return $this;
    }
    
}

class CompraGovernamental extends BuilderAbstract
{
    private ?float $percentualIbsMunicipal = null;
    private ?float $valorIbsMunicipal = null;
    private ?float $percentualIbsEstadual = null;
    private ?float $valorIbsEstadual = null;
    private ?float $percentualCbs = null;
    private ?float $valorCbs = null;

    public function getPercentualIbsMunicipal(): ?float
    {
        return $this->percentualIbsMunicipal;
    }

    public function setPercentualIbsMunicipal(?float $percentualIbsMunicipal): self
    {
        $this->percentualIbsMunicipal = $percentualIbsMunicipal;
        return $this;
    }

    public function getValorIbsMunicipal(): ?float
    {
        return $this->valorIbsMunicipal;
    }

    public function setValorIbsMunicipal(?float $valorIbsMunicipal): self
    {
        $this->valorIbsMunicipal = $valorIbsMunicipal;
        return $this;
    }

    public function getPercentualIbsEstadual(): ?float
    {
        return $this->percentualIbsEstadual;
    }

    public function setPercentualIbsEstadual(?float $percentualIbsEstadual): self
    {
        $this->percentualIbsEstadual = $percentualIbsEstadual;
        return $this;
    }

    public function getValorIbsEstadual(): ?float
    {
        return $this->valorIbsEstadual;
    }

    public function setValorIbsEstadual(?float $valorIbsEstadual): self
    {
        $this->valorIbsEstadual = $valorIbsEstadual;
        return $this;
    }

    public function getPercentualCbs(): ?float
    {
        return $this->percentualCbs;
    }

    public function setPercentualCbs(?float $percentualCbs): self
    {
        $this->percentualCbs = $percentualCbs;
        return $this;
    }

    public function getValorCbs(): ?float
    {
        return $this->valorCbs;
    }

    public function setValorCbs(?float $valorCbs): self
    {
        $this->valorCbs = $valorCbs;
        return $this;
    }
}
