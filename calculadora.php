<style>

    .resultado{
        color:#FF0000;
        mso-ansi-font-weight: bold;
        font-size: 32px;
    }

</style>

<?php


function calcular($calculo){

    if(!strcmp("Suma",$calculo)){
        global $numero1;
        global $numero2;

        $resultado=$numero1+$numero2;

        echo "<p class='resultado'> El resultado es:  $resultado</p>";
    }

    if(!strcmp("Resta",$calculo)){
        global $numero1;
        global $numero2;

        $resultado=$numero1-$numero2;

        echo "<p class='resultado'> El resultado es:  $resultado</p>";
    }

    if(!strcmp("Multiplicación",$calculo)){
        global $numero1;
        global $numero2;

        $resultado=$numero1*$numero2;

        echo "<p class='resultado'> El resultado es:  $resultado</p>";
    }

    if(!strcmp("División",$calculo)){
        global $numero1;
        global $numero2;

        $resultado=$numero1/$numero2;

        echo "<p class='resultado'> El resultado es:  $resultado</p>";
    }

    if(!strcmp("Módulo",$calculo)){
        global $numero1;
        global $numero2;

        $resultado=$numero1%$numero2;

        echo "<p class='resultado'> El resultado es:  $resultado</p>";
    }

    if(!strcmp("Incremento",$calculo)){
        global $numero1;
        $numero1++;

        $resultado=$numero1;

        echo "<p class='resultado'> El resultado es:  $resultado</p>";
    }

    if(!strcmp("Módulo",$calculo)){
        global $numero1;
        $numero1--;

        $resultado=$numero1;

        echo "<p class='resultado'> El resultado es:  $resultado</p>";
    }

}

?>