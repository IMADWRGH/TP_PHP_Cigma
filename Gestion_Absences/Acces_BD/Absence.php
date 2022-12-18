<?php
include_once("connexion.php");
$con = Connexion("gestion_absences");

function Select($snm = 0)
{
    global $con;
    $req = "SELECT * FROM `absence` ";
    if ($snm != 0)
        $req .= " WHERE    cne   = $snm ";
    return mysqli_query($con, $req);
}

function insert($data)
{
    global $con;
    $req = " INSERT INTO absence VALUES({$data[0]},{$data[1]},{$data[2]}) ";
    return mysqli_query($con, $req);
}

function update($data)
{
    global $con;
    $req = "UPDATE absence SET semaine={$data[0]},cne={$data[1]}, nbr_abs ={$data[2]} WHERE semaine={$data[0]}";
    return mysqli_query($con, $req);
}

function delete($snm)
{
    global $con;
    $req = "DELETE FROM `absence` WHERE semaine =$snm";
    return mysqli_query($con, $req);
}

function nbr_snm($snm)
{
    global $con;
    $req = "SELECT e.cne,e.nom,e.prenom,a.nbr_abs FROM eleve e ,absence a WHERE e.cne=a.cne AND a.semaine=$snm;";
    return mysqli_query($con, $req);
}
