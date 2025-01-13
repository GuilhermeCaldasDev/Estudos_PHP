<?php


require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vindo ao screen-match\n";

$filme = new Filme(
    'thor',
    2021,
    'super-heroi'
);

$filme->avalia(10);
$filme->avalia(6); 
$filme->avalia(8);
$filme->avalia(3);

var_dump($filme);


echo $filme->media() . "\n";

echo $filme->anoLancamento() . "\n";
echo $filme->genero();