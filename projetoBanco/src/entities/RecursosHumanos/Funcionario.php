<?php

namespace Alura\Banco\RecursosHumanos;
use Alura\Banco\Commons\CPF;
use Alura\Banco\Commons\Endereco;
use Alura\Banco\RecursosHumanos\Pessoa;

class Funcionario extends Pessoa
{
    protected string $cargo;



    public function __construct(CPF $cpf, string $nome, Endereco $endereco, $cargo)
    {
        $this->validaNomePessoa($nome);
        parent::__construct($cpf, $nome, $endereco);
        $this->cargo = $cargo;
    }
    /**
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

}