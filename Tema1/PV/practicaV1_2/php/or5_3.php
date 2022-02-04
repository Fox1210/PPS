<!--HECHO POR PABLO GÓMEZ MELÉNDEZ-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<body>
    <?php
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $nombre = date(DATE_RFC822);
        print($nombre);
        copy($_FILES['foto']['tmp_name'], "..\picture\$nombre.jpg");
    } else
        echo "Possible file upload attack. Filename: " .
            $_FILES['foto']['name'] . "---" . $_FILES['foto']['tmp_name'];
    ?>
</body>

</html>