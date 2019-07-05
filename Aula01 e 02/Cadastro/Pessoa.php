<?php 

namespace Cadastro;

// declaração de classe
class Pessoa {
    // declaração de variável
    private $nome; // somente a propria classe
    public $idade; // qualquer 1
    protected $cpf; // ela mesma e suas filhas
    // declaração de método
    public function fala($falou) {
        echo $falou;
    }
    // método construtor
    function __CONSTRUCT__($nome) {
        $this->nome = $nome;
    } 
}
