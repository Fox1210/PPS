$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
        <title>Ejercicio 4.13</title>
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
            //
            echo "-------------------------------Meses de un año-------------------------------";
            $vector=["enero","febrero","marzo","abril","mayo",
                    "junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
            foreach ($vector as $indice => $valor) {
                echo "El mes en el indice $indice vale $valor";
            }

            /*listado de dias: para cada mes cuales son sus dias, ejemplo: enero:31,
            febrero:28... $listado_dias["enero"]=31 ---> echo "El mes de mes tiene x dias" **Array bidimensional*/
            echo "-------------------------------Meses de un año-------------------------------";
            $vector=["enero","febrero","marzo","abril","mayo",
                    "junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
            $vector=[[1],]
            foreach ($vector as $i => $valor) {
                echo "El mes en el indice $i vale $valor";
            }

        ?>
    </body>
</html>