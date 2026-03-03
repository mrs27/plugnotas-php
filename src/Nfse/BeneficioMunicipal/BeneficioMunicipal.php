<?php

namespace TecnoSpeed\Plugnotas\Nfse\BeneficioMunicipal;

use FerFabricio\Hydrator\Hydrate;
use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\InvalidTypeError;
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

    public static function fromArray($data)
    {
        if (!is_array($data)) {
            throw new InvalidTypeError('Deve ser informado um array.');
        }

        if (array_key_exists('reducao', $data)) {
            $data['reducao'] = Reducao::fromArray($data['reducao']);
        }
        return Hydrate::toObject(self::class, $data);
    }
}
