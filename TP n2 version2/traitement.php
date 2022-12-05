<?php
include_once "condb.php";
$con = connet("tpvisiteur");
function ajoute($name, $prenom, $email)
{
    global $con;
    $req = "INSERT INTO 'visiteurs' VALUES('$name','$prenom','$email') ";
    return mysqli_query($con, $req);
}
