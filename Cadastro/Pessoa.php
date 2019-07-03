<?php

//declaração de classe
class Pessoa{

    //declaração de variavel
    private $nome; //somente a própria classe
    public $idade; //qualquer
    protected $cpf; // ela mesma e sua filha

    public function fala( $falou){
        echo $falou;
    }

    // método construtor
    public function __CONSTRUCT__( $nome ){
        //REFERENCIANDO AO ATRIBUTO DA CLASSES
        $this->nome = $nome;
    }
}