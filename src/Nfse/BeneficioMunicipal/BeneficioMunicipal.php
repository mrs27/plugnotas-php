<?php

namespace TecnoSpeed\Plugnotas\Nfse\BeneficioMunicipal;

use FerFabricio\Hydrator\Hydrate;
use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\InvalidTypeError;
use TecnoSpeed\Plugnotas\Traits\Communication;

class BeneficioMunicipal extends BuilderAbstract
{
    use Communication;

    private $numero;
    private $reducao;

    public function setNumero( $numero)
    {
        $this->numero = $numero;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setReducao(Reducao $reducao)
    {
        $this->reducao = $reducao;
    }

    public function getReducao()
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
