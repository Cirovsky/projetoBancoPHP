<?php

namespace Alura\Banco\RecursosHumanos;

use Alura\Banco\Commons\Endereco;
use Alura\Banco\Commons\CPF;
class Pessoa
{
    protected CPF $cpf;
    protected string $nome;

    protected Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomePessoa($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    protected function validaNomePessoa(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    /**
     * @return Endereco
     */
    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    /**
     * @param Endereco $endereco
     * @return Pessoa
     */
    public function setEndereco(Endereco $endereco): void
    {
        $this->endereco = $endereco;
    }
}
