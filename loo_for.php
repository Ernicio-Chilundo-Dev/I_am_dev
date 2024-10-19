<?php
echo 'Current date: ';
echo date( 'l/d/F/Y H:i:s').'<br/>';

$tam = 5;
for($i = 0; $i < $tam; $i++ ){
    echo "O valor i: $i <br/>";
}

echo '<br/>';
for($i=0; $i < 165; $i++){
    echo '=';
}
echo '<br/><br/>';
echo "Associado o meu loop for com meu vetor <br/>";

$i = 0;
$tam = 5;
$vet = array($tam);

for($i=0; $i < $tam; $i++){
    $vet[$i]=$i * 2;
}

for($i=0; $i < $tam; $i++){
    echo "<pre>Valor da pos. $i: $vet[$i]</pre>";
}
?>