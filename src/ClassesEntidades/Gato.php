<?php 

declare(strict_types=1);

namespace Alfa\ClassesEntidades;

use Alfa\Interfaces\Estimacao;

class Gato extends Animal implements Estimacao {
    private string $nome;
    private bool $alimentado = true;

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function emiteSom(): string
    {
        return "Miau";
    }

    public function come(): string {
        if (!$this->alimentado) {
            return "Animal está com fome";
        } else {
            return "Animal ja foi alimentado";
        }
        
        $this->alimentado = true;
        return parent::come();
        
    }

    public function brincar(): string {
        return sprintf("%s está brincando com uma bolinha de lã", $this->getNome());
    }

}