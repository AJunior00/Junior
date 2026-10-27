<!-- programacao orientada a objetos -->

<?php

class personagem {
    public $nome;
    private $vida;
    public $dano;

    public function __construct($nome, $vida, $dano) {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->dano = $dano;
    }

    public function getVida() {
        return $this->vida;
    }

    public function setVida($vida) {
        $junior = new personagem("junior", 50, 15);
        $matheus = new personagem("matheus", 50, 15);
    }

    public function atacar() {
        echo "$this->nome realizou um ataque!";

   }
}

$junior = new personagem("junior", 100, 10);

$junior->setVida(75);

$matheus = new personagem("matheus", 50, 5);
$felipe = new personagem("felipe", 30, 3);


$junior->atacar();

class guerreiro extends personagem {
    public function defender(){
        echo "$this->nome levantou o escudo!";
    }
}

class Guerreiro extends Personagem {
    // Sobreescrevendo o método da classe pai
    public function atacar(){
        echo "$this->nome atacou com uma espada!\n";
    }
    public function defender(){
        echo "$this->nome levantou o escudo!\n";
    }
}
class Mago extends Personagem {
    // Sobreescrevendo o método da classe pai
    public function atacar(){
        echo "$this->nome lançou uma bola de fogo!\n";
    }
}


$guerreiro = new guerreiro("junior", 100, 10);

$mago = new mago("matheus", 50, 5);
$personagem = new personagem("felipe", 30, 3);

$personagens = [$guerreiro, $mago, $personagem];

foreach ($personagens as $p) {
    $p->atacar();
}

//1. O que é uma classe?
//Um molde para criar objetos

//2. O que significa new Personagem()/
//É a criação de um objeto da classe personagem

//3. para que serve o $this->nome?
//Acessa a propriedade nome do objeto atual

//4. o que significa extends?
//Significa que a classe guerreiro herda as propriedades e métodos da classe personagem


?>