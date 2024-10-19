<?php
echo 'Current date: ';
echo date('l d/m/Y [H:i:s]') . '<br/>';

$transp = ["Carro", "Moto", "Bicicleta", "Onibus", "Aviao", "Navio"];
foreach ($transp as $veiculo) {
    echo $veiculo . '<br/>';
    if ($veiculo == "Bicicleta") {
        break;
    }
}

echo '<hr/>';

foreach($transp as $veiculo){
    if($veiculo == "Aviao"){
        echo "Aviao tem na lista de veiculos<br/>";
        break;
    }
}