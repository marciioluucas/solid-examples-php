<?php

/**
 * Created by PhpStorm.
 * User: marci
 * Date: 05/03/2017
 * Time: 14:13
 */
class Papel extends Produto
{
    private $espessura;
    private $cor;

    /**
     * @return mixed
     */
    public function getEspessura()
    {
        return $this->espessura;
    }

    /**
     * @param mixed $espessura
     */
    public function setEspessura($espessura)
    {
        $this->espessura = $espessura;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor)
    {
        $this->cor = $cor;
    }


}