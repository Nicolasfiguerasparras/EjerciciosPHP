<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $variable1=34;
            $variable2=12;
            $variable3=52;
            $array[]=$variable1;
            $array[]=$variable2;
            $array[]=$variable3;
            $array[]=$variable1+$variable2;
            $array[]=$variable2*$variable3;
            $array[]=$variable1/$variable3;
            $array[]=$variable1+$variable2+$variable3;
            $array[]=($variable2/$variable3)/$variable1;
            echo "<table border='1px'>";
                echo "<tr>";
                    echo "<td>Valor 1</td>";
                    echo "<td>Valor 2</td>";
                    echo "<td>Valor 3</td>";
                    echo "<td>1+2</td>";
                    echo "<td>2*3</td>";
                    echo "<td>1/3</td>";
                    echo "<td>1+2+3</td>";
                    echo "<td>(2+3)/1</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$array[0]</td>";
                    echo "<td>$array[1]</td>";
                    echo "<td>$array[2]</td>";
                    echo "<td>".$array[3]."</td>";
                    echo "<td>".$array[4]."</td>";
                    echo "<td>".$array[5]."</td>";
                    echo "<td>".$array[6]."</td>";
                    echo "<td>".$array[7]."</td>";
                echo "</tr>";
            echo "</table>";
        ?>
    </body>
</html>
