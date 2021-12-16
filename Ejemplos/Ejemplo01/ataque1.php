<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Ataque 1 - ejemplo sin sanitizar</title>
    </head>
    <body>
        <?php
        $comentario = trim($_POST["comentario"]);
        if (empty($comentario)) {
            exit("debes meter un comentario");
        }else{
            file_put_contents("comentario.txt",$comentario,FILE_APPEND);
            echo $_POST['comentario'];
        }
        ?>
    </body>
</html>