<?php
/*********** Tipo de Dados Escalares ***********/
//string = tipo
$nome = "Olá, Mundo";
var_dump($nome); // mais informações sobre
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;

echo "<br>";

// int
$idade = 10;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;

echo "<br>";

// float
$altura = 1.77;
var_dump($altura);
if(is_float($altura)):
    echo "É um número real";
else:
    echo "Não é um número real";
endif;

echo "<br>";

// boolean
$admin = true;
var_dump($admin);
if (is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;

echo "<hr>";

/*************** Tipos de Dados Compostos **************/
// Array é uma variável que armazena vários valores

$carros = array("Gol","Uno","Camaro",12,20.6,true);
var_dump($carros);

// object

class Cliente {
    public $nome;  //atributo
    public function atribuirNome($nome) { // método
         $this->$nome = $nome;
    }
}

$cliente = new Cliente();  // instanciar a classe 
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um Objeto";
else:
    echo "Não é um objeto";
endif;

echo "<hr>";

/***************** Tipos de Dados Especiais ***************/
// NULL
$cidade = NULL;
var_dump($cidade);

// Resource - tipo para fazer conexões externas, outros sites
