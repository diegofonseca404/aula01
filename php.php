<?php     // tag de inicialização

// fracamente tipado, dinamicamente tipado
$a = 1;    // declarando uma variavel do tipo inteiro
$a = "2";  // declarando uma variavel do tipo string

if (true) { } // condicional
while(true) { } // loop condicional
for($i=1; $i < 10; $i++) {} // loop contado
$list = [1,1,2,3,5,8,13]; // array
$list['1213'] = 123; // atribuinto valor ao indice 1213
foreach($list as $num) { echo $num; } // loop em array
echo "Hello"; // imprimir
print_r($a); // imprimir variavel
var_dump($a); // visualizar tipo 

function soma($num1, $num2) {
    return $num1+$num2;
}

echo soma(12,12);
// package do java -> namespaces
use Cadastro\Pessoa;
$pessoa = new Pessoa();

$pessoa2 = new Cadastro\Pessoa();

// não, caso cotenha apenas codigo php 


