<!--HECHO POR PABLO GÓMEZ MELÉNDEZ-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
        <title>ejercicio 4.8 PGM</title>
    </head>
    <body>
        <?php
            echo "<h1>Tabla de Fotos con Enlace</h1>";
            function valida_foto($fotos)
            {
                $rdo=0;
                if (preg_match("/[Jj][Pp][Gg]$/", $fotos))$rdo=1;
                if (preg_match("/[Jj][Pp][Ee][Gg]$/", $fotos))$rdo=1;
                if (preg_match("/[Gg][Ii][Ff]$/", $fotos))$rdo=1;
                if (preg_match("/[Pp][Nn][Gg]$/", $fotos))$rdo=1;
                if (preg_match("/[Bb][Mm][Pp]$/", $fotos))$rdo=1;
                return $rdo;
            }
            echo "<table border=1>";
            $puntero = opendir('Picture');
            $i=1;
            while (false !== ($foto = readdir($puntero)))
            {
                if ($foto!="." && $foto!=".." && valida_foto($foto))
                {
                    if ($i==1)
                    echo "<tr>";
                    echo "<td><a href='Picture/$foto' target='_blank'>";
                    echo "<img src='Picture/$foto' width=100 height=100 alt='$foto'></img>";
                    echo "</a></td>";
                    if ($i==4)
                    {
                        echo "</tr>"; $i=0;
                    }
                    $i++;
                }
            }
            closedir($puntero);
            echo "</table>";
        ?>
    </body>
</html>