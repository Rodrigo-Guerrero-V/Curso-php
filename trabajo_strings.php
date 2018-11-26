<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        .resaltar {
            color:#FF0000;
            font-weight: bold;

        }
    </style>


</head>

<body>

<?php

    $nombre="Rodrigo";

    echo "Hola $nombre";
    echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
    //tambien se puede utilizar \ antes de las comillas dobles en el caso de no querer utilizar las comillas simples//

    $variable1="Casa";
    $variable2="CASA";

  $resultado=strcmp($variable1,$variable2); //Devuelve 1 si no son iguales. 0 si son iguales//

    /*echo "El resultado es " . $resultado;*/

    if ($resultado) {

        echo "No coinciden";

     }else{

        echo "Coinciden";
    }

?>
<!--strcmp = string compare, compara valores de tipo string si estan en mayusculas o minusculas-->

<!-- strcasecmp = string case compare, compara valores de tipo string ignorando si estan en mayuscula o minuscula
    ambas funciones devuelven un 0 si ambas string coinciden y un 1 si no coinciden-->
</body>
</html>


