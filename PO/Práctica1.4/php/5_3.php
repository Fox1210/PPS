<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<body>
    <?php
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        echo"El archivo ".$_FILES['foto']['name']." se subio de forma corecta <br>";
        echo"<pre>";
            print_r($_FILES['foto']);//? Muestar informacion de los archivos subidos
        echo"</pre>";

        // $nombre = date(DATE_RFC822);//! Da problemas por que añade espacios
        $nombre="aaa".rand();
        print($nombre);
        // copy($_FILES['foto']['tmp_name'], "fotos/$nombre.jpg");//! Da problemas con la barra en windows, no en linux
        copy($_FILES['foto']['tmp_name'], "..\\picture\\$nombre.jpg");
        echo "";
    } else{
        echo "Possible file upload attack. Filename: " .
            $_FILES['foto']['name'] . "---" . $_FILES['foto']['tmp_name'];
        }
    ?>
</body>

</html>