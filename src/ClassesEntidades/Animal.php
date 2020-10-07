<?php

declare(strict_types=1);

namespace Alfa\ClassesEntidades;

abstract class Animal {
    protected int $pernas = 0;

    public function come(): string {
        return "Nhac Nhac";
    }

    abstract public function emiteSom(): string;
}