<?php

declare(strict_types=1);

namespace Alfa\ServicoInteracao;

use Alfa\Interfaces\Estimacao;

class InteragirEstimacao {

    public function brincar(Estimacao $estimacao): string {
        return $estimacao->brincar();
    }
}