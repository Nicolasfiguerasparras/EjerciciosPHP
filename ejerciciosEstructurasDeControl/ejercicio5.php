<!DOCTYPE html>
<!--
    Crear una página en PHP que tenga 3 cadenas de caracteres y las
    muestre en una tabla ordenadas en orden alfabético. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $cadena[]="Astrónomo";
            $cadena[]="Zutaten";
            $cadena[]="Diccionario";
            sort($cadena);
            
            for($i=0;$i<3;$i++){
                echo $cadena[$i]."<br>";
            }
        ?>
    </body>
</html>
