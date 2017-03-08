<?php

/**
 * Created by PhpStorm.
 * User: marci
 * Date: 05/03/2017
 * Time: 14:27
 */
class Atacante extends Jogador
{


    /**
     * Atacante constructor.
     */
    public function __construct()
    {
        $this->contratar(self::class);
    }
}