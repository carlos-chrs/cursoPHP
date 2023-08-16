<?php
//print "hola mundo \n ";
//echo "hola mundo ";
//variables y constantes

//variables

//cadena
//$nombre='carlos';
//echo($nombre);
// numeros entero
//$numero = 9.5;
//echo  "este numero es: $numero";
//echo 'este numero es: '.$numero;

//constante

//$curso = 'php';
//echo $curso;
//$curso = 'python';
/*
define('curso','php');
echo curso;
*/
// condicionales 
/*$numero_uno =15;
$numero_dos=20;
if( $numero_uno 
< $numero_dos){
    echo " el $numero_uno es menor que el $numero_dos";

}else if($numero_uno==$numero_dos){
    echo "el $numero_uno es igual al $numero_dos ";

}


else {
    echo "el $numero_dos es menor que el $numero_uno";
}
    */

    // switch//
     $curso = 'python';
   switch($curso){
    case 'php':
     echo 'lunes y el martes';
     break;
    case 'java':
        echo 'miercoles';
        break;
    case 'python':
        echo 'jueves';
        break;
    


     default: // cuando no vea ninguno lo utilize
     break;



   }

    ?>
