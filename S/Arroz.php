<?php

/**
 * Created by PhpStorm.
 * User: marci
 * Date: 05/03/2017
 * Time: 14:12
 */
class Arroz extends Produto
{
    private $lote;
    private $qualidade;

    /**
     * @return mixed
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * @param mixed $lote
     */
    public function setLote($lote)
    {
        $this->lote = $lote;
    }

    /**
     * @return mixed
     */
    public function getQualidade()
    {
        return $this->qualidade;
    }

    /**
     * @param mixed $qualidade
     */
    public function setQualidade($qualidade)
    {
        $this->qualidade = $qualidade;
    }


}