<?php
    function valida_extension_foto($fotos)
    {
        $rdo = 0;
        if (preg_match("/[Jj][Pp][Gg]$/", $fotos)) $rdo = 1;
        if (preg_match("/[Jj][Pp][Ee][Gg]$/", $fotos)) $rdo = 1;
        if (preg_match("/[Gg][Ii][Ff]$/", $fotos)) $rdo = 1;
        if (preg_match("/[Pp][Nn][Gg]$/", $fotos)) $rdo = 1;
        if (preg_match("/[Bb][Mm][Pp]$/", $fotos)) $rdo = 1;
        if (preg_match("/[Jj][Ff][Ii][Ff]$/", $fotos)) $rdo = 1;
        return $rdo;
    }
    function valida_pasaporte($numPas)
    {
        $return = False;
        if (preg_match("/^[a-z]{3}[0-9]{6}[a-z]?$/i", $numPas)) $return = TRUE;
        return $return;
    }
