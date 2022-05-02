<?php

function lista_primos($inicial, $final) {
    $numeros = array();
    $inicial += 1;

    while ($inicial < $final) {
        $i = 2;
        $primo = 1;

        while ($i < $inicial) {
            if ($inicial % $i == 0) {
                $primo = 0;
            }
            $i++;
        }
        if ($primo) {
            array_push($numeros, $inicial);
        }
        $inicial++;
    }

    echo json_encode($numeros);   
}

lista_primos(10, 29);

?>