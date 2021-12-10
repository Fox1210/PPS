<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
    <title>ejercicio 5.2</title>
</head>

<body>
    <?php
    // import_request_variables("pg", "f_");//Funcion deprecated
    extract($_POST, EXTR_PREFIX_ALL, 'f');
    echo "Son ";
    if ($f_conv == 1) {
        echo $f_cantidad / 166.386;
        echo " euros";
    } else {
        echo $f_cantidad / 180.386;
        echo ' dolares';
    }
    echo $f_password;
    echo $f_checkbox;
    echo $f_hidden;
    echo $f_textarea;
    echo $f_select;

    echo "*************************";

    ?>
</body>

</html>