<!--HECHO POR PABLO GÓMEZ MELÉNDEZ-->
<html>
    <head>
        <title>ejercicio 4.7 PGM</title>
    </head>
    <body>
        <?php
            if ($gestor = opendir('Picture'))
            {
                echo "<table border=1>";
                echo "<tr>";
                $i=0;
                while (false !== ($archivo = readdir($gestor)))
                {
                    if ($archivo!="." && $archivo!="..")
                    {
                        if ($i==4)
                        {
                            $i=0;
                            echo "</tr>";
                            echo "<tr>";
                        }
                        $i++;
                        echo "<td>";
                        echo "<a href=Picture/$archivo target='_blank'><img src=Picture/$archivo width='100' height='100' alt='$archivo'></a>";
                        echo "</td>";
                    }
                }
                echo "</tr>";
                echo "</table>";
                closedir($gestor);
            }
        ?>
    </body>
</html>