<!-- programacao orientada a objetos -->

<?php

class personagem {
    public $nome;
    private $vida;
    public $dano;

abstract class personagem {

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
                
        $this->nome = $vida;
}
         abstract public function atacar();
                    }
                
$junior = new personagem("junior", 100, 10);

$junior->setVida(75);

$matheus = new personagem("matheus", 50, 5);
$felipe = new personagem("felipe", 30, 3);


$junior->atacar();

class Guerreiro extends personagem {
    public function atacar(){
        echo "$this->nome atacou com a espada!";
    }

public function defender(){
        echo "$this->nome levantou o escudo!";    }

}
class Mago extends Personagem {
    // Sobreescrevendo o método da classe pai
    public function atacar(){
        echo "$this->nome lançou uma bola de fogo!\n";
    }
}
class Curandeiro extends Personagem {
    // Sobreescrevendo o método da classe pai
    public function atacar(){
        echo "$this->nome atacou com uma faca!\n";
    }

    public function curar(Personagem $alvo, int $quantidade) {
        $novaVida = $alvo->getVida() + $quantidade;
        $alvo->setVida($novaVida); 
        echo "$this->nome !\n";
    }

}


$guerreiro = new Guerreiro("junior", 100, 10);
$mago = new Mago("matheus", 50, 5);
$curandeiro = new Curandeiro("joao", 100, 3);

$personagens = [$guerreiro, $mago, $curandeiro];

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