<?php

include_once "Pessoa.php";

$a = new Pessoa();

$a->nome = $_POST['nome'];
$a->email = $_POST['email'];
$a->peso = $_POST['peso'];
$a->altura = $_POST['altura'];



$a->exibirDados(); 
$a->statusIMC($a->calcularIMC($a->peso, $a->altura)); 

?>