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

buscadorNumeros();

?>