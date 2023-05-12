<?php

require_once 'autoload.php';

use Alura\Banco\Commons\CPF;
use Alura\Banco\Commons\Endereco;
use Alura\Banco\Conta;
use Alura\Banco\RecursosHumanos\Funcionario;
use Alura\Banco\RecursosHumanos\Titular;




$endFulano = new Endereco("Barelanches", "Papito", "Pitu", "51");
$endCicrano = new Endereco("Ceu", "Tem Pão", "Padre Voador", "999");
$fulano = new Titular(new CPF('123.456.789-10'), 'Fulano', $endFulano);
$primeiraConta = new Conta($fulano);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

$cicrano = new Titular(new CPF('698.549.548-10'), 'Cicrano', $endCicrano);
$segundaConta = new Conta($cicrano);
var_dump($segundaConta);

$beltrano = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endCicrano) );

$novoFuncionario = new Funcionario(new CPF("000.111.222-33"), "Caspio", $endCicrano, "gerente");

var_dump($novoFuncionario);
echo $novoFuncionario->recuperaNome() . PHP_EOL;

unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
