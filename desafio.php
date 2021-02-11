<?php

/* $contador = 1; */

/* for($contador = 1; $contador <= 100; $contador++){
    if ($contador %2 != 0) {
        continue;
    }else{
        echo "$contador é par.". PHP_EOL;
    }   

} */
/* $multiplicador = 5;

for ($contador=1; $contador <= 9; $contador++) { 
    $resultado = $multiplicador * $contador;
    echo " $multiplicador X $contador = $resultado". PHP_EOL;
} */

$altura = 1.50;
$peso = 55;

$conta1 = $altura * $altura;
$conta2 = $peso / $altura;

$imc = number_format($conta2);

echo "Seu imc é de $imc". PHP_EOL;

if ($imc <= 18) {
    echo "Imc baixo.";
}
if ($imc == 18) {
    echo "Imc recomendado.";
}
if ($imc > 18) {
    echo "Imc acima do esperado.";
}

