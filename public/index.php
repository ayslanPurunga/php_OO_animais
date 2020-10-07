<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\ClassesEntidades\Dinossauro;
use Alfa\ClassesEntidades\Gato;
use Alfa\ClassesEntidades\Cachorro;
use Alfa\ServicoInteracao\InteragirEstimacao;

$cachorro = new Cachorro("Totó");
$gato = new Gato();
$gato->setNome("Branquinho");
$dinossauro = new Dinossauro();

echo $cachorro->come()."\n";

try { 
    echo $gato->come()."\n";
    echo $gato->come()."\n";
} catch(Exception $e) {
    echo $e->getMessage()."\n";
}

$interagir = new InteragirEstimacao();
echo $interagir->brincar($cachorro)."\n";
echo $interagir->brincar($gato)."\n";
