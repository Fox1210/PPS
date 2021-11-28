<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
 <meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
 <title>Ejercicio 4.13</title>
</head>
<body>
<?php
$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;
foreach ($v as $indice => $valor)
{
 echo “El elemento de indice $indice vale $valor <br>”;
}
?>
</body>
</html>