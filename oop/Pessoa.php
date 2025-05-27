<?php

class Pessoa{
    public $nome;
    public $peso;
    public $altura;
    public $email;

    public function exibirDados(){
        echo "O seu nome é: ".$this->nome."<br>";
        echo "O seu email é: ".$this->email."<br>";
        echo "O seu peso é: ".$this->peso."<br>";
        echo "A sua altura é: ".$this->altura."<br>";
    }

    public function calcularIMC($peso, $altura){
        return $peso / ($altura**2);
    }

    public function statusIMC($imc){
        echo "O seu IMC é: ".$imc."<br>";

        if ($imc < 18.5){
            echo "Status IMC: Magro";
        }
        else if($imc >= 18.5 && $imc <= 24.9){
            echo "Status IMC: Normal";
        }
        else if($imc >= 25 && $imc <= 29.9){
            echo "Status IMC: Sobrepeso";
        }
        else if($imc >= 30 && $imc <= 39.9){
            echo "Status IMC: Obesidade";
        }
        else{
            echo "Status IMC: Obesidade Grave";
        }
    }
}


?>