<!--
    Codificar una página en PHP que muestre por pantalla las 10 primeras
    potencias de un número.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $numero=2;
            for($i=0;$i<10;$i++){
                echo "$numero elevado a $i es ".(pow($numero,$i))."<br>";
            }
        ?>
    </body>
</html>
