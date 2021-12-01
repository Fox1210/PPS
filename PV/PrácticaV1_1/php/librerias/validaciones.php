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
    define("NIFREXP", "/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i");
    $validChars = 'TRWAGMYFPDXBNJZSQVHLCKET';
    $nif = (string) $value;
    echo $nif."<br>";
    $nif = strtoupper($nif);
    echo $nif."<br>";
    echo preg_match(NIFREXP, $nif);
    if (!preg_match(NIFREXP, $nif))return false;

    $letter = $nif . substr(-1);
    $charIndex = parseInt(nie . substr(0, 8)) % 23;

    if ($validChars . charAt($charIndex) === letter) return true;
}
