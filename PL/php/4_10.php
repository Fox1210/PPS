<!--HECHO POR PABLO GÓMEZ MELÉNDEZ-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
        <title>ejercicio 4.10 PGM</title>
    </head>
    <body>
        <?php
        echo "<h1>Galeria de imagenes con thumbnails</h1>";
        function valida_foto($fotos)
        {
            $rdo=0;
            if (preg_match("/[Jj][Pp][Gg]$/", $fotos))$rdo=1;
            if (preg_match("/[Jj][Pp][Ee][Gg]$/", $fotos))$rdo=1;
            if (preg_match("/[Gg][Ii][Ff]$/", $fotos))$rdo=1;
            if (preg_match("/[Pp][Nn][Gg]$/", $fotos))$rdo=1;
            if (preg_match("/[Bb][Mm][Pp]$/", $fotos))$rdo=1;
            if (preg_match("/[Jj][Ff][Ii][Ff]$/", $fotos))$rdo=1;
            return $rdo;
        }
        function crea_tumbs($foto)
        {
            if (!is_dir('../Picture/tumbs'))
                mkdir ('../Picture/tumbs', 0777);// crea una carpeta
            if (!is_file("../Picture/tumbs/MINI-$foto")){
                // system ("convert -sample 40x40 /fotos/$foto /fotos/tumbs/MINI-$foto");//Comvierte y copia, comando Linux
                copy("../Picture/$foto","../Picture/tumbs/MINI-$foto");//Copia de la carpeta fotos, comandos Windows
            }

        }
        echo "<table border=1>";
        $puntero = opendir('../Picture');
        $i=1;
        while (false !== ($foto = readdir($puntero)))
        {
            if ($foto!="." && $foto!=".." && valida_foto($foto))
            {
                crea_tumbs($foto);
                if ($i==1)
                echo "<tr>";
                echo "<td><a href='../Picture/tumbs/MINI-$foto'>";
                echo "<img src='../Picture/$foto' width=100 height=100></img>";
                echo "</a></td>";
                if ($i==4)
                {echo "</tr>"; $i=0;}
                $i++;
            }
        }
        closedir($puntero);
        echo "</table>";
        ?>
    </body>
</html>