<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
	<title>Ataque 2 - Ejemplo SIN sanitizar</title>
</head>

<body>
	<?php

	$comentario = trim($_POST["comentario"]);
	if (empty($comentario)) {
		exit("Debes proporcionar un comentario");
	} else {
        // $comentario=strip_tags($comentario); // Sanitiza eliminando todas las etiquettas html
        $comentario=strip_tags($comentario,'<p><b>');// Sanitiza permitiendo algunas de las etiquettas html
		file_put_contents("../txt/comentarios.txt", $comentario, FILE_APPEND);
		echo $_POST['comentario'];
		//echo "<p>comentario sin espacios: ".$comentario;
	}

	/////   //TODO Leer del fichero de comentarios
	echo file_get_contents('../txt/comentarios.txt');

	?>
	</br>

</body>

</html>
