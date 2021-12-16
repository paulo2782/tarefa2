<?php 
require('class/primo.php');


$p1 = new Primo(10,29);

$count = count($p1->arrayResult());
echo "Numero Inicial: ".$p1->getStart();
echo "<br>";
echo "Numero Final: ".$p1->getEnd();;
echo "<br>";
echo "Resposta: Encontrados ".$count." números primos, são eles: ".json_encode($p1->arrayResult());
?>