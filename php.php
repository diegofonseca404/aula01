<?php //tag de inicialização

//fracamente tipado, dinamicamente tipado
$a = 1; 
$a = "2"; 

//estrutura de controle

if ( true ){ } // condicional
while(true){ } //loop com condicional
for( $i = 1; $i < 10; $i++){} //loop contado

//percorrer um array e transformar em variável
$lista = [1,2,3,5,8];
$lista['123'] = 123;
foreach($lista as $num) { //loop em array
    echo $num;
}
echo "Hello";
print_r($a)  // imprimir variável
var_dump($a) // tipo de variável


//instaciando a classe
//pode ser assim
use Cadastro\Pessoa;
$pessoa = Pessoa();
$pessoa2 = new Cadastro\Pessoa();

// não precisa de tag de fechamento caso só tenha código PHP

