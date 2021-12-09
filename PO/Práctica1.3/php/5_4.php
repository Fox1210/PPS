<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
    <title>Ejercicio 5.4</title>
</head>

<body>
    <?php
    // import_request_variables("pg", "f_"); //!Funcion obsoleta
    extract($_POST, EXTR_PREFIX_ALL, 'f');
    if (isset($f_estado) && $f_estado == 1) {//! is_set no existe, se usa "isset"
        echo "Son ";
        if ($f_conv == 1)
            echo $f_cantidad / 166.386 . " euros<BR>";
        else
            echo $f_cantidad / 180.386 . " dolares<BR>";
    }
    ?>
    <form method=post action=5_4.php>
        Introduzca la cantidad: <input type=text name=cantidad size=10>
        <input type=submit name=ok value=enviar>
        <br>
        Seleccione el tipo de conversion:<br>
        <input type=radio name=conv value=1 checked>Euros<br>
        <input type=radio name=conv value=2>dolares<br>
        <input type=hidden name=estado value=1>
    </form>
</body>

</html>