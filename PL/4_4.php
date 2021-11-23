<!--HECHO POR PABLO GÓMEZ MELÉNDEZ-->

<html>
    <head>
        <title>ejercicio 4.4 PGM</title>
    </head>
    <body>
        <?php
            define("FILAS", 10);
            define("COLUMNAS", 10);

            // $columnas=10;
            // $filas=10;
            echo "<table border=1 color=>";
            // $nunber=1;
            for ($i=1; $i<=FILAS; $i++)
            {
                echo "<tr>";
                for ($j=1; $j<=COLUMNAS; $j++)
                {
                    $mul=$i*$j;
                    echo "<td>", $mul, "</td>";
                }
                // $nunber=$nunber+1;
                // $number++
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>
