<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $variableInt=543;
            $variableString="Hola";
            $variableBoolean=true;
            echo 'La variable "$variableBoolean" es del tipo '.gettype($variableBoolean)."<br>";
            echo 'La variable "$variableInt" es del tipo '.gettype($variableInt)."<br>";
            echo 'La variable "$variableString" es del tipo '.gettype($variableString)."<br>";
        ?>
    </body>
</html>
