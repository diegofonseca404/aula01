<?php

// declarando classe
class Pessoa{
    private $nome; // somente a propria classe 
    public $idade; // qualquer um
    protected $cpf; // ela mesma e suas filhas

    //declarando metodo
    public function fala($falou) {
        echo $falou;
    }

    // metodo construtor , se omitir o "public" a função será publica por padrão
    function __construct__($nome){

    }

}