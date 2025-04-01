<?php

include 'funcao.php';

$op = $_POST['op'];
$a = $_POST['num1'];
$b = $_POST['num2'];
$result;

switch ($op) {
    case '+':
        $result = $soma($a, $b);
        break;
    case '-':
        $result = $subtracao($a, $b);
        break;
    case '*':
        $result = $multiplicacao($a, $b);
        break;
    case '/':
        $result = $divisao($a, $b);
        break;
    default:
        echo 'erro!';
        break;
}

echo "<h2>O resultado do calculo é: $result</h2>";

?>