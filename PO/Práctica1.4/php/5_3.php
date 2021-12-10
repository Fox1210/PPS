<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<body>
    <?php
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        // $nombre = date(DATE_RFC822);//! Da problemas por que añade espacios
        $nombre="aaa".rand();
        print($nombre);
        // copy($_FILES['foto']['tmp_name'], "fotos/$nombre.jpg");//! Da problemas dla barra en windows, no en linux
        copy($_FILES['foto']['tmp_name'], "..\\picture\\$nombre.jpg");
    } else
        echo "Possible file upload attack. Filename: " .
            $_FILES['foto']['name'] . "---" . $_FILES['foto']['tmp_name'];
    ?>
</body>

</html>