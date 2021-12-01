<?php
/** Valid picture */
function is_valid_picture($picture)
{
    if (preg_match("/[Jj][Pp][Gg]$/", $picture)) return true;
    if (preg_match("/[Jj][Pp][Ee][Gg]$/", $picture)) return true;
    if (preg_match("/[Gg][Ii][Ff]$/", $picture)) return true;
    if (preg_match("/[Pp][Nn][Gg]$/", $picture)) return true;
    if (preg_match("/[Bb][Mm][Pp]$/", $picture)) return true;
    if (preg_match("/[Jj][Ff][Ii][Ff]$/", $picture)) return true;
    return false;
}
/** Valid passports */
function is_valid_passport($passport)
{
    $return = False;
    if (preg_match("/^[a-z]{3}[0-9]{6}[a-z]?$/i", $passport)) $return = TRUE;
    return $return;
}
/** Valid email */
function is_valid_email($email)
{
    if(preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $email)){
        return true;
    }else{
        return false;
    }
}
/** Valid NIF */
function is_valid_NIF($value)
{
    $nif = strtoupper($value);
    if(!preg_match("/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i",$nif))return false;
    $letra = substr($nif, -1);
    $numeros = substr($nif, 0, -1);
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra
    && strlen($letra) == 1 && strlen($numeros) == 8) {
        return true;
    } else {
        return false;
    }
}
/** Valid document */
function is_valid_doc($document)
{
    if (preg_match("/[Dd][Oo][Cc][Xx]$/", $document)) return true;
    if (preg_match("/[Oo][Dd][Tt]$/", $document)) return true;
    if (preg_match("/[Rr][Tt][Ff]$/", $document)) return true;
    if (preg_match("/[Pp][Dd][Ff]$/", $document)) return true;
    if (preg_match("/[Tt][Xx][Tt]$/", $document)) return true;
    return false;
}