<?php
include_once "librerias/calculo.php";
include_once "librerias/validaciones.php";
define("NUMBER1",2);
define("NUMBER2",2);
echo "<h1>Prueba voluntaria</h1><br>";

echo "Prueba validación foto <br>";
if(is_valid_picture("foto.jpg")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Bien
if(is_valid_picture("php.class")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Mal
echo "<br>";

echo "Prueba validación email <br>";
if(is_valid_email("pgommel@g.educaand.es")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Bien
if(is_valid_email("pgommel@@g.educaand.es")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Mal
echo "<br>";

echo "Prueba validación pasaportes <br>";
if(is_valid_passport("aaa123456A")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Bien
if(is_valid_passport("aaaa23456A")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Mal
echo "<br>";

echo "Prueba validación NIF <br>";
if(is_valid_NIF("77498746q")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Bien
if(is_valid_NIF("78498746Q")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Mal
echo "<br>";

echo "Prueba validación documetos <br>";
if(is_valid_picture("documento.txt")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Bien
if(is_valid_picture("java.class")){echo"Valido"."<br>";}else{echo"No valido"."<br>";}//Mal
echo "<br>";
echo "Número A = ".NUMBER1." y Número B= ".NUMBER2;
echo "Suma= ".sum(NUMBER1,NUMBER2)."&nbsp Resta= ".rest(NUMBER1,NUMBER2)
    ."&nbsp Multipliación= ".mul(NUMBER1,NUMBER2)."&nbsp División= ".div(NUMBER1,NUMBER2);