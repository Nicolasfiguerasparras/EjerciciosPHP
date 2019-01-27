<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $mascota['nombre']="Toby";
            $mascota['familia']="Mamíferos";
            $mascota['raza']="Maltés";
            $mascota['color']="Blanco";
            $mascota['peso']=5;
            $mascota['altura']=25;
            $mascota['edad']=2;
            
            echo "<table border='1px'>";
                echo "<tr>";
                    echo "<td>Nombre</td>";
                    echo "<td>Familia</td>";
                    echo "<td>Raza</td>";
                    echo "<td>Color</td>";
                    echo "<td>Peso</td>";
                    echo "<td>Altura</td>";
                    echo "<td>Edad</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$mascota[nombre]</td>";
                    echo "<td>$mascota[familia]</td>";
                    echo "<td>$mascota[raza]</td>";
                    echo "<td>$mascota[color]</td>";
                    echo "<td>$mascota[peso]</td>";
                    echo "<td>$mascota[altura]</td>";
                    echo "<td>$mascota[edad]</td>";
                echo "</tr>";
            echo "</table>";
        ?>
    </body>
</html>
