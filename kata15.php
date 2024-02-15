<?php


function buscadorNumeros(){
    $numInicial = readline("Introduce el número del cual quieres comprobar si tiene una cifra: ");
    $numComprobar = readline("Ahora introduce la cifra que quieres comprobar:");

    $numArray = array_map('intval', str_split($numInicial));


    if (in_array ($numComprobar,$numArray)){
        echo "La cifra ", $numComprobar," existe en el numero ", $numInicial;
    }else{
        echo "La cifra ", $numComprobar," NO existe en el numero ", $numInicial;
    }


}

function buscadorNumerosManual(){
    $numInicial2 = readline("Introduce el número del cual quieres comprobar si tiene una cifra: ");
    $numComprobar2 = readline("Ahora introduce la cifra que quieres comprobar:");
    $numArray2 = array_map('intval', str_split($numInicial2));
    $dentroNumero = False;

    for ($i = 0; $i<(count($numArray2)); $i++){
        if ($numArray2[$i]==$numComprobar2){
            $dentroNumero=True;
        }

    }
    if($dentroNumero==TRUE){
    echo "La cifra ", $numComprobar2," existe en el numero ", $numInicial2;
    }else{
        echo "La cifra ", $numComprobar2," NO existe en el numero ", $numInicial2;
    }
}

buscadorNumerosManual();

?>
