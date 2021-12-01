<?php
include_once "librerias/calculo.php";
include_once "librerias/validaciones.php";
echo "<h1>Prueba voluntaria</h1><br>";

echo "Prueba validación NIF <br>";
if(is_valid_NIF("78498746Q")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}
if(is_valid_NIF("77498746q")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}

echo "Prueba validación email <br>";
echo is_valid_email("pgommel@g.educaand.es")."<br>";
echo is_valid_email("pgommel@@g.educaand.es")."<br>";

echo "Prueba validación pasaportes <br>";
echo is_valid_passport("aaa123456A")."<br>";
echo is_valid_passport("aaaa23456A")."<br>";

echo "Prueba validación NIF <br>";
echo is_valid_picture("foto.jpg")."<br>";
echo is_valid_picture("php.class")."<br>";