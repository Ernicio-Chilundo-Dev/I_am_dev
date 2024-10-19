<?php
echo 'current date: ';
echo date("l F d, y").'<hr/>';

echo "Loop Do While<br/>";
//Nesse o loop Do While vai executar apenas uma vez porque a condicao definida no while e falsa
$i=8;
$tam = 5;

do{
    echo "<pre>Variavel i tem o valor..: $i <br/>";
    echo "Variavel tam tem o valor: $tam </pre><br/>";
    $i++;
}while($i < $tam);

echo '<br/><hr/><br/>';
echo 'Loop While';
// Nesse caso o loop while nao vai executar porque a condicao ja esta satisfeita / Falsa
$i=8;
$tam = 5;
while($i < $tam){
    echo "<pre>Variavel i tem o valor..: $i <br/>";
    echo "Variavel tam tem o valor: $tam </pre><br/>";
    $i++; 
}
?>