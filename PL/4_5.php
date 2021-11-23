
<!--HECHO POR PABLO GÓMEZ MELÉNDEZ-->

<html>
    <head>
        <title>ejercicio 4.5 PGM</title>
    </head>
    <body>
        <?php
            function color()
            {
                $red=rand(0,255);
                $blue=rand(0,255);
                $green=rand(0,255);
                return $red.$green.$blue;
            }
            define("TAM",100);
            echo "<table border=1 >";
            $n=1;
            for ($n1=1; $n1<=TAM; $n1++)
            {
                if ($n1 % 2 == 0)
                    echo "<tr bgcolor=#bdc3d6>";
                else
                    echo "<tr>";
                for ($n2=1; $n2<=TAM; $n2++)
                {
                    $color=color();
                    echo "<td bgcolor=$color>", $n, "</td>";
                    $n=$n+1;
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>
