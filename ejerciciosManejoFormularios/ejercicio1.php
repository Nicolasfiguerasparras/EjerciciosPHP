<!--
    Realizar un documento en HTML – PHP que solicite al usuario dos imágenes. El
    documento debe asegurarse de que los dos archivos subidos por el usuario son
    imágenes y mostrarlas por pantalla ordenadas por tamaño. 
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--Form action-->
        <?php
            if(isset($_POST['submit'])){
                
            }
        ?>
        <!--/Form action-->
        
        <!--Form-->
        <form action="ejercicio1.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload1">Primera imagen</label>
            <input type="file" name="fileToUpload1" id="fileToUpload1"><br>
            
            <label for="fileToUpload2">Segunda imagen</label>
            <input type="file" name="fileToUpload2" id="fileToUpload2"><br>
            <input type="submit" value="Enviar" name="submit">
        </form>
        <!--/Form-->
    </body>
</html>
