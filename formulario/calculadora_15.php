<?php

//VARIAVEIS
$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$soma = 0;
$divisao = 0;
$subtracao = 0;
$multiplicacao = 0;

//PROCESSAMENTO
$soma = $n1 + $n2;
$divisao = $n1 / $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculadora  </title>
</head>
<body>
    <h1> Calculadora    </h1>
    <hr>
    <h3> Resultado da soma:          <?php echo $soma           ?> </h3>
    <h3> Resultado da subtração:     <?php echo $subtracao      ?> </h3>
    <h3> Resultado da divisão:       <?php echo $divisao        ?> </h3>
    <h3> Resultado da multiplicação: <?php echo $multiplicacao  ?> </h3>

</body>
</html>