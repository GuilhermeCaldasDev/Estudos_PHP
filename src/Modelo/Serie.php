<?php
class Serie {
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly string $genero,
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorEpisodio

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
