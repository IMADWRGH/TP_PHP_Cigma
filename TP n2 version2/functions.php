<?php
include_once "condb.php";
$con = connet("tpvisiteurs");

function ajoute($name, $prenom, $email)
{
    global $con;
    $req = "INSERT INTO 'visiteurs' VALUES('$name','$prenom','$email') ";
    return mysqli_query($con, $req);
}

function modifie($num, $name, $prenom, $email)
{
    global $con;
    $req = "UPDATE `visiteurs` SET `NOM`=$name,`PRENOM`=$prenom,`EMAIL`=$email WHERE `ID_VISITEUR`=$num ";
    return mysqli_query($con, $req);
}

function supp($num)
{
    global $con;
    $req = "DELETE FROM `visiteurs` WHERE `ID_VISITEUR`=$num ";
    return mysqli_query($con, $req);
}

function afficher($num)
{
    global $con;
    $req = "SELECT * FROM `visiteurs` WHERE `ID_VISITEUR`= $num";
    return mysqli_query($con, $req);
}

function lister()
{
    global $con;
    $req = "SELECT * FROM `visiteurs`";
    return mysqli_query($con, $req);
}
