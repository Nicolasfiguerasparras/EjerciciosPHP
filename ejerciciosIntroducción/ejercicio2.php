<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $variableInt=34;
            $variableBoolean=true;
            $variableString="Hola";
            $array[]=$variableInt;
            $array[]=$variableBoolean;
            $array[]=$variableString;
            echo "<table border='1px'>";
                echo "<tr>";
                    echo "<td>0</td>";
                    echo "<td>1</td>";
                    echo "<td>2</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$array[0]</td>";
                    echo "<td>$array[1]</td>";
                    echo "<td>$array[2]</td>";
                echo "</tr>";
            echo "</table>";
        ?>
    </body>
</html>
