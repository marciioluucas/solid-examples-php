<?php

/**
 * Created by PhpStorm.
 * User: marci
 * Date: 05/03/2017
 * Time: 14:48
 */
abstract class Automovel extends Entidade
{
    protected $modelo;
    protected $marca;
    protected $ano;

    public abstract function estacionar($tamanhoGaragem);

}