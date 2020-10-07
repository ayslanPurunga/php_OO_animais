<?php 

declare(strict_types=1);

namespace Alfa\ClassesEntidades;

use Alfa\Interfaces\Estimacao;

class Cachorro extends Animal implements Estimacao {
    private string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function emiteSom(): string {
        return "Au Au Auuuuu";
    }

    public function brincar(): string {
        return sprintf("%s está brincando com uma bolinha de tênis ", $this->getNome());
    }
}