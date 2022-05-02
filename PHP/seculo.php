<?php

function retorna_seculo($ano) {
    if ($ano < 100) {
        $seculo = 1;
        echo "Ano $ano = Seculo $seculo <br>";
    }

    else {
        $seculo = floor($ano / 100);
        echo "Ano $ano = Seculo $seculo <br>";
    }
}

retorna_seculo(1905);
retorna_seculo(1700);

?>