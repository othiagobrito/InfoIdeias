<?php

function gera_array($minimo, $maximo, $quantidade) {
    $sorteados = array();

    for ($i = 1; $i <= $quantidade; $i++) {
        array_push($sorteados, rand($minimo, $maximo));
    }

    $lista = json_encode($sorteados);
    
    echo "Numeros sorteados: $lista<br>";
    return $sorteados;
}

function verifica($array) {
    $valores = array_count_values($array);
  
    echo "Numeros que nao se repetem: ";
    echo json_encode(array_keys($valores, $search_value = 1, $strict = false));;
    echo "<br><br>";
}

$teste = array(2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1);
echo "Array sorteado exemplo: ".json_encode($teste)."<br>";
verifica($teste);

$aleatorios = gera_array(1, 10, 20);
verifica($aleatorios);

?>