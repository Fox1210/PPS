<!--HECHO POR PABLO GÓMEZ MELÉNDEZ-->

<html>
    <head>
        <title>ejercicio 4.3 PGM</title>
    </head>
    <body>
        <center>
            <?php
                function sum($arg_1, $arg_2)
                {
                    $return=$arg_1+$arg_2;
                    return $return;
                }
                function power($arg_1, $arg_2)
                {
                   $return=pow($arg_1,$arg_2); //*La fun. pow()
                    return $return;
                }
                function saltaLinea()
                {
                    return "<br>";
                }

                echo pow(2,2);
                echo saltaLinea();
                echo sum(1,1);
                echo saltaLinea();
                echo phpinfo();
            ?>
        </center>
    </body>
</html>