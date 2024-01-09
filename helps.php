<?php
//validar y limpiar un campo
function validar_campo($campo){

    $campo = trim($campo);
    $campo = stripcslashes($campo); //limpia toda las barras \
    $campo = htmlspecialchars($campo);  //limpia toda las etiquetas scripts

    return $campo;

}