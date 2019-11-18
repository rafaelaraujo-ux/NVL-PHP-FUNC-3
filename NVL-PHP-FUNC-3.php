<?php

Function cuentaLetras($frase){

    $frase = strtolower($frase);
    
    $vocales = array("a","e","i","o","u");
    
    foreach($vocales as $valor){
   
        $coincidencia = strpos($frase,$valor);
    
        for ($i=0; $i < count($vocales); $i++) { 
            if($coincidencia === false){

                echo "La frase \"$frase\" NO contiene todas las vocales.";
    
                exit;
            }
        }

    }
    echo "La frase \"$frase\" SI contiene las 5 vocales.";

}	

echo cuentaLetras("Esta es una idea para vosotros");

?>