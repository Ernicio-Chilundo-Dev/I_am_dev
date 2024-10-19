<?php
$i = 0;
$tam = 5;
$vet = array($tam);
// Um detalhe muito importante nunca esqueca de decremenatr ou encrementar 
// Senao while teras uma repiticao infinita 
while($i < $tam){
    echo("O comando while conseguiu repetir ate o numero $i <br/>");
    $i++;//$i++ e o mesmo que $i = $i + 1
}

echo "<br/><hr/><br/>";

$i=0;
while($i < $tam){
    $vet[$i]="Ernicio";
    $i++;
}

$i=0;
while($i < $tam){
  echo $vet[$i].'<br/>'  ;
  $i++;
}
?>