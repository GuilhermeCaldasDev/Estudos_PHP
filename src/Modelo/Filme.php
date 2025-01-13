<?php

class Filme {
    private array $notas;

    public function __construct(
        private readonly string $nome,
        private readonly int $anoLancamento,
        private readonly string $genero
    ) {
        $this->notas = [];
    }

    function avalia(float $nota)
    {
        $this->notas[] = $nota;
    }

    function media()
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function anoLancamento() : int
    {
        return $this->anoLancamento;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function genero() : string
    {
        return $this->genero;
    }

}