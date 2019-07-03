<?php

//declaração de classe
class Pessoa{
    //declaração de variavel
    private $nome; //Somente a propria classe
    public $idade; // qualquer 1
    protected $cpf; // ela mesma e suas filhas
    //declaração de metodos
    public function fala($falou){
        echo $falou;
    }

}