<!--HECHO POR PABLO GÓMEZ MELÉNDEZ-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
    <title>ejercicio 5.1</title>
</head>

<body>
    <?php
    // import_request_variables("pg", "f_");//Funcion deprecated
    // extract($_GET,EXTR_PREFIX_ALL,"f");
    extract($_POST, EXTR_PREFIX_ALL,'f');

    echo "Son ";
    echo $f_euros * 166.386;
    echo " pesetas<br>";

    echo "Son ";
    echo $f_dolar * 0.88;
    echo " euros<br>";

    echo "Son ";
    echo $f_libra * 1.17;
    echo " euros<br>";
    ?>
</body>

</html>