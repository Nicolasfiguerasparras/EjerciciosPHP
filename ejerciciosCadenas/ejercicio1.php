<!DOCTYPE html>
<!--
    Escribir una página en PHP que tenga un array de 5 cadenas. La página
    deberá mostrar en una tabla cada cadena indicando de alguna forma si
    dicha cadena contiene dentro el símbolo ‘p’. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $array=array("jpoefi","uawidh","uifshp","fiohdushgdf","ifhahweufheri");

            for($i=0;$i<5;$i++){
                $letra=false;
                $palabra=$array[$i];
                for($x=0;$x<strlen($palabra);$x++){
                    if($palabra[$x]=="p"){
                        $letra=true;
                    }
                }
                if($letra==true){
                    echo "La palabra $palabra contiene la letra p.<br>";
                }else{
                    echo "La palabra $palabra no contiene la letra p.<br>";
                }
           }
        ?>
    </body>
</html>
