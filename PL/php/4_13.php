<!--HECHO POR PABLO GÓMEZ MELÉNDEZ-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
    <title>Ejercicio 4.13 PGM</title>
</head>

<body>
    <?php
    // $v[1]=90;
    // $v[30]=7;
    // $v['e']=99;
    // $v['hola']=43;
    // foreach ($v as $indice => $valor)
    // {
    // echo “El elemento de indice $indice vale $valor <br>”;
    // }

    echo "<br>-------------------------------Meses de un año-------------------------------<br>";
    $vector = [
        "enero", "febrero", "marzo", "abril", "mayo",
        "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
    ];
    foreach ($vector as $indice => $valor) {
        echo "El mes en el indice $indice vale $valor <br>";
    }

    /*listado de dias: para cada mes cuales son sus dias, ejemplo: enero:31,
            febrero:28... $listado_dias["enero"]=31 ---> echo "El mes de mes tiene x dias" **Array bidimensional*/
    echo "<br>-------------------------------Dias de cada mes en un año-------------------------------<br>";
    $diasMesAño = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    //VECTOR 3D
    $vector1;
    define('SIZE', 12);
    for ($i=0; $i < SIZE; $i++) {//año
        for ($j=0; $j < SIZE; $j++) {//mes
            for ($k=0; $k < SIZE; $k++) {//dia
                $vector1[$i][$j][$k]=$diasMesAño[$j];
            }
        }
    }
    foreach ($vector1 as $key => $value) {
        foreach ($value as $key => $value1) {
            foreach ($value1 as $key => $value2) {
                echo "$value2<br>";
            }
            echo "################################################<br>";
        }
        echo"************************************************************<br>";
    }
    ?>
</body>
</html>