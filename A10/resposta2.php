<?php
// Definindo a classe Carro
class Torcedor {
    public $nome;
    public $time;
    public $idade;

    // Construtor para inicializar o objeto
    public function __construct($nome, $time, $idade) {
        $this->nome = $nome;
        $this->time = $time;
        $this->idade = $idade;
    }

    // Método para exibir informações
    public function exibir() {
        echo "Torcedor: {$this->nome} {$this->time} ({$this->idade})<br>";

    }
}

// Criando objetos (instâncias)
$torcedor1 = new Torcedor ("Gustavo", "Flamengo", 19);
$torcedor2 = new Torcedor ("Willian", "Palmeiras", 25);


// Usando métodos
$torcedor1->exibir();
$torcedor2->exibir();
?>
