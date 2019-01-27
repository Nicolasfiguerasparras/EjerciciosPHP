<!--
    Crear un documento PHP que muestre por pantalla los múltiplos que
    existen de 7 desde 1 hasta 100. Hacerlo utilizando los 3 tipos de bucles
    que existen en PHP. 
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $numero=7;
            
            echo "Bucle for<br>";
            for($i=0;$i<100;$i++){
                echo "$numero por $i = ".($numero*$i)."<br>";
            }
            
            echo "<br><br>Bucle while<br>";
            $count_while=0;
            while($count_while<100){
                echo "$numero por $count_while = ".($numero*$count_while)."<br>";
                $count_while++;
            }
            
            echo "<br><br>Bucle do-while<br>";
            $count_dowhile=0;
            do{
                echo "$numero por $count_dowhile = ".($numero*$count_dowhile)."<br>";
                $count_dowhile++;
            }while($count_dowhile<100);
            
        ?>
    </body>
</html>
