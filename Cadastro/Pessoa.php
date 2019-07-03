<?php

// declaração de classe
class Pessoa{
    // declaração de variáveis
    private $nome; // somente a própria classe
    public $idade; // qualquer outra
    protected $cpf; // ela mesma e suas filhas

    //declaração de método
    public function fala($falou){
        echo $falou;
    }
}