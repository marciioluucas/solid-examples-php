<?php

/**
 * Created by PhpStorm.
 * User: marci
 * Date: 05/03/2017
 * Time: 14:24
 */
class Goleiro extends Jogador
{


    /**
     * Goleiro constructor.
     */
    public function __construct()
    {
        $this->contratar(self::class);
    }
}